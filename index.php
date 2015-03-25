<?php session_start(); 

if(!isset($_SESSION['userinfo'])){
    header('location: splash.php');
}else{
    $_SESSION['page'] = 'home';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>The Blog - Home</title>
        <link rel="stylesheet" href="assets/main.css">
        <script src="assets/jquery-2.1.3.min.js"></script>
        <script src="assets/main.js"></script>
    </head>
    <body onload=loadBlogs()>
        <?php require_once('includes/header.php'); ?>
        
        <aside>
            <h2 class='logo-font'>Users Online</h2>
            <div id="users-online">
                <ul></ul>
            </div>
        </aside>
        
        <section class="blog-list">
        </section>
        
        <?php require_once('includes/footer.php'); ?>
    </body>
</html>