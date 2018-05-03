<?php  

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "MyDBPDO";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	//set the pdo error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUE ('Tony', 'Teo', 'tony@example.com')";

	//use exec() because no results are retured
	$conn->exec($sql);
	$last_id = $conn->lastInsertId();
	echo "new record created successfully. last inserted id is: $last_id";
} catch (PDOExceptionO $e) {
	echo $sql . "</br>" . $e->getMessage();
}

$conn = null;

?>