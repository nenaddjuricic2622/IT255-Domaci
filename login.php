<?php
session_start();

include("function.php");
include("baza.php");

global $conn;
echo "wwww";

if(isset($_POST['submit'])){
	
	$password = $_POST['psw'];
	$username = $conn->real_escape_string($_POST['usrname']);


	
	if(!empty($username) && !empty($password)){

    	if(proveriKorisnika($username,$password)){
		
     		$_SESSION['username'] = $username;
		
		}else{
	
         	echo "Pogresan username ili password";
		}
		
	}else{
			echo "Niste uneli sve podatke";
	}
	
	header("Location: index.php");
	exit();
}


?>