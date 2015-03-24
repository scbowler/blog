<?php
if(isset($_SESSION['userinfo'])){
    if($_SESSION['userinfo']['penName'] === 'Guest'){
        header('location: index.php');
        exit();
    }
}else{
    header('location: splash.php');
}
?>