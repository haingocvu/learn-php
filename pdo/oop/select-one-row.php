<?php  

require_once "DBConnect.php";

$dbconnect = new DBConnect();
$sql = "SELECT * FROM MyGuests
WHERE id = ?
";
$params = [1];
$rs = $dbconnect->loadOneRow($sql, $params);
if ($rs) {
	echo "id :" . $rs->id . "</br>";
	echo "name :" . $rs->firstname . " " . $rs->lastname . "</br>";
	echo "email :" . $rs->email . "</br>";
} else {
	echo "no result";
}

?>