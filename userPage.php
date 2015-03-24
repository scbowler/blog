<?php session_start(); 
date_default_timezone_set('America/Los_Angeles');
require_once('includes/verifyUser.php');
$_SESSION['page'] = 'profile';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $_SESSION['userinfo']['firstName']; ?>'s Profile Page</title>
        <link rel="stylesheet" href="assets/main.css">
        <script src="assets/jquery-2.1.3.min.js"></script>
        <script src="assets/main.js"></script>
    </head>
    <body onload=loadBlogs()>
        <?php require_once('includes/header.php'); ?>
        
       <aside id=user-info>
           <h3>Your Info</h3>
           
               <img src=<?php echo $_SESSION['userinfo']['pic']; ?>>
               <button id='update-pic'>Update Profile Pic</button>
               <ul>
                   <li>Pen Name: <?php echo $_SESSION['userinfo']['penName']; ?></li>
                   <li>First Name: <?php echo $_SESSION['userinfo']['firstName']; ?></li>
                   <li>Last Name: <?php echo $_SESSION['userinfo']['lastName']; ?></li>
                   <li>Email: <?php echo $_SESSION['userinfo']['email']; ?></li>
                   <li>Total Posts: <?php echo $_SESSION['userinfo']['posts']; ?></li>
                   <li>Meember Since: <?php echo date('m/d/Y', $_SESSION['userinfo']['created']); ?></li>
                   <li>Last Login: <?php echo date('m/d/Y g:i a', $_SESSION['userinfo']['lastLogin']); ?></li>
               </ul>
       </aside>
       
       <section id="user-actions">
           <button id="new-post" value="new">New Post</button>
           <a href="drafts.php"><button id="drafts">View Drafts</button></a>
       </section>
       
      <section id="users-blogs">
          <h1>Everything You've Posted So Far...</h1>
          <section class="blog-list">
          </section>
      </section>
      
     <?php require_once("includes/footer.php"); ?>
    </body>
</html>