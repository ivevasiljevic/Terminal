<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "terminal";

	//povezujen se na bazu
	$conn = new mysqli( $dbServername, $dbUsername, $dbPassword, $dbName);

	//provjera konekcije
	if($conn->connect_error) {

		die("Connection failed: ". $conn->connect_error);
	}

