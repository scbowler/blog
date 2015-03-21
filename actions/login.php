<?php 
session_start();
require_once('../includes/dbInfo.php');
require_once('../includes/functions.php');

$errors = [];

if(isset($_POST)){
    if(isset($_POST['guest'])){
        $_SESSION['userinfo'] = [penName=>'Guest', status=>1];
        header('location: index.php');
    }
    
    $user = clean($_POST['username']);
    $pass = sha1($_POST['password']);
    $query = "SELECT penName FROM users WHERE ";
    
    if(strpos('@', $user) === false){
        $subquery = "penName='$user' ";
    }else{
        $subquery = "email='$user' ";
    }
    $query .= $subquery;
    
    $result = mysqli_query($CONN, $query);
    $rows = mysqli_num_rows($result);
    
    if($rows ===  1){
        
        $rows = mysqli_fetch_assoc($result);
        $penName = $rows['penName'];
        $query = "SELECT * FROM users WHERE penName='$penName' AND password='$pass'";
        $result = mysqli_query($CONN, $query);
        
        if(mysqli_num_rows($result) === 1){ 
            
            $nowTime = time();
            $query = "UPDATE users SET status='1', lastLogin='$nowTime' WHERE penName='".$_SESSION['userinfo']['penName']."'";
            mysqli_query($CONN, $query);
            
            if(mysqli_affected_rows === 1){
                $_SESSION['userinfo'] = mysqli_fetch_assoc($result);
                $_SESSION['userinfo']['password'] = '*****';
                $_SESSION['userinfo']['status'] = 1;
                $_SESSION['success'] = 'Successfuly logged in as '.$_SESSION['userinfo']['penName'];
                header('location: ../index.php');
                exit();
            }else{
                $errors[] = 'Error logging in';
            }
        }else{
            $query = "UPDATE users SET status='-1' WHERE penName='$penName'";
            $errors[] = 'Invalid user or password';
        }
        
        
        
    }elseif($rows > 1){
        $errors[] = "Error 'duplication' X$rows";
    }else{
        $errors[] = 'Invalid user or password';
    }
}else{
    $errors[] = 'Error receiving data';
}

$_SESSION['errors'] = $errors;

header('location: ../splash.php');
?>