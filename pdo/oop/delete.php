<?php  

require_once "DBConnect.php";

$dbconnect = new DBConnect();
$query = "DELETE FROM MyGuests
WHERE id = ?
";
$params = [4];
$rs = $dbconnect->executeQuery($query, $params);
if ($rs) {
	echo "deleted successfully!";
} else {
	echo "failed to delete";
}

?>