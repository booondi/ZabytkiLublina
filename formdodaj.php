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
    <font color="red"><b><center>Panel administratora</center></b></font>
    <center><a href="paneladmina.php">Panel główny</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="formdodaj.php">Dodaj zabytek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="formedytuj.php">Edytuj zabytek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="formusun.php">Usuń zabytek</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="dodajzdjecie.php">Dodaj zdjęcie</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="usunzdjecie.php">Usuń zdjęcie</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="wyloguj.php">Wyloguj się</a></center>
    <hr>
    <h2><center>Dodaj nowy zabytek do bazy</center></h2>
<form action="dodaj.php" method="post">
    <table>
  <tr>
      <td><b>Nazwa zabytku:</b></td><td> <input type="text" name="nazwa" size="50"></td>
      </tr>
      <tr><td><b>Adres:</b></td><td> <input type="text" name="adres" size="50"></td></tr>
        <tr><td><b>Opis:</b></td><td> <font color="red"><small>W celu dodania nowego akapitu użyj znacznika &lt;p&gt;.</small></font> <br><textarea name="opis" rows="15" cols="80"></textarea></td></tr>
        <tr><td><b>Lata budowy:</b></td><td> <input type="text" name="latabudowy" size="50"></td></tr>
        <tr><td><b>Styl:</b></td><td> <input type="text" name="styl" size="50"></td></tr>
        <tr><td><b>Dzielnica:</b></td><td> <input type="text" name="dzielnica" size="50"></td></tr>
        <tr><td><b>Szerokość geo.:</b></td><td> <input type="text" name="szerokosc" ></td></tr>
        <tr><td><b>Długość geo.:</b></td><td> <input type="text" name="dlugosc"></td></tr>
        <tr>
        <tr><td><b>Link do zdjęcia:</b></td><td> <input type="text" name="zdjecie" size="100" value='<img src="zdjecia/nazwazabytku.jpg" alt="Nazwa Zabytku">'></td></tr>
    </table>
        <small>Podane koniecznie według schematu, np. </i><?php echo htmlspecialchars('<img src="zdjecia/nazwazabytku.jpg" alt="Nazwa Zabytku">');?>, unikaj polskich znaków.</small><p>
    Możliwość dodania zdjęcia w kolejnym kroku.<br>
<input type="submit" value="Dodaj zabytek">
</form>

<hr>
Kliknij <a href="paneladmina.php">powrót</a> jeżeli chcesz anulować.
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>