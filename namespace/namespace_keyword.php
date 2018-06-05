<?php
namespace example\ns;

class Example {
    static function sayHello(){
        echo "hello world";
    }
}

//explicitly. working perfectly without namespace keyword.
namespace\Example::sayHello();

?>