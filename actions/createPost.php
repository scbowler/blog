<?php
session_start();
require_once('../includes/dbInfo.php');

$output = [];
$output['success'] = false;
$errors = [];
$edit = false;
$new = true;

$nowTS = time();
$author = $_SESSION['userinfo']['penName'];

if(isset($_POST)){
    if($_POST['blogID'] > 0){
        $edit = true;
        $blogID = $_POST['blogID'];
    }
    if($_POST['title'] === ''){
        $errors[] = 'Title blank';
    }else{
        $title = $_POST['title'];
    }
    
    if($_POST['body'] === ''){
        $errors[] = 'Body blank';
    }else{
        $body = $_POST['body'];
    }
    
    switch($_POST['status']){
        case 'public':
            $status = 0;
            break;
        case 'private':
            $status = 1;
            break;
        case 'draft':
            $status = -1;
            $new = false;
            break;
        default:
            $errors[] = 'Unable to determine staus';
            break;
    }
    
    if($errors === []){
        
        if($edit){
            $query = "UPDATE blogs SET title='$title', body='$body', modified='$nowTS', status='$status' WHERE blogID='$blogID'";
        }else{
            $query = "INSERT INTO blogs (title, body, created, modified, author, status) VALUES ('$title', '$body', '$nowTS', '$nowTS', '$author', '$status')";
        }
        
        mysqli_query($CONN, $query);
        
        if(mysqli_affected_rows($CONN) === 1){
            if(!$edit && $new){
                $_SESSION['userinfo']['posts']++;
                $query = "UPDATE users SET posts='".$_SESSION['userinfo']['posts']."' WHERE penName='$author'";
                mysqli_query($CONN, $query);
            }
            
            $output['success'] = true;
            $output['msgs'][] = "Blog saved successfuly as $_POST[status].";
            
        }else{
            $output['msgs'][] = 'Error saving blog';
        }
    }else{
        $output['msgs'] = $errors;
    }
}else{
    $output['msgs'][] = 'Error recieving data';
}

echo json_encode($output);