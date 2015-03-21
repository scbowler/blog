<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welome - Please login</title>
        <link rel="stylesheet" href="assets/main.css">
        <script src="assets/jquery-2.1.3.min.js"></script>
        <script src="assets/main.js"></script>
    </head>
    <body>
       
        <section id="introduction">
            <h1>Welcome to The Blog</h1>
            <h3>New to The Blog?</h3>
            <p>Sign up for a free account or view public postings as guest</p>
            
            <h3>Not new? Welcome Back!</h3>
            <p>Sign in and enjoy</p>                    
        </section>
       
        <section id="login-area">
            <form action='actions/login.php' method='post' id="login-form">
                <input type="text" name="username" placeholder="Enter Username">
                <input type="password" name="password" placeholder="Enter Password">
                <button>Login</button>
            </form>
            <div id="login-links">
                <button id='guest-btn'>Continue as Guest</button>
                <a href="register.php">Register</a>
                <a href="">Forgot Password</a>
            </div>
            <div id="login-errors">
                <?php 
                    if(isset($_SESSION['errors'])){
                        echo "<h3>Login failed:</h3>";
                        foreach($_SESSION['errors'] as $errors){
                            echo "<p>-$errors</p>";
                        }
                    session_unset();
                    }
                ?>
            </div>
        </section>
    </body>
</html>    
