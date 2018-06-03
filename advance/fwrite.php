<?php
try {
    $resource = fopen("newFile.txt", "w");//open unexisting file will create a new file.
    $txt = "this is first line \n";
    fwrite($resource, $txt);
    $txt = "this is second line \n";
    fwrite($resource, $txt);
    echo "success";
}catch(Exception $e) {
    echo $e;
}finally {
    fclose($resource);
}
?>