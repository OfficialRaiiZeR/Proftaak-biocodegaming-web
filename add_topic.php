<?php

include("inc/Function.php");

$tbl_name="forum_question";

// get data that sent from form 
$topic= mysql_real_escape_string($_POST['topic']);
$detail= mysql_real_escape_string($_POST['detail']);
$name= mysql_real_escape_string($_POST['name']);
$email= mysql_real_escape_string($_POST['email']);


$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', NOW())";

$result=mysql_query($sql);

if ($result)
{
	echo "Successful<BR>";
	echo "<a href=main_forum.php>View your topic</a>";
}
else 
{
	echo "ERROR";
}

mysql_close();
?>