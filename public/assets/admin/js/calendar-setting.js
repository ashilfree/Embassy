// (function () {
// 	'use strict';
// 	// ------------------------------------------------------- //
// 	// Calendar
// 	// ------------------------------------------------------ //
// 	var dat;
// 	jQuery(function() {
//
// 		// page is ready
// 		jQuery('#calendar').fullCalendar({
// 			themeSystem: 'bootstrap4',
// 			// emphasizes business hours
// 			locale:'ar',
// 			dir: 'rtl',
// 			timeZone: 'UTC',
// 			hiddenDays: [ 5, 6 ],
// 			selectable: true,
// 			defaultView: 'month',
// 			// event dragging & resizing
// 			editable: true,
// 			// header
// 			header: {
// 				left: 'title',
// 				center: 'month',
// 				right: 'today prev,next'
// 			},
// 			events: [
// 			{
// 				start: "2020-08-18",
// 				end: "2020-08-18",
// 				selectable: false,
// 				color: 'red',
// 				rendering: 'background',
// 			}
// 			],
// 			dayClick: function(e) {
// 				alert(e.toString());
// 			},
// 		});
// 		jQuery(".tab-wizard").steps({
// 			headerTag: "h5",
// 			bodyTag: "section",
// 			transitionEffect: "fade",
// 			titleTemplate: '<span class="step">#index#</span> #title#',
// 			labels: {
// 				finish: "S"
// 			}, onStepChanging: function(event, currentIndex, newIndex)
// 			{
// 				if (currentIndex === 0)
// 				{
// 					// if ($("#choose > option:selected").val() === "1")
// 					// {
// 					// 	wizard.steps("remove", 1);
// 					// 	// In this case you could also use add instead of insert
// 					// 	wizard.steps("insert", 1, {
// 					// 		title: "Result 2",
// 					// 		contentMode: "async",
// 					// 		contentUrl: "/rest/service/1"
// 					// 	});
// 					// }
// 				}
// 				return true;
// 			},
// 			onStepChanged: function (event, currentIndex, priorIndex) {
// 				// $('.steps .current').prevAll().addClass('disabled');
// 			},
// 			onFinished: function (event, currentIndex) {
// 				// $('#success-modal').modal('show');
// 			}
// 		});
// });
//
// })(jQuery);

$('document').ready(function(){
	var selectedDate;
	var dat;
	var arrAdmin;
	var arrCitizen
	var wizard = $(".tab-wizard").steps({
		headerTag: "h5",
		bodyTag: "section",
		transitionEffect: "fade",
		titleTemplate: '<span class="step">#index#</span> #title#',
		labels: {
			finish: "Submit"
		},onStepChanging: function(event, currentIndex, newIndex)
		{
			if (currentIndex === 0)
			{
				if (dat === undefined )
				{
					alert('اختر يوما من فضلك')
					return false
				}
				var url = '/check-schedule-backend/' + dat;
				loadUrl(url);
			}
			if(currentIndex > newIndex){
				document.querySelectorAll('.timing').forEach( a => {

					if(a.hasAttribute('disabled')){
						a.removeAttribute('disabled');
					}
					if(a.classList.contains('selected')){
						a.classList.remove('selected')
					}
					if(a.classList.contains('selected2')){
						a.classList.remove('selected2')
					}
				})
			}
			return true;
		},
		onStepChanged: function (event, currentIndex, priorIndex) {
			$('.steps .current').prevAll().addClass('disabled');
		},
		onFinished: function (event, currentIndex) {
			var arrayData=[];
			document.querySelectorAll('.timing').forEach( a => {

				if(a.classList.contains('selected')){
					arrayData.push(a.dataset.time);
				}
			})
			loadUrl('/update-schedule-backend', 'POST', {"date": dat, "data": arrayData}).then(function(value){
				if(value){
					$('#success-modal').modal('show');
					// TODO: go back to first step
					wizard.steps('previous');
				}else{
					$('#failed-modal').modal('show');
				}
			});
		}
	});
	$('#calendar').fullCalendar({
		themeSystem: 'bootstrap4',
		// emphasizes business hours
		locale:'ar',
		dir: 'rtl',
		timeZone: 'UTC',
		hiddenDays: [ 5, 6 ],
		selectable: true,
		defaultView: 'month',
		// event dragging & resizing
		editable: true,
		// header
		header: {
			left: 'title',
			center: 'month',
			right: 'today prev,next'
		},
		events: [
			{
				start: "2020-08-18",
				end: "2020-08-18",
				selectable: false,
				color: 'red',
				rendering: 'background',
			}
		],
		dayClick: function(date, jsEvent, view) {
			dat = date.format();
			selectedDate = date;
			console.log(jsEvent)
			let days = document.querySelectorAll(".fc-highli");
			days.forEach(function (day) {
				day.classList.remove("fc-highli");
			});

				$(this).addClass("fc-highli");

		},
	});
	async function loadUrl(url, method = 'GET', data = {}) {
		let init = {
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			}
		};
		if (method === 'POST'){
			init = {
				method: 'POST',
				headers: {
					'X-Requested-With': 'XMLHttpRequest',
					'Content-Type': 'application/json'
				},
				body: JSON.stringify(data)
			};
		}
		const request = new Request(url, init);
		const response = await fetch(request);
		if (response.status >= 200 && response.status < 300)
		{
			const res = await response.text();
			const data = JSON.parse(res);
			if(data['response'] === 'check') {
				arrAdmin = data['arrayAdmin']
				arrCitizen = data['arrayCitizen']
				if (selectedDate < new Date()) {
					$('.actions ul li:nth-child(3)').attr({"aria-hidden":true, "aria-disabled":true}).addClass("disabled").css("display", "none")
					for (var i = 0; i < arrAdmin.length; i++) {
						document.querySelectorAll('.timing').forEach(a => {
							a.setAttribute('disabled', '');
							if (a.dataset.time === arrAdmin[i]) {
								a.classList.add('selected')
							}
						})
					}
					for (var i = 0; i < arrCitizen.length; i++) {
						document.querySelectorAll('.timing').forEach(a => {
							if (a.dataset.time === arrCitizen[i]) {
								a.classList.add('selected2')
							}
						})
					}
				} else {
					var attr = $('.actions ul li:nth-child(3)').attr('aria-disabled');

					if (typeof attr !== typeof undefined && attr !== false) {
						$('.actions ul li:nth-child(3)').removeAttr("aria-disabled").removeClass("disabled")
					}
					for (var i = 0; i < arrAdmin.length; i++) {
						document.querySelectorAll('.timing').forEach(a => {

							if (a.dataset.time === arrAdmin[i]) {
								a.setAttribute('disabled', '');
							}
						})
					}
					for (var i = 0; i < arrCitizen.length; i++) {
						document.querySelectorAll('.timing').forEach(a => {
							if (a.dataset.time === arrCitizen[i]) {
								if (!a.classList.contains('selected'))
									a.classList.add('selected')
							}
						})
					}
				}
			}else{
				return true
			}
		}else {
			console.error(response);
			return false
		}
	}
	document.querySelectorAll('.timing').forEach( a => {
		a.addEventListener('click', e =>{
			e.preventDefault();
			if(!a.hasAttribute('disabled')){
				a.classList.toggle('selected')
				time = a.dataset.time;
			}
		})
	})
})

