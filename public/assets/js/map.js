import L from 'leaflet'

function init(lat, lng){
    let map = $('#map');
    if(map === null){
        return;
    }

    let icon = L.icon({
        iconUrl: '/media/marker-icon.png',

    });

    let center = [lat, lng];
    map = L.map('map').setView(center, 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiYXNoaWxmcmVlIiwiYSI6ImNrOHZqcThlZTAwd3AzbW50dWV2Znl5bngifQ.fGFQxTQbRbL-UfyJAul9zA'
    }).addTo(map);
    L.marker(center, {icon: icon}).addTo(map);
}

init(29.366907, 48.014658)