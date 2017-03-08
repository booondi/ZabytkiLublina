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
      <li class="active"><a href="zabytki.php">OGÓLNIE O ZABYTKACH</a></li>
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



<main>
<p>
<h2><center>Informacje ogólne o zabytkach w Lublinie</center></h2>
    <center><img src="zdjecia/zabytki.jpg" alt="Zabytki"></center>
<p>Dzięki temu, że Lublin jest jednym z najstarszych miast Polski, zachowały się w nim pamiątki z różnych epok, począwszy od zarania polskiej państwowości, poprzez średniowiecze i renesans (szczególnie tzw. renesans lubelski, który stanowił złoty okres w rozwoju miasta) aż po barok i klasycyzm i czasy późniejsze. Swoje materialne ślady pozostawili tam zarówno zaborcy, jak i działacze niepodległościowi. Również XX wiek zostawił po sobie wiele obiektów. Pamiątki te uzupełniają zbiory muzeów, oferta kulturalna teatrów i kin.

<p>Architektura Lublina to nie tylko Stare Miasto i zabytkowe kamienice, ale również architektura kościelna. Budowle sakralne prezentują różne okresy stylowe od gotyku do czasów współczesnych.

<p>Obok Bramy Krakowskiej drugi rozpoznawalny symbol architektoniczny miasta stanowi Zamek Lubelski. Budowę grodu na wzgórzu zamkowym przypisuje się Bolesławowi Chrobremu. Najstarszymi zachowanymi obiektami w zamku są kaplica św. Trójcy oraz XIII-wieczny donżon. Z czasów budowy i rozbudowy zamku pochodzi również gotycka baszta obronna, znajdująca się obok Bramy Krakowskiej. W pobliżu zamku usytuowane są natomiast dawne zabudowania szpitala św. Łazarza i kościół św. Wojciecha.

<p>Z uwagi na bogatą historię miasta, którego początki sięgają VI wieku, w Lublinie znajduje się szereg zabytków wpisanych do rejestru zabytków nieruchomych Krajowego Ośrodka Badań i Dokumentacji Zabytków. Poniżej przedstawiony jest spis wybranych zespołów i obiektów znajdujących się na terenie powiatu grodzkiego Lublin (pokrywającego się terytorium miasta w jego granicach administracyjnych) i wpisanych do rejestru zabytków nieruchomych według stanu na 20 lipca 2009 roku.
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>