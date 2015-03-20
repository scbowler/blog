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
        <?php require_once('includes/header.php'); ?>
        
       <aside id=user-info>
           <h3>Your Info</h3>
           <ul>
               <li>Username: j.smith24</li>
               <li>First Name: John</li>
               <li>Last Name: Smith</li>
               <li>Email: js89@mail.com</li>
               <li>Total Posts: 342</li>
               <li>Meember Since: 2/15/2015</li>
           </ul>
       </aside>
       
      <section id="users-blogs">
          <h1>Everything You've Posted So Far...</h1>
          <section class="blog-list">
              <div class='example-blog'>
                <div>My Blog Title 1</div>
                <div>Created on 3/19/2015 @ 5:15pm</div>
                <div>Last updated 3/19/2015 @ 9:37pm</div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                </div>
                <div>Written By: User568</div>
            </div>
            <div class='example-blog'>
                <div>My Blog Title 2</div>
                <div>Created on 3/19/2015 @ 5:15pm</div>
                <div>Last updated 3/19/2015 @ 9:37pm</div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis dignissim ultrices. Sed tempus, eros sit amet euismod tincidunt, enim tortor tincidunt ligula, non rutrum mauris magna hendrerit risus. Duis condimentum libero iaculis erat feugiat, quis semper augue sodales. Morbi eget metus a felis gravida accumsan sit amet at risus. Sed ut augue rutrum, consequat neque id, molestie metus. In sed sapien at ipsum malesuada pellentesque in quis dolor. Aliquam eget consectetur ante. Nulla mollis, ipsum vitae malesuada mattis, sem diam elementum mi, at faucibus urna mi ac felis. Sed fermentum eros ut nisi condimentum, fermentum posuere mi congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque molestie erat non condimentum tincidunt.</p>
                </div>
                <div>Written By: User568</div>
            </div>
          </section>
      </section>
      
     <?php require_once("includes/footer.php"); ?>
    </body>
</html>