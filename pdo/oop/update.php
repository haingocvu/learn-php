<?php  

require_once "DBConnect.php";

$dbconnect = new DBConnect();
$query = "UPDATE MyGuests
				SET email = ?
				WHERE id = ?
";
$params = ["nganngan@gmail.com", 5];
$rs = $dbconnect->executeQuery($query, $params);
if ($rs) {
	echo "updated successfully!";
}else {
	echo "failed to update!";
}
?>