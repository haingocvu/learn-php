<?php  

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "MyDBPDO";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	//set the pdo mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

	//begin transaction
	$conn->beginTransaction();

	//our sql statements
	$conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
	VALUE ('Ngân', 'Nguyễn', 'ngan@gmail.com')
	");
	$conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
	VALUE ('Linh', 'Nguyễn', 'linh@gmail.com')
	");
	$conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
	VALUE ('Vy', 'Nguyễn', 'vy@gmail.com')
	");

	//commit transaction
	$conn->commit();
	echo "new records created successfully </br>";
} catch (PDOException $e) {
	//rollback the transaction if something failed
	$conn->rollBack();
	echo "Error: ".$e->getMessage();
}

?>