<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="usbw"; // Mysql password 
$db_name="biocode"; // Database name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>