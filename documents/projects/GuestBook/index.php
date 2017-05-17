<?php
session_start();

include("inc/functions.php");

$guestbook = array();

if (mysqli_connect_errno()) {
	printf("connect failed: %s\n", mysql_connect_error());
	exit();
}

if (isset($_POST['submit'])) {

	$firstname = $_POST['firstname'];
	$insertion = $_POST['insertion'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$ipadress = $_SERVER['REMOTE_ADDR'];

/*	$insertDataQuery = "INSERT INTO guests (id, firstname , insertion ,surname ,email ,webAddress ,message) VALUES (NULL, '$username', '$insertion', '$surname', '$email', '$webAddress', '$message')";*/

	/*$insertDataQuery = "INSERT INTO `guestbook`.`guests` (`guestbookId`, `firstname`, `insertion`, `surname`, `emailAddress`, `message`, `ipAdddress`, `timefInsert`) VALUES (NULL, '$firstname', '$insertion', '$surname', '$email', '$message', '$ipadress', CURRENT_DATE())";*/


	$insertDataQuery = " INSERT INTO `guestbook`.`guests` (`guestbookId`, `firstname`, `insertion`, `surname`, `emailAddress`, `message`, `ipAdddress`, `timefInsert`) VALUES (NULL, '$firstname', '$insertion', '$surname', '$email', '$message', '', CURRENT_DATE())";


	mysqli_query($connect, $insertDataQuery);
	


}

$showDataQuary = "SELECT * FROM `guests` ORDER BY `guestbookId` DESC ";

if ($resource = mysqli_query($connect, $showDataQuary))
{
	while ($result = mysqli_fetch_assoc($resource)) 
	{
		$guestbook[] = $result;
	}
}
else
{
	echo "er is een fout opgetreden";
	die(mysqli_error($connect));
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="guestbook">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>guestbook.</title>
</head>
<body>
<div id="formBody">
<form id="fillin-Form" action="" method="POST">
	
	<ul>
		<li>
			<label>name</label>
			<input class="formItems" type="text" name="firstname" value="" required>
		</li>
		<li>
			<label>insertion</label>
			<input class="formItems" type="text" name="insertion" value="">
		</li>
		<li>
			<label>surname</label>
			<input class="formItems" type="text" name="surname" value="" required>
		</li>
		<li>
			<label>email</label>
			<input class="formItems" type="text" name="email" value="" required>
		</li>
		<!-- <li>
			<label>webAddress</label>
			<input class="formItems" type="text" name="webAddress" value="">
		</li> -->
		<li>
			<label id="formMessagebox">message</label>
			<textarea id="message" name="message" ></textarea>
		</li>
		<li>
			<input type="submit" value="submit" name="submit">
			<input type="reset" value ="resetting">
		</li>
	</ul>

	</form>
	</div>

	<div id="commentsContainer">
	

	<?php

	foreach ($guestbook as $key => $value)
	{
		echo '<div class="commentsContainer">';

		echo '<div class="commentsContainer">';
		echo '<b> firstname:</b>    ';
		echo $value['firstname'];
		echo '</div>';

		echo '<div class="commentsContainer">';
		echo '<b> insertion:</b>    ';
		echo $value['insertion'];
		echo '</div>';

		echo '<div class="commentsContainer">';
		echo '<b> surname:</b>    ';
		echo $value['surname'];
		echo '</div>';

		echo '<div class="commentsContainer">';
		echo '<b> email:</b>    ';
		echo $value['emailAddress'];
		echo '</br></br>';
		echo '</div>';

		echo '<div class="costumerMessage">';
		echo '<b> Costumers message: </b> </br>';
		echo $value['message'];
		echo '</div>';
		echo '<hr/';

		echo '</div>';
	}
	?>
	</div>

</body>
</html>