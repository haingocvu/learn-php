<?php
$age = [
    "Peter"=>32,
    "Alan"=>16,
    "Smith"=>80,
    "Tony"=>42
];
arsort($age);
foreach($age as $key=>$value){
    echo $key." ".$value."</br>";
}
?>