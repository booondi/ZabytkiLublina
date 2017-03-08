<?php 
session_start(); 
if (!isset($_SESSION['zalogowany'])){ 
  header("Location: adminreserved.php"); 
 exit(); 
} 
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Wyszukiwarka zabytków Lublina</title>
<link rel="stylesheet" href="style.css" type="text/css">
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
        <li class="active"><a href="paneladmina.php">PANEL ADMINISTRATORA</a></li>
        <li><a href="wyloguj.php">WYLOGUJ SIĘ</a></li>
    </ul>
  </div>
</nav>

<main>
    <font color="red"><b><center>Panel administratora</center></b></font><hr>
    <?php
if(empty($_POST['id_z'])) 
die('
<h2><center>Edytuj zabytek z bazy</center></h2>
Formularz wypełniony w sposób nieprawidłowy. Musisz podać numer id, aby edytować zabytek!<p>
<a href="formedytuj.php">Powrót do panelu edycji.</a>');
else
{
$nazwa=$_POST['nazwa'];
$adres=$_POST['adres'];
$opis=$_POST['opis'];
$latabudowy=$_POST['latabudowy'];
$styl=$_POST['styl'];
$dzielnica=$_POST['dzielnica'];
$szerokosc=$_POST['szerokosc'];
$dlugosc=$_POST['dlugosc'];
$zdjecie=$_POST['zdjecie'];
$id_z=$_POST['id_z'];

$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
mysqli_set_charset($con, 'utf8');
$que = "UPDATE zabytki SET nazwa = '$nazwa', adres = '$adres', opis = '$opis', latabudowy = '$latabudowy', styl = '$styl', dzielnica = '$dzielnica', szerokosc = '$szerokosc', dlugosc = '$dlugosc', zdjecie = '$zdjecie' WHERE `zabytki`.`id_z` = '$id_z'";
mysqli_set_charset($con, 'utf8');
mysqli_query($con, $que);

mysqli_close($con);
    echo 'Zabytek zaktualizowany w bazie.<br>';
    echo '<a href="paneladmina.php">Powrót do panelu administratora.</a>';
}
?>


</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>