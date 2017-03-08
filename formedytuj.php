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
        <li class="active"><a href="admin.php">PANEL ADMINISTRATORA</a></li>
        <li><a href="wyloguj.php">WYLOGUJ SIĘ</a></li>
    </ul>
  </div>
</nav>

<main>
    <font color="red"><b><center>Panel administratora</center></b></font>
    <center><a href="paneladmina.php">Panel główny</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="formdodaj.php">Dodaj zabytek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="formedytuj.php">Edytuj zabytek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="formusun.php">Usuń zabytek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="dodajzdjecie.php">Dodaj zdjęcie</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="usunzdjecie.php">Usuń zdjęcie</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="wyloguj.php">Wyloguj się</a></center>
    <hr>
<h2><center>Edytuj zabytek z bazy</center></h2>
    Podaj numer id zabytku, który chcesz edytować.
<form action="edytuj.php" method="post">
Numer id: <input type="text" name="id_z">
<input type="submit" value="Edytuj">
    <hr>
    <?php
    $con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');

    
$que = mysqli_query($con,"SELECT * FROM zabytki ORDER BY nazwa");
while($row=mysqli_fetch_assoc($que)){
	echo "<b>Nazwa: </b>$row[nazwa] <b>Numer id: </b>$row[id_z]<br>";
}

mysqli_close($con);
    ?>
</form>
    <hr>
Kliknij <a href="paneladmina.php">powrót</a> jeżeli chcesz anulować.
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>