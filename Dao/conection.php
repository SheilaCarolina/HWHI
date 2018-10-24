<?php
	$servername = "localhost";
	$username = "root";
	$password = "bancodedados";
	$bd = "bdhwi";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $bd);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
