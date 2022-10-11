// $(".tab-wizard").steps({
// 	headerTag: "h5",
// 	bodyTag: "section",
// 	transitionEffect: "fade",
// 	titleTemplate: '<span class="step">#index#</span> #title#',
// 	labels: {
// 		finish: "S"
// 	}, onStepChanging: function(event, currentIndex, newIndex)
// 	{
// 		if (currentIndex === 0)
// 		{
// 			if ($("#choose > option:selected").val() === "1")
// 			{
// 				wizard.steps("remove", 1);
// 				// In this case you could also use add instead of insert
// 				wizard.steps("insert", 1, {
// 					title: "Result 2",
// 					contentMode: "async",
// 					contentUrl: "/rest/service/1"
// 				});
// 			}
// 		}
// 		return true;
// 	},
// 	onStepChanged: function (event, currentIndex, priorIndex) {
// 		$('.steps .current').prevAll().addClass('disabled');
// 	},
// 	onFinished: function (event, currentIndex) {
// 		$('#success-modal').modal('show');
// 	}
// });