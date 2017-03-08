
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript"
src="http://openlayers.org/en/v3.12.1/build/ol.js"></script>
<meta charset="utf-8" />
<title>Wyszukiwarka zabytków Lublina</title>
<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>



<header>
<h1>Zabytki Lublina</h1>
</header>



<nav>
<a href="http://matrix.umcs.pl/~pbados/lic/strona.html">Strona główna</a>&nbsp;
<a href="http://matrix.umcs.pl/~pbados/lic/lublin.html">Informacje o Lublinie</a>&nbsp;
<a href="http://matrix.umcs.pl/~pbados/lic/zabytki.html">Ogólnie o zabytkach</a>&nbsp;
<a href="http://matrix.umcs.pl/~pbados/lic/lista.php">Lista zabytków</a>&nbsp;
<a href="http://matrix.umcs.pl/~pbados/lic/wyszukiwarka.php">Wyszukiwarka zabytków</a>
</nav>

<lista>
<?php
    
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, utf8);

    
$que = mysqli_query($con,"SELECT * FROM zabytki ORDER BY nazwa");
while($row=mysqli_fetch_assoc($que)){
	echo "<table>
  <tr><td><li>$row[link]</li></td>		
  </tr>
</table>";
}

mysqli_close($con);
    ?>
</lista>
    
    
<main>
<?php
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");

$nazwa=$_POST[nazwa];
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE nazwa = '$nazwa'");
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
<center><div id="mapa" style="border-style:dotted;border-color:black;border-width:1px;width:600px;height:400px"></div></center>
<script type="text/javascript">
    var map = new ol.Map({target: mapa});
    var widok = new ol.View({
        zoom: 18.5,
        center: ol.proj.fromLonLat([22.566364,51.247542])
    })
    map.setView(widok);
    var zrodlo1 = new ol.source.OSM();
    var warstwa1 = new ol.layer.Tile({source: zrodlo1});
    map.addLayer(warstwa1);
    map.addLayer(warstwa2);
    
    
</script>
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki. <a href="http://matrix.umcs.pl/~pbados/lic/admin.php">Panel administratora</a>
</footer>


</body>
</html>