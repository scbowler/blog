<?php
require_once('functions.php');

if($_POST['type'] === 'edit'){
    $title = clean($_POST['title']);
    $body = clean($_POST['body']);
    $ID = clean($_POST['blogID']); 
    
}else{
    $title = '';
    $body = '';
    $ID = 0;
}

$form = "<form id=newPost-form><input type='hidden' name='blogID' value=$ID><input type='text' name='title' placeholder='Blog Title' value='$title'><textarea name='body' placeholder='Blog Body'>$body</textarea><br><input type='radio' name='status' value='public' checked='checked'>Public<input type='radio' name='status' value='private'>Private<input type='radio' name='status' value='draft'>Draft<br><button type='button' id='add-post'>Save Post</button><button type='button' id='close-form'>Cancel</button></form>";

echo json_encode($form);

?>