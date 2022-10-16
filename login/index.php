<?php
require 'core.inc.php';
// requiring the database connection
require 'connection.inc.php';
// to show the page we are currently on
echo "page we are currently on: ".$current_file;
// echo "previous page: ".$http_referer;
echo "<br>";
echo "<hr>";

//funtion to check if the user is logged in

/*
if(loggedin()) {
    echo "You are logged in<br>";
   echo '<a href="logout.php">Logout</a>';
}else{
    include 'loginform.inc.php';
}
*/



if ( isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
 
   echo '<a href="logout.php">Logout</a>';
}else{
    include 'loginform.inc.php';
}


?>
