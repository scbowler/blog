<?php

$form = "<form action='actions/uploadPic.php' method='post' enctype='multipart/form-data'>Select image to upload:<input type='file' name='fileToUpload' id='fileToUpload'><input type='submit' value='Upload File' name='submit'></form>";

echo json_encode($form);
?>