// map display
var map = L.map('map').setView([52.25459030239216, 5.040947601205085],17.5);
L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
maxZoom: 21,
subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);


// picture appel
var blueMarker = L.icon({
  iconUrl: "boom1.png",

    iconSize:     [45, 60], // Don't touche
    iconAnchor:   [12, 41], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    
});
L.control.locate().addTo(map);

var map = L.map('map').fitWorld();
// locatie
map.locate({setView: true, maxZoom: 16}); 

// circle of location radius
function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(map)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);

//Error als locatie niet werkt
function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);