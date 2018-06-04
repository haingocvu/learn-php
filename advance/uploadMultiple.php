<?php
if(isset($_POST["upload"]) && !empty($_FILES["uploadedimg"])){
    //print_r($_FILES["uploadedimg"]);
    $numberitems = count($_FILES["uploadedimg"]["name"]);
    for($i = 0; $i < $numberitems; $i++) {
        $success = true;
        $msgerror = "";
        $targetDir = "upload/";
        $targetFile = $targetDir.basename($_FILES["uploadedimg"]["name"][$i]);//path to save file
        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        //echo $targetFile;
        //check valid image
        if(!getimagesize($_FILES["uploadedimg"]["tmp_name"][$i])){
            $success = false;
            $msgerror .= $_FILES["uploadedimg"]["name"][$i]." not a valid image </br>";
        }
        //check image exits
        if(file_exists($targetFile)){
            $success = false;
            $msgerror .= $_FILES["uploadedimg"]["name"][$i]."image exits </br>";
        }
        //check image type
        if($imageType != "jpg" && $imageType != "jpeg" && $imageType != "png" && $imageType != "gif"){
            $success = false;
            $msgerror .= $_FILES["uploadedimg"]["name"][$i]."not a valid image type </br>";
        }
        //check image size
        if($_FILES["uploadedimg"]["size"][$i] > 500000){
            $success = false;
            $msgerror .= $_FILES["uploadedimg"]["name"][$i]." size is too large </br>";
        } //limit to 500kb

        if(!$success){
            echo "uploading ".$_FILES["uploadedimg"]["name"][$i]." failed: </br>".$msgerror;
        }else {
            //upload file. infact, move uploaded file to new locattion.
            if(move_uploaded_file($_FILES["uploadedimg"]["tmp_name"][$i], $targetFile)){
                echo "uploading ".$_FILES["uploadedimg"]["name"][$i]." successfully </br>";
            }else {
                echo "there were a problem when uploading file!".$_FILES["uploadedimg"]["name"][$i]."</br>";
            }
        }
    }
}
?>