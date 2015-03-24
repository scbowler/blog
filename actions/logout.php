<?php
session_start();

require_once('../includes/dbInfo.php');

$penName = $_SESSION['userinfo']['penName'];

$query = "UPDATE users SET status='0' WHERE penName='$penName'";

mysqli_query($CONN, $query);

session_unset();
$_SESSION['logout'] = "Logout successful - Thank you for visiting.";

header('location: ../splash.php');
?>