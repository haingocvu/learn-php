<?php
namespace example\ns;

class Example {
    function __construct(){
        echo __METHOD__, "</br>";
    }
}
function exampleFunction(){
    echo __FUNCTION__, "</br>";
}
const exampleConstant = "example constant";

//call class method;
$classname = "\\example\\ns\\Example";
new $classname();
//this is valid too. only for dynamic language feature
$classname = "example\\ns\\Example";
new $classname();

//call function
$functionName = "\\example\\ns\\exampleFunction";
$functionName();
//this is valid too. only for dynamic language feature
$functionName = "example\\ns\\exampleFunction";
$functionName();


//call const
echo "\\example\\ns\\exampleConstant"."</br>";
//this is valid too. only for dynamic language feature
echo "example\\ns\\exampleConstant";

?>