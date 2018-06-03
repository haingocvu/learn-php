<?php
try {
    $resource = fopen("webdictionary.txt", "r");
    while(!feof($resource)){
        echo fgetc($resource);//read a character
    }
}catch(Exception $e) {
    echo $e;
}finally {
    fclose($resource);
}
?>