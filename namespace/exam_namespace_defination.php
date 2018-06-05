<?php
namespace hello\world;
const _HELLO = "hello world constant";
const _HELLO1 = "hello111111111111 world constant";
function sayHello(){
    echo "hello world from function"."</br>";
}

function sayHello1(){
    echo "hello1111111111 world from function"."</br>";
}

class Hello {
    static function getName($myname = "Hai"){
        echo "My name is ".$myname."</br>";
    }
    function getAge($yearOfBirth = 1990){
        echo (\date("Y") - $yearOfBirth + 1)."</br>";
    }
}
?>