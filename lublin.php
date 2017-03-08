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
      <li class="active"><a href="lublin.php">LUBLIN</a></li>
      <li><a href="zabytki.php">OGÓLNIE O ZABYTKACH</a></li>
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
<h2><center>Informacje ogólne o Lublinie</center></h2>
<center><img src="zdjecia/lublin.jpg" alt="Lublin"></center>
    <p><b>Lublin</b> nazywany stolicą wschodniej Polski jest największym i najprężniej rozwijającym się miastem po prawej stronie Wisły. Jako stolica województwa lubelskiego pełni rolę administracyjnego, gospodarczego i kulturalnego centrum regionu. Bogata, siedmiowiekowa historia Lublina oraz położenie w wielokulturowym tyglu stanowią o jego szczególnych walorach. To zaczarowane miejsce przyciągające unikalnym klimatem, bogatą architekturą i licznymi zabytkami. 
        
    <p>To miasto inspiracji, gdzie świadomość historii inspiruje przyszłość. Odbywają się tu renomowane międzynarodowe wydarzenia artystyczne, festiwale teatralne, muzyczne i prezentujące sztukę współczesną. Wysoki poziom oferty kulturalnej zapewniają również działające w mieście teatry, galerie, kluby studenckie. Organizowane koncerty, przedstawienia, happeningi, festiwale czy wystawy ożywiają ulice Lublina. Wśród najbardziej znanych imprez kulturalnych można wymienić Carnaval Sztuk-Mistrzów, Festiwal Inne Brzmienia, Noc Kultury, Jarmark Jagielloński, Festiwal Teatrów Europy Środkowej "Sąsiedzi", Festiwal "Konfrontacje Teatralne" czy Europejski Festiwal Smaku.</p>
    
    <p>Lublin jest jednym z miast o największej dynamice inwestycji. Uruchomienie Portu Lotniczego Lublin, budowa obwodnicy wraz z drogami dojazdowymi czy unowocześnienie systemu miejskiego transportu publicznego w znaczący sposób przyczyniają się do rozwoju infrastruktury i tworzenia przyjaznych warunków do inwestowania, co sprawia, że Lublin umacnia swoją pozycję na mapie Polski i Europy.
        
        <p>Miasto jest jednym z najważniejszych i najprężniejszych ośrodków akademickich w Polsce. Zachęca do edukacji bogatą ofertą kierunków studiów, doskonałą kadrą naukową oraz działaniami na rzecz wspierania studentów m.in. poprzez przyznawane stypendia i nagrody. Na cieszących się renomą uczelniach publicznych i w zdobywających prestiż niepublicznych szkołach wyższych studiuje ponad 70 tys. osób, nie tylko z Polski.
            
            <p>Lublin jest Bramą Wschodu, wizytówką Polski w kontaktach z krajami Partnerstwa Wschodniego. To efekt nie tylko położenia geopolitycznego, ale również dziedzictwa historycznego miasta. Integrująca się Europa przesunęła się daleko na Wschód, przywracając Lublinowi jego naturalną rolę łącznika pomiędzy Wschodem i Zachodem. Lublin jest niekwestionowanym liderem w Polsce we współpracy ze wschodnimi partnerami. Dotyczy ona zarówno oficjalnych kontaktów na poziomie władz i urzędów, jak i bezpośrednich związków wielu instytucji, firm i organizacji pozarządowych. Prowadzone działania związane są z rożnymi dziedzinami życia, są to m.in.: inicjatywy na rzecz rozwoju społeczeństwa obywatelskiego, zarządzania miastem, projekty w obszarze kultury i nauki.
</main>



<footer>
Patryk Bądos, praca licencjacka - UMCS, Wydział Matematyki, Fizyki i Informatyki.
</footer>


</body>
</html>