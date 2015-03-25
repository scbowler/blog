<?php 
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('../includes/dbInfo.php');
require_once('../includes/functions.php');

$errors = [];

if(isset($_POST)){
    //$errors[] = $_POST;
    if(isset($_POST['guest'])){
        $_SESSION['userinfo'] = [penName=>'Guest', status=>1, firstName=>'Guest'];
        header('location: ../index.php');
        exit();
    }
    
    $user = clean($_POST['username']);
    $pass = sha1($_POST['password']);
    $query = "SELECT penName, status, fails FROM users WHERE ";
    
    if(strpos($user, '@') === false){
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
        $status = $rows['status'];
        $fails = $rows['fails'];
        $query = "SELECT * FROM users WHERE penName='$penName' AND password='$pass'";
        $result = mysqli_query($CONN, $query);
        $numRows = mysqli_num_rows($result);
        
        if($numRows === 1 && $status >= -1){ 
            
            $nowTime = time();
            $query = "UPDATE users SET status='1', lastLogin='$nowTime', fails='0' WHERE penName='$penName'";
            mysqli_query($CONN, $query);
            
            if(mysqli_affected_rows($CONN) === 1){
                $_SESSION['userinfo'] = mysqli_fetch_assoc($result);
                $_SESSION['userinfo']['password'] = '*****';
                $_SESSION['userinfo']['status'] = 1;
                $_SESSION['success'] = 'Successfuly logged in as '.$_SESSION['userinfo']['penName'];
                header('location: ../index.php');
                exit();
            }else{
                $errors[] = 'Error logging in';
                //$errors[] = $query;
            }
        }elseif($numRows == 1 && $status == -2){
            $errors[] = 'Account locked, you have been sent an email to recover account.';
        }else{
            $fails++;
            
            if($fails > 6){
                $query = "UPDATE users SET status='-2' WHERE penName='$penName'";
            }else{
                $query = "UPDATE users SET status='-1', fails='$fails' WHERE penName='$penName'";
            }
            mysqli_query($CONN, $query);
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