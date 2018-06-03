<?php
if(isset($_POST["upload"]) && !empty($_FILES["uploadedimg"])){
    //print_r($_FILES["uploadedimg"]);
    //Array ( [name] => girl xinh.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpD9D6.tmp [error] => 0 [size] => 82496 )
    $success = true;
    $msgerror = "";
    $targetDir = "upload/";
    $targetFile = $targetDir.basename($_FILES["uploadedimg"]["name"]);//path to save file
    $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    //echo $targetFile;
    //check valid image
    if(!getimagesize($_FILES["uploadedimg"]["tmp_name"])){
        $success = false;
        $msgerror .= "</br> not a valid image";
    }
    //check image exits
    if(file_exists($targetFile)){
        $success = false;
        $msgerror .= "</br> image exits";
    }
    //check image type
    if($imageType != "jpg" && $imageType != "jpeg" && $imageType != "png" && $imageType != "gif"){
        $success = false;
        $msgerror .= "</br> not a valid image type";
    }
    //check image size
    if($_FILES["uploadedimg"]["size"] > 500000){
        $success = false;
        $msgerror .= "</br> size is too large";
    } //limit to 500kb
    if(!$success){
        echo "failed: </br>".$msgerror;
    }else {
        //upload file. infact, move uploaded file to new locattion.
        if(move_uploaded_file($_FILES["uploadedimg"]["tmp_name"], $targetFile)){
            echo "success";
            echo "</br>".$_FILES["uploadedimg"]["name"];
        }else {
            echo "there were a problem when uploading file!";
        }
    }
}
?>