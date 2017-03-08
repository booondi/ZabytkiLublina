<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<?php

echo'<h2>Wyniki wyszukiwania:</h2>';
$_POST['phrase']=trim($_POST['phrase']); 
if(empty($_POST['phrase'])) 
die('Formularz wypełniony w sposób nieprawidłowy. Spróbuj ponownie.<p>
<p><form name="wyszukiwanie" action="search.php" method="post"><p>
<input type="text" name="phrase">
<input type="submit" name="wyszukaj" value="Szukaj">');
else
{
  $con=mysqli_connect('localhost','pbados','pbados','pbados_zabytki');
  $query="Select * From zabytki Where nazwa Like '%{$_POST['phrase']}%'";
  mysqli_set_charset($con, 'utf8');
  $result=mysqli_query($con,$query);
  $ilosc=mysqli_num_rows($result);
  echo'Znaleziono: '.$ilosc.'<br /><br />';
  for($x=0;$x<$ilosc;$x++)
  {
    $row=mysqli_fetch_assoc($result);
        echo $x+1;
        echo '. ';
        echo '<a href=zabytek.php?id=';
        echo $row[id_z];
        echo '>';
        echo $row[nazwa];
        echo '</a>';
        echo'<br />';
  }
    echo '<hr>';
    echo 'Nie tego szukałeś? Spróbuj ponownie.';
    echo '<form name="wyszukiwanie" action="search.php" method="post"><p>
<input type="text" name="phrase" size="50">
<input type="submit" name="wyszukaj" value="Szukaj">';
}
mysqli_close($con);
?>
    
</main>

    
<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki. <a href="admin.php">Panel administratora</a>
</footer>


</body>
</html>