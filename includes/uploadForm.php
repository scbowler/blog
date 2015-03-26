<?php

$form = "<form id='update-pic-form' action='actions/uploadPic.php' method='post' enctype='multipart/form-data'><input type='file' name='fileToUpload' id='fileToUpload'><input class='btn2 file-cover' type='button' value='Chose File To Upload'><br><input class='btn2' id='up-file' type='submit' value='Upload File' name='submit'><button class='btn2' type='button' id='close-form'>Cancel</button></form>";

echo json_encode($form);
?>