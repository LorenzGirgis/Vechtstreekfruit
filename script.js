var map = L.map('map').setView([52.25459030239216, 5.040947601205085], 18.7);
L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);

// function to make marker
var marker = L.marker([52.25459030239216, 5.040947601205085]).addTo(map);
marker.bindPopup("<b>Soortboom</b><br>Soortboom: Appelboom.").openPopup();

// if left click on map show latitude n longitude cords in alert

// live location
L.control.locate().addTo(map);
// class layout
// var appel1 = L.marker([52.25438534163136, 5.040667355060577]).bindPopup('<b>Soortboom</b><br>Soortboom: Appelboom'),
//     appel2    = L.marker([52.254261375563445, 5.040605664253236]).bindPopup('<b>Soortboom</b><br>Soortboom: Appelboom'),
//     appel3   = L.marker([52.25422196905868, 5.040985196828843]).bindPopup(' <b>Soortboom</b><br>Soortboom: Appelboom')
//     var Appels = L.layerGroup([appel1, appel2, appel3]);

//     var osm = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
//         maxZoom: 20,
//         subdomains:['mt0','mt1','mt2','mt3']
//         });

// //var streets = L.tileLayer(mapboxUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mapboxAttribution});

// //var map = L.map('map', {
//     //center: [39.73, -104.99],
//     //zoom: 10,
//   //  layers: [osm, cities]
// //});