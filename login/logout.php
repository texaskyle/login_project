<?php
require 'core.inc.php';
echo "page we are currently on: ".$current_file;




session_destroy();
 header('Location: '.$http_referer);

?>  