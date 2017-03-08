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
        <li class="active"><a href="wyszukiwarka.php">WYSZUKIWARKA</a></li>
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



<main>
<p>
    <center><h2>Wyszukiwarka zabytków dostępnych w bazie</h2>
<p><form name="wyszukiwanie" action="search.php" method="post">
<input type="text" name="phrase" size="50">

<input type="submit" name="wyszukaj" value="Szukaj">
    </form>
    </center>
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>