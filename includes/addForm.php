<?php
require_once('functions.php');

if($_POST['type'] === 'edit'){
    $title = clean($_POST['title']);
    $body = clean($_POST['body']);
    $ID = clean($_POST['blogID']);
    $header = "<h1 class='logo-font'>Edit Blog</h1>";
    
}else{
    $title = '';
    $body = '';
    $ID = 0;
    $header = "<h1 class='logo-font'>New Blog</h1>";
}

$form = "<form id=newPost-form><input type='hidden' name='blogID' value=$ID>$header<input id='new-title' type='text' name='title' placeholder='Blog Title' value='$title'><br><textarea name='body' placeholder='Blog Body'>$body</textarea><br><input type='radio' name='status' value='public' checked='checked'>Public<input type='radio' name='status' value='private'>Private<input type='radio' name='status' value='draft'>Draft<br><button type='button' class='btn2' id='add-post'>Save Post</button><button class='btn2' type='button' id='close-form'>Cancel</button></form>";

echo json_encode($form);

?>