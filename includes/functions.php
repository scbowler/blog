<?php

function clean($str){
    return htmlentities(addslashes(trim($str)));
}

?>