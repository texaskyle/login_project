<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "login";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$conn) {
   die("connection failed: ".mysqli_connect_error());
} 
?>