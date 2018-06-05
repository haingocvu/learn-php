<?php
namespace my\name;
require_once "exam_namespace_defination.php";
//alias for namespace
//this equal hello\world as world
use hello\world;

//alias for classname
use hello\world\Hello;

//alias for function
//group
use function hello\world\{sayHello, sayHello1 as sayHello1};

//alias for constant
//group
use const hello\world\{_HELLO, _HELLO1};

function myFunction(){
    echo "this is my function"."</br>";
}

//call constant
echo world\_HELLO."</br>";
echo _HELLO."</br>";

//call method
world\sayHello();
sayHello();

//call method of class
(new world\Hello())->getName();
(new Hello())->getName("Tuyen");

//call static method of class
world\Hello::getAge();
Hello::getAge(1989);

//call global random
echo \rand(2, 10)."</br>";

//call own function
myFunction();
\my\name\myFunction();
namespace\myFunction();
?>