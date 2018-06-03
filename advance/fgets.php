<?php
try {
    $resource = fopen("webdictionary.txt", "r");
    while(!feof($resource)){
        echo fgets($resource)."</br>";//read a line
    }
}catch(Exception $e) {
    echo $e;
}finally {
    fclose($resource);
}
?>