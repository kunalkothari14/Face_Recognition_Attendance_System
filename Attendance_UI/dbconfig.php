<?php
	$servername = "localhost";
	$username = "root";
	$password = "aditya123";
	$dbname = "FACE";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	}
?>
