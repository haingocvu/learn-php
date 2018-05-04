<?php  

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "MyDBPDO";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("set names utf8");

	//sql
	$sql = "UPDATE MyGuests
	SET firstname  = 'Truc'
	WHERE id = ?
	";

	//prepare and binding
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1,$idGuest);

	//execute
	$idGuest = 1;
	$rs = $stmt->execute();

	if($rs){
		echo "updated the guest with id: $idGuest successfully!";
	}else {
		echo "failed to update the guest with id: $idGuest";
	}
} catch (PDOException $e) {
	echo "ERROR : ".$e->getMessage();
}

$conn = null;

?>