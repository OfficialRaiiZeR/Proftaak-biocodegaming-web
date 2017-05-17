<?php

if ($_SESSION['userlogedin'] == true) {
	//var_dump($_SESSION['currentUser']);
	echo "<h3>Hi " . $_SESSION['currentUser']["screenName"] . " </h3>";
	?>
	<form action="index.php" method="POST">
		<fieldset>
			<input type="submit" name="mylogout" value="logout">
		</fieldset>
	</form>
	<?php
}
else
{
	?>
	<form action="index.php" method="POST">
		<fieldset>
			<label>
				username
			</label>
			<input class="form-control" type="text" placeholder="username" name="username">
			<label>
				password
			</label>
			<input type="password" name="password" placeholder="Password" class="form-control">
			<input type="submit" name="mylogin" value="login">
		</fieldset>
	</form>
	<?php
}

?>