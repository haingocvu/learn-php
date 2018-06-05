<?php
namespace example\ns;
class Example {
    function sayHello(){
        echo "hello world";
    }
}

//dynamic create class
function getClass($classname){
    $classname = __NAMESPACE__."\\$classname";
    return new $classname;
}

getClass('Example')->sayHello();
?>