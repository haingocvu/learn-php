<?php
$str = "hello world";
echo "string length: ".strlen($str)."</br>";
echo "string word count: ".str_word_count($str)."</br>";
echo "string reverse: ".strrev($str)."</br>";
echo "string position: ".strpos($str, "world")."</br>";
echo "string replace: ".str_replace("world", "Tuyen", $str)."</br>";
?>