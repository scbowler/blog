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
        
        <aside>
            <h2>User's Online</h2>
            <div id="users-online">
                <ul>
                    <li>User1</li>
                    <li>User2</li>
                    <li>User3</li>
                    <li>User4</li>
                </ul>
            </div>
        </aside>
        
        <section id="blog-list">
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
            <div class='example-blog'>
                <div>My Blog Title 3</div>
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
                <div>My Blog Title 4</div>
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
        
        <?php require_once('includes/footer.php'); ?>
    </body>
</html>