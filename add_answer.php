<?php

include("inc/Function.php");

$tbl_name="forum_answer"; // Table name 

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";

$result=mysql_query($sql);

$rows=mysql_fetch_array($result);

if ($rows) 
{
	$Max_id = $rows['Maxa_id']+1;
}
else 
{
	$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', NOW())";
$result2=mysql_query($sql2);

if($result2)
{
	$tbl_name2="forum_question";
	$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
	$result3=mysql_query($sql3);
	header("Location: view_topic.php?id=".$id."");
}
else 
{
	
}

mysql_close();
?>