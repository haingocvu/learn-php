<?php  

require_once "DBConnect.php";

$dbconnect = new DBConnect();
$sql = "SELECT * FROM MyGuests";
$rs = $dbconnect->loadMoreRow($sql);

if ($rs) {
	foreach ($rs as $guest) {
		echo $guest->id . " " . $guest->firstname . " " . $guest->lastname . "</br>";
	}
} else {
	echo "no results!";
}

