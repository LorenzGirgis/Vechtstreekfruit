<?php
$dsn = "mysql:dbname=restaurant;host=localhost";
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
try {
    $conn = new PDO("mysql:host=$servername;dbname=vechtsfruit", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (isset($_POST['submit'])) {
$rasnaam = $_POST['rasnaam'];
$soort = $_POST['soort'];
$aantal = $_POST['aantal'];
$tijdvak = $_POST['tijdvak'];
$jaarcheck = $_POST['jaarcheck'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$pdoQuery = " INSERT INTO `bomen`(`rasnaam`, `soort`, `aantal`, `tijdvak`, `jaarcheck`, `latitude`, `longitude`) VALUES (:rasnaam, :soort, :aantal, :tijdvak, :jaarcheck, :latitude, :longitude)";
$pdoQuery_run = $conn->prepare($pdoQuery);
$pdoQuery_execc = $pdoQuery_run->execute(array(":rasnaam"=>$rasnaam, ":soort"=>$soort, ":aantal"=>$aantal, ":tijdvak"=>$tijdvak, ":jaarcheck"=>$jaarcheck, ":latitude"=>$latitude, ":longitude"=>$longitude));
if ($pdoQuery_execc) {
    echo "<p><center>Boom is toegevoegd</center></p>";
} else {
    echo "<p><center>Boom is niet toegevoegd</center></p>";
}
} 

$mirvat = $conn->prepare("SELECT * FROM bomen");
$mirvat->execute();
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Points on a map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.78.0/dist/L.Control.Locate.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css" /> 
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.78.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="map"></div>
    <script src="script.js"></script>

  </body>
</html>    

<script>
// function to make marker

var database = <?php echo json_encode($mirvat->fetchAll(PDO::FETCH_ASSOC)); ?>;
for (var i = 0; i < database.length; i++) {
    var marker = L.marker([database[i].latitude, database[i].longitude]).addTo(map);
    marker.bindPopup("<b>Rasnaam: </b>" + database[i].rasnaam + "<br><b>Soort: </b>" + database[i].soort + "<br><b>Aantal: </b>" + database[i].aantal + "<br><b>Tijdvak: </b>" + database[i].tijdvak + "<br><b>Jaarcheck: </b>" + database[i].jaarcheck + "<br><b>Latitude: </b>" + database[i].latitude + "<br><b>Longitude: </b>" + database[i].longitude)();
}
  </script>