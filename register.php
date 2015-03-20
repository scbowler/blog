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
        
        <section id="register-area">
           <h1>Register For a New Account</h1>
            <form id="new-account">
                <input type="text" name="penName" placeholder="Choose a Pen Name">
                <input type="text" name="email" placeholder="Enter Email">
                <input type="text" name="firstName" Placeholder="First Name">
                <input type="text" name="lastName" placeholder="Last Name">
                <input type="password" name="password" placeholder="Choose Password">
                <input type="password" name="confPass" placeholder="Confirm Password">
                <button type="button">Register</button> 
            </form>
            <div id="register-errors"></div>
        </section>
    </body>
</html>