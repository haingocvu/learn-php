<?php
try {
    $handle = fopen("webdictionary.txt", "r");
    echo fread($handle, filesize("webdictionary.txt"));//read all file
}catch(Exception $e) {
    echo $e;
}finally {
    fclose($handle);
}
?>