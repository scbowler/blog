<section id="main-header">
    
    <div>Awesome Logo</div>
    
    <h1>The Blog</h1>
    
    <h3>Hello, <?php echo $_SESSION['userinfo']['firstName']; ?></h3>
    
    <ul id="main-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="userPage.php"><?php echo $_SESSION['userinfo']['firstName']; ?>'s Profile</a></li>
        <li><a href="actions/logout.php">Logout</a></li>
    </ul>
</section>