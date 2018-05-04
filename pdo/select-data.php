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
	$sql = "SELECT id, firstname, lastname
	FROM MyGuests WHERE firstname != ?
	";

	//prepare
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1,$firstname);

	//execute
	$firstname = "Hai";
	$stmt->execute();

	//use fetchAll to get result as array.
	//PDO::FETCH_OBJ to get each array's member as object.
	$rs = $stmt->fetchAll(PDO::FETCH_OBJ);
	//print_r($rs);

	foreach ($rs as $key => $value) {
		echo $value->id . " : " . $value->firstname . " " .$value->lastname . "</br>";
	}

} catch (PDOException $e) {
	echo "ERROR: ".$e->getMessage();
}

$conn = null;

?>