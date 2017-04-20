<?php

include("function.php");
include("baza.php");

if(isset($_POST['submit'])){
	
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$username = $_POST['usrname'];
	$password = $_POST['psw'];
	
	
	dodajKorisnik($ime,$prezime,$username,$password);

	header("Location: index.php");
    exit();
}

?>