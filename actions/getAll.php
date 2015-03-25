<?php
session_start();
require_once('../includes/dbInfo.php');
require_once('../includes/functions.php');
date_default_timezone_set('America/Los_Angeles');
$output = [];
$output['success'] = false;
$errors = [];
$delBtn = "<button class='btn2 edit-post' value='edit'>Edit This Blog</button>";

if(isset($_POST)){
    if(isset($_SESSION['userinfo']['penName'])){
        $penName = $_SESSION['userinfo']['penName'];
    }else{
        $errors[] = 'No username info';
    }
    if(isset($_SESSION['page'])){
        $location = $_SESSION['page'];
    }else{
        $errors[] = 'No location info';
    }
    
    if($location === 'home'){
        if($penName === 'Guest'){
            $query = "SELECT * FROM blogs WHERE status = '0'";
        }else{
            $query = "SELECT * FROM blogs WHERE status >= '0'";
        }
        $delBtn = '';
    }elseif($location === 'profile'){
        $query = "SELECT * FROM blogs WHERE author='$penName' AND status >= '0'";
    }elseif($location === 'drafts'){
        $query = "SELECT * FROM blogs WHERE author='$penName' AND status = '-1'";
    }else{
        $errors[] = 'Unknown location';
    }
    
    if($errors === []){
        
        $query .= " ORDER BY `blogs`.`created` DESC";
        
        $results = mysqli_query($CONN, $query);
        
        if(mysqli_num_rows($results) > 0){
            $count = 0;
            
            while($row = mysqli_fetch_assoc($results)){
                $created = formatDate($row['created']);
                $modified = formatDate($row['modified']);
                $blogs[] = "<div class='blog-post'><div class='blog-title logo-font'>$row[title]</div><div class='blog-body'>$row[body]</div><div class='blog-author'>Written By: $row[author]</div><div class='blog-date'>Created on: $created<br>Last updated: $modified</div>$delBtn<div class='blog-id'>Blog ID: $row[blogID]</div></div>";
                
                $count++;
            }
            $blog = 'Blog';
            if($count > 1){
                $blog .= 's';
            }
            $output['success'] = true;
            $output['msgs'] = "$count $blog found".$query;
            $output['blogs'] = $blogs; 
        }else{
            $output['msgs'][] = 'No Blogs To Show';
            //$output['msgs'][] = $query;
        }
    }else{
        $output['msgs'] = $errors;
    }
}else{
    $output['msgs'][] = 'No data recieved';
}

echo json_encode($output);