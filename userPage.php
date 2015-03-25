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
           <h2 class='logo-font'>Your Info</h2>
           
               <img src=<?php echo $_SESSION['userinfo']['pic']; ?>>
               <button class='btn2' id='update-pic'>Update Profile Pic</button>
               <ul>
                   <li><strong>Pen Name:</strong> <?php echo $_SESSION['userinfo']['penName']; ?></li>
                   <li><strong>First Name:</strong> <?php echo $_SESSION['userinfo']['firstName']; ?></li>
                   <li><strong>Last Name:</strong> <?php echo $_SESSION['userinfo']['lastName']; ?></li>
                   <li><strong>Email:</strong> <?php echo $_SESSION['userinfo']['email']; ?></li>
                   <li><strong>Total Posts:</strong> <?php echo $_SESSION['userinfo']['posts']; ?></li>
                   <li><strong>Meember Since:</strong> <?php echo date('m/d/Y', $_SESSION['userinfo']['created']); ?></li>
                   <li><strong>Last Login:</strong> <?php echo date('m/d/Y g:i a', $_SESSION['userinfo']['lastLogin']); ?></li>
               </ul>
       </aside>
      
      <section class="blog-list">
      <section id="user-actions">
           <button class='btn' id="new-post" value="new">New Post</button>
           <a href="drafts.php"><button class='btn' id="drafts">View Drafts</button></a>
       </section>
       <h1>Everything You've Posted So Far...</h1>
      </section>
      
      
     <?php require_once("includes/footer.php"); ?>
    </body>
</html>