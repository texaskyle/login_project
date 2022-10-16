<?php
include 'connection.inc.php';
// it will tell you the page that you are in
ob_start();
session_start();
 $current_file = $_SERVER['SCRIPT_NAME']."<br>";
 $http_referer  = $_SERVER['HTTP_REFERER'];

function loggedin()
{
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}


?>