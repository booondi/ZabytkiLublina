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
<h2><center>Usuń zabytek z bazy</center></h2>
Formularz wypełniony w sposób nieprawidłowy. Musisz podać numer id, aby usunąć zabytek!<p>
<a href="formusun.php">Powrót do panelu usuwania.</a>');
else
{
$id_z=$_POST['id_z'];

$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");

$que = "DELETE FROM `pbados_zabytki`.`zabytki` WHERE `zabytki`.`id_z` = '$id_z'";
mysqli_query($con, $que);

    

    echo 'Zabytek usunięto z bazy.<br>';
    echo '<a href="paneladmina.php">Powrót do panelu administratora.</a>';
    mysqli_close($con);
}
?>
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki. <a href="admin.php">Panel administratora</a>
</footer>


</body>
</html>