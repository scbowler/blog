<?php 

include_once('dbInfo.php');

$output = [];

$query = "SELECT penName, pic FROM users WHERE status='1'";

$results = mysqli_query($CONN, $query);

if(mysqli_num_rows($results)>0){
    while($row = mysqli_fetch_assoc($results)){
        $output[] = $row;
    }
}else{
    $output[] = "No Users";
}

echo json_encode($output);
?>