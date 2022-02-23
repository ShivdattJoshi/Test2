<?php
 $dbhost = "localhost";
 $dbuser = "kedar";
 $dbpass = "5mdYXTZeXatInRA/";
 $db = "school";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>