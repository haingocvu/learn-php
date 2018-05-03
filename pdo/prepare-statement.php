<?php  

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "MyDBPDO";


try {
	$conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	//set the pdo error mode exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

	//sql
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUE (:firstname,:lastname,:email)
	";

	//prepare sql and bind parameters
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':firstname',$firstname);
	$stmt->bindParam(':lastname',$lastname);
	$stmt->bindParam(':email',$email);

	//insert a row
	$firstname = "Tiên";
	$lastname = "Nguyễn";
	$email = "tien@gmail.com";
	$stmt->execute();

	//insert another row
	$firstname = "Nhu Quynh";
	$lastname = "Nguyễn";
	$email = "quynhn@gmail.com";
	$stmt->execute();

	//insert another row
	$firstname = "Ngọc";
	$lastname = "Bui";
	$email = "ngoc@gmail.com";
	$stmt->execute();

	echo "new records created succsessfully";
} catch (PDOException $e) {
	echo "Error: ".$e->getMessage();
}

$conn = null;

?>