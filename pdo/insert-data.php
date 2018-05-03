<?php  

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "MyDBPDO";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	//Set PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUE ('Nhi', 'Nguyễn','phunhanxiumin10@gmail.com'),('Hải','Vũ','haivu202@gmail.com')";

	//use exec because no resuls are retured
	$conn->exec($sql);
	echo "new record created successfully!";
} catch (PDOException $e) {
	echo $sql . "</br>" . $e->getMessage();
}

?>