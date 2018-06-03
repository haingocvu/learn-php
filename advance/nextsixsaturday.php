<?php
$d = strtotime("saturday");
$enddate = strtotime("+6 weeks", $d);
while($d < $enddate){
    echo date("M-d", $d)."</br>";
    $d = strtotime("+1 week", $d);
}
?>