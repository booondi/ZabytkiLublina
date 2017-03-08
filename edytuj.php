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
    <font color="red"><b><center>Panel administratora</center></b></font><hr>
    <?php
if(empty($_POST['id_z'])) 
die('
<h2><center>Edytuj zabytek z bazy</center></h2>
Formularz wypełniony w sposób nieprawidłowy. Musisz podać numer id, aby edytować zabytek!<p>
<a href="formedytuj.php">Powrót do panelu edycji.</a>');
    ?>
<h2><center>Edytuj zabytek z bazy</center></h2>
<form action="edytuj1.php" method="post">
    <table>
  <tr>
        <tr><td><b>Nazwa zabytku:</b></td><td> <textarea name="nazwa" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[nazwa];
}

mysqli_close($con);
    ?></textarea></td></tr>
      
        
      <tr><td><b>Adres:</b></td><td> <textarea name="adres" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[adres];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
        <tr><td><b>Opis:</b></td><td> <font color="red"><small>W celu dodania nowego akapitu użyj znacznika &lt;p&gt;.</small></font> <br>
<textarea name="opis" rows="15" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[opis];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
        <tr><td><b>Lata budowy:</b></td><td> <textarea name="latabudowy" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[latabudowy];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
<tr><td><b>Styl:</b></td><td> <textarea name="styl" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[styl];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
<tr><td><b>Dzielnica:</b></td><td> <textarea name="dzielnica" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[dzielnica];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
        <tr><td><b>Szerokość geo.:</b></td><td> <textarea name="szerokosc" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[szerokosc];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
        <tr><td><b>Długość geo.:</b></td><td> <textarea name="dlugosc" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[dlugosc];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
        <tr>
        <tr><td><b>Link do zdjęcia:</b></td><td> <textarea name="zdjecie" rows="1" cols="50"><?php
            $id=$_POST['id_z'];
$con = mysqli_connect("localhost", "pbados", "pbados", "pbados_zabytki");
$que = mysqli_query($con,"SELECT * FROM zabytki");
mysqli_set_charset($con, 'utf8');
    
$que = mysqli_query($con,"SELECT * FROM zabytki WHERE id_z=$id;");
while($row=mysqli_fetch_assoc($que)){
echo $row[zdjecie];
}

mysqli_close($con);
    ?></textarea></td></tr>
        
        
    </table>
        <small>Podane koniecznie według schematu, np. </i><?php echo htmlspecialchars('<img src="zdjecia/nazwazabytku.jpg" alt="Nazwa Zabytku">');?></small><p>
    <hr>
    <b>Tu podaj stare id: </b><input type="text" name="id_z" value="<?php echo $_POST['id_z'];?>"><br>
    Stare id: 
<?php
$id_z=$_POST['id_z'];
echo "<b>$id_z</b>";
?>
    <br>
<input type="submit" value="Wyślij">
</form>

<p>
<a href="formedytuj.php">Powrót do wyboru edytowanego zabytku</a><p>
<a href="paneladmina.php">Powrót do panelu administratora</a>
    
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>