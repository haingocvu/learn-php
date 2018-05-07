<?php  

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "MyDBPDO";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

	//sql
	$sql = "SELECT * FROM MyGuests LIMIT ?,?";

	//prepare and binding
	//remember give PDO::PARAM_INT
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1, $offset, PDO::PARAM_INT);
	$stmt->bindParam(2, $quantity, PDO::PARAM_INT);

	//execute
	$offset = 0;
	$quantity = 2;
	$stmt->execute();

	//fetchall
	$rs = $stmt->fetchall(PDO::FETCH_OBJ);

	foreach ($rs as $key => $guest) {
		echo $guest->id . " : " . $guest->firstname . " " . $guest->lastname . "</br>";
	}
} catch (PDOException $e) {
	echo "ERROR: ".$e->getMessage();
}

$conn = null;

?>