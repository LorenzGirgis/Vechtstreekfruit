// map display
var map = L.map('map').setView([52.25459030239216, 5.040947601205085], 18.7);
L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);

// marker test

// live location
L.control.locate().addTo(map);
