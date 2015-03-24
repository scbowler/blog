<?php

function clean($str){
    return htmlentities(addslashes(trim($str)));
}

function formatDate($ts){
    return date("m/d/Y @ g:i a", $ts);
}

?>