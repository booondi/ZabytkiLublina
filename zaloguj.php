<?php
session_start();
	//jesli nie podano loginu lub haslo wroc do admin.php
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: admin.php');
		exit();
	}


$con=mysqli_connect("localhost","pbados","pbados","pbados_zabytki");
$sql="SELECT * FROM admin WHERE login='$_POST[login]' and haslo='$_POST[haslo]' ";
$wynik=mysqli_query($con, $sql);
  if (mysqli_num_rows($wynik)==1){
      $_SESSION['zalogowany'] = true;
    header("Location: paneladmina.php"); 
  } else{
      header("Location: adminfalse.php"); 
    exit(); 
  }
     
?> 