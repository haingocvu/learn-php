<?php
namespace example\ns;
include_once "file1.php";

//only const, function, class ,interface understanded by namespace.

const _CURRENT = "hello from current </br>";

function current(){
    echo "hello function from current </br>";
}

class Current {
    static function currentStaticFunction(){
        echo "this is a static function in current </br>";
    }
}

//print current constant
echo _CURRENT;
//call current function
current();
//call static method from current
Current::currentStaticFunction();

//print sub constant
echo sub\_SUB;
//echo sub function
echo sub\sub();
//echo static method from sub
echo sub\Sub::subStaticFunction();

//fully name
//echo sub constant
echo \example\ns\sub\_SUB;
//echo sub function
\example\ns\sub\sub();
//echo static method from sub
\example\ns\sub\Sub::subStaticFunction();

//call global object
//random
echo \rand(2, 10)."</br>";
//string lenth
echo \strlen("hello world");
?>