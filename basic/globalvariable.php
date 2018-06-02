<?php
$x = 2;
$y = 8;
$z = 10;
function test(){
    global $x, $y;
    $y += $x + $GLOBALS['z'];
}
test();
echo $y;
?>