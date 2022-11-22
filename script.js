var map = L.map('map').setView([52.25459030239216, 5.040947601205085], 18.7);
L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);
// function to make marker
var marker = L.marker([52.25459030239216, 5.040947601205085]).addTo(map);
marker.bindPopup("<b>Soortboom</b><br>Soortboom: Appelboom.").openPopup();
// if left click on map show latitude n longitude cords in alert
map.on('click', function(e) {
alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
});

L.control.locate().addTo(map);
L.showPopup();