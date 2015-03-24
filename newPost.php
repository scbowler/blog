<?php session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('includes/verifyUser.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>New Post</title>
        <link rel="stylesheet" href="assets/main.css">
        <script src="assets/jquery-2.1.3.min.js"></script>
        <script src="assets/main.js"></script>
    </head>
    <body>
        <?php require_once('includes/header.php'); ?>
        
        
        
        <section id="post-msgs"></section>
        
        <?php require_once('includes/footer.php'); ?>
    </body>
</html>