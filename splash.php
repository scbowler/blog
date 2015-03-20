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
            <form id="login-form">
                <input type="text" name="username" placeholder="Enter Username">
                <input type="password" name="password" placeholder="Enter Password">
                <button type="button">Login</button>
            </form>
            <div id="login-links">
                <button id='guest-btn'>Continue as Guest</button>
                <a href="">Register</a>
                <a href="">Forgot Password</a>
            </div>
        </section>
    </body>
</html>    
