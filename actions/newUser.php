<?php 
session_start();
require_once('../includes/functions.php');
require_once('../includes/dbinfo.php');

$errors = [];
$output = [];

$output['success'] = false;

if(isset($_POST)){
    if($_POST['email'] === ''){
        $errors[] = "Email blank";
    }elseif(strpos($_POST['email'], '@') === false){
        $errors[] = "Invalid email";
    }else{
        $email = clean($_POST['email']);
        $query = "SELECT email FROM users WHERE email='$email'";
        
        $result = mysqli_query($CONN, $query);
        if(mysqli_num_rows($result) > 0){
            $errors[] = "Email already in use ";
        }
    }
    if($_POST['penName'] === ''){
        $errors[] = "Pen name blank";
    }elseif(strpos($_POST['penName'], ' ') !== false){
        $errors[] = "Invalid pen name - No spaces allowed";
    }else{
        $penName = clean($_POST['penName']);
        $query = "SELECT penName FROM users WHERE penName='$penName'";
        
        $result = mysqli_query($CONN, $query);
        if(mysqli_num_rows($result) > 0){
            $errors[] = "Pen name already in use";
        }
    }
    if($_POST['firstName'] === ''){
        $errors[] = "First name blank";
    }else{
        $fname = clean($_POST['firstName']);
    }
    if($_POST['lastName'] === ''){
        $errors[] = "Last name blank";   
    }else{
        $lname = clean($_POST['lastName']);
    }
    if($_POST['password'] === '' || $_POST['confPass'] === ''){
        $errors[] = "One or more password fields blank";
    }elseif($_POST['password'] !== $_POST['confPass']){
        $errors[] = "Passwords don't match";
    }else{
        $password = sha1($_POST['password']);
    }
}else{
    $errors[] = "No information recieved";
}

if($errors === []){
    $dateCreated = time();
    $query = "INSERT INTO users (email, penName, password, firstName, lastName, created, lastLogin) VALUES ('$email', '$penName', '$password', '$fname', '$lname', '$dateCreated', '0')";
    
    $result = mysqli_query($CONN, $query);
    if(mysqli_affected_rows($CONN) > 0){
        $output['success'] = true;
        $output['msgs'] = 'User created successfuly';
    }else{
        $errors[] = 'Failed to create new user';
    }
}

if(!isset($output['msgs'])){
    $output['msgs'] = $errors;
}

echo json_encode($output);

?>