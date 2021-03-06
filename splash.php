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
            <h1 class='logo-font'>The Blog</h1>
            <h3>New to The Blog?</h3>
            <p>Sign up for a free account or view public postings as guest</p>
            
            <h3>Not new? Welcome Back!</h3>
            <p>Sign in and enjoy</p>                    
        </section>
       
        <section id="login-area">
            <form action='actions/login.php' method='post' id="login-form">
                <input type="text" name="username" placeholder="Enter Username or Email"><br>
                <input type="password" name="password" placeholder="Enter Password"><br>
                <button class='btn'>Login</button>
            </form>
            <h3>&#45; OR &#45;</h3>
            <div id="login-links">
                <form action='actions/login.php' method='post' id='guest-form'>
                    <button class='btn' name="guest">Continue as Guest</button>
                </form>
                <div id="links">
                    <a href="register.php">Register</a>
                    <a href="">Forgot Password?</a>
                </div>
            </div>
            <div id="login-errors">
                <?php 
                    if(isset($_SESSION['errors'])){
                        echo "<h3 class='fail'>Login failed:</h3>";
                        foreach($_SESSION['errors'] as $msgs){
                            echo "<p class='fail'>$msgs</p>";
                        }
                    session_unset();
                    }elseif(isset($_SESSION['logout'])){
                        echo "<h3>$_SESSION[logout]</h3>";
                        session_unset();
                        session_destroy();
                    }
                ?>
            </div>
        </section>
    </body>
</html>    
