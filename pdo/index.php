<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=qlnh", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connection successfully!";
} catch (PDOException $e) {
	echo "connection failed: ".$e->getMessage();
}

?>