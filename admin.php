 <?php 
session_start(); 
if (!isset($_SESSION['zalogowany'])){ 
  header("Location: adminreserved.php"); 
 exit(); 
} 
else{
    header("Location: paneladmina.php");
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
    </ul>
  </div>
</nav>
    
<main>
    <center><h2>Panel administratora</h2>
<form name="login" action="zaloguj.php" method="post">
<table>
  <tr>
    <td>Login:</td> <td><input type="text" name="login"></td>
  </tr>
  <tr><td>Hasło:</td> <td><input type="password" name="haslo"></td>	
  </tr>
</table>
<input type="submit" name="przycisk" value="Zaloguj">
    </center>
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>

</body>
</html>