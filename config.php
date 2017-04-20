<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "it255-met";
	
	$conn = new mysqli($servername, $username, $password, $database);
	
	if ($conn->connect_error) {
		die("Konekcija ima grešku: " . $conn->connect_error);
	}
?>