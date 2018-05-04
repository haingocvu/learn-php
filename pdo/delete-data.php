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

	//sql
	$sql = "DELETE FROM MyGuests
	WHERE id = ?";

	//prepare and bind params
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1,$idGuest);

	//execute
	$idGuest = 12;
	$rs = $stmt->execute();

	if($rs == true){
		echo "deleted id $idGuest successfully!";
	}else{
		echo "failed to delete $idGuest!";
	}
} catch (PDOException $e) {
	echo "Error: ".$e->getMessage();
}

?>