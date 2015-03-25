<?php
session_start();
require_once('../includes/dbInfo.php');

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
        
        $query = "UPDATE users SET pic='".$_SESSION['userinfo']['pic']."' WHERE penName='".$_SESSION['userinfo']['penName']."'";
        mysqli_query($CONN, $query);
    }else{
        $output['errors'][] = "There was an error uploading your file.";
    }
}

if(!$output['success']){
   $output['success'] = false;
}

header('location: ../userPage.php');