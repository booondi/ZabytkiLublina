<!DOCTYPE html>
<html>
<head>
<script type="text/javascript"
src="http://openlayers.org/en/v3.12.1/build/ol.js"></script>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Wyszukiwarka zabytków Lublina</title>
<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="strona.php">ZABYTKI LUBLINA</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="strona.php">STRONA GŁÓWNA</a></li>
      <li><a href="lublin.php">LUBLIN</a></li>
      <li><a href="zabytki.php">OGÓLNIE O ZABYTKACH</a></li>
        <li><a href="lista.php">LISTA ZABYTKÓW</a></li>
        <li><a href="wyszukiwarka.php">WYSZUKIWARKA</a></li>
        <li><a href="admin.php">PANEL ADMINISTRATORA</a></li>
        <?php 
        session_start(); 
if (isset($_SESSION['zalogowany'])){ 
echo '<li><a href="wyloguj.php">WYLOGUJ SIĘ</a></li>';
}
?>
    </ul>
  </div>
</nav>
<lista>
    
    
    <?php
    
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');

    
$que = mysqli_query($con,"SELECT * FROM zabytki ORDER BY nazwa");

while($row=mysqli_fetch_assoc($que)){
	echo "&bull; <a href=\"zabytek.php?id=$row[id_z]\">$row[nazwa]</a><br>";

}


mysqli_close($con);
    ?>
</lista>

<main>
    <?php
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');

$id_liczba = 0 + $_GET[id];
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z = $id_liczba");
while($row=mysqli_fetch_assoc($que)){
	echo "<center><b><h1>$row[nazwa]</h1></b></center> <br>";
    echo "<center>$row[zdjecie]</center> <br>";
    echo "<b>Adres: </b>$row[adres] <br>";
    echo "<b>Lata budowy: </b>$row[latabudowy] <br>";
    echo "<b>Styl: </b>$row[styl] <br>";
    echo "<b>Dzielnica: </b>$row[dzielnica] <br>";
    echo "<b><h2>Opis: </h2></b>$row[opis] <br>";
}

mysqli_close($con);
    ?>
    <h2><center>Lokalizacja:</center></h2>
<center><div id="mapdiv" style="border-style:solid; border-color:black; border-width:1px; width:600px; height:400px"></div></center>
  <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
  <script>
    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());

    var lonLat = new OpenLayers.LonLat( <?php
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');

$id_liczba = 0 + $_GET[id];
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z = $id_liczba");
while($row=mysqli_fetch_assoc($que)){
echo $row[dlugosc];
echo ',';
    echo $row[szerokosc];
}

mysqli_close($con);
    ?> )
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );
          
    var zoom=18;

    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
    
    markers.addMarker(new OpenLayers.Marker(lonLat));
    
    map.setCenter (lonLat, zoom);
  </script>
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>