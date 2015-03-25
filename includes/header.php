<section id="main-header">
    
    <div class='logo-font'>The Blog</div>
    
    <div id="hello" class='logo-font'>Hello, <?php echo $_SESSION['userinfo']['firstName']; ?></div>
    
    <ul id="main-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="userPage.php"><?php echo $_SESSION['userinfo']['firstName']; ?>'s Profile</a></li>
        <li><a href="actions/logout.php">Logout</a></li>
    </ul>
</section>