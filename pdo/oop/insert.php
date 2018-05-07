<?php  

require_once "DBConnect.php";

$dbconnect = new DBConnect();
$query = "INSERT INTO MyGuests(firstname, lastname, email)
						VALUE (?,?,?)";
$params = ["Ly", "Ho", "ly@gmail.com"];
$rs = $dbconnect->executeQuery($query, $params);
if($rs){
	echo "Inserted Successfully!";
}else {
	echo "failed to insert!";
}

?>