<?php
session_start();

mkdir("../profile/".$_SESSION['userinfo']['penName']);

$target_dir = "../profile/".$_SESSION['userinfo']['penName']."/"; 
$target_file = $target_dir.$_FILES["fileToUpload"]["name"];
$uploadOK = true;

if(isset($_POST["Upload File"])){
    if($_FILES["fileToUpload"]['size'] > 5000000){
        $uploadOK = false;
        $output['errors'][] = "The selected file is too large";
    }
}
if($uploadOK){
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        $output['success'] = true;
        $_SESSION['userinfo']['pic'] = stripslashes(substr($target_file, 3));
        $output['success msg'] = "The file ".$_FILES["fileToUpload"]["name"]." has been uploaded.";
        $files = glob("profile/".$_SESSION['userinfo']['penName']."/*");
        foreach($files as $file){
            if(is_file($file)){
                unlink($file);
            }
        }
    }else{
        $output['errors'][] = "There was an error uploading your file.";
    }
}

if(!$output['success']){
   $output['success'] = false;
}

//echo json_encode($_FILES);
header('location: ../userPage.php');