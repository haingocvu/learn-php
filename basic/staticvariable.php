<?php
function test(){
    static $mystatic = 0;//still local
    echo $mystatic;
    $mystatic++;
}
test();
test();
test();
?>