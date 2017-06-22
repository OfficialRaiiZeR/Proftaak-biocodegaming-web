<?php
session_start();

include("inc/Function.php");

$tbl_name="forum_question";

// get value of id that sent from address bar 
$id=$_GET['id'];

$sql="SELECT * FROM $tbl_name WHERE id='$id'";

$result=mysql_query($sql);

$rows=mysql_fetch_array($result);

if (isset($_POST['mylogout'])) 
{
  $_SESSION['userlogedin'] = false;
  header("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>www.biocodegaming.com</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/styleForumpage.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
  <!-- this creates the fade in effect on the pages -->
  <script>document.body.className += ' fade-out';</script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- een branch van dit maken als tijd over is -->
        	<?php  
           		include("Layout/header.html");
          	?>
        </div>
                <?php 

	    if ($_SESSION['userlogedin'] == true) 
	    {

        ?>

        <div id="navbar" class="navbar-collapse collapse">
    <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right" action="index.php" method="POST">
                <fieldset>
                 <input class="btn btn-logout" type="submit" name="mylogout" value="logout">
                 <a class="btn btn-logout" href="userProfile.php">Go to profile</a>
                </fieldset>
              </form>
        </div>
        </div>

        <?php 

		}
		else
		{

		?>

		<div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a class="btn btn-success" href="login.php">Sign in</a>
            <a class="btn btn-success" href="registration.php">Create account</a>
          </form>
        </div>

		<?php

    	}

    ?>
      </div>
    </nav>

    <div class="container">

    	<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
						<tr>
							<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
						</tr>
						<tr>
							<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
						</tr>
						<tr>
							<td bgcolor="#F8F7F1"><strong>By :</strong> <?php echo $rows['name']; ?> <strong>Email : </strong><?php echo $rows['email'];?></td>
						</tr>
						<tr>
							<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<BR>

		<?php

		$tbl_name2="forum_answer"; // Switch to table "forum_answer"

		$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";

		$result2=mysql_query($sql2);

		while($rows=mysql_fetch_array($result2)){

		?>

		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td class="forumAnswers" bgcolor="#F8F7F1"><strong class="forumCreateNames">ID</strong></td>
							<td class="forumAnswers" bgcolor="#F8F7F1">:</td>
							<td class="forumAnswers" bgcolor="#F8F7F1"><?php echo $rows['a_id']; ?></td>
						</tr>
						<tr>
							<td class="forumAnswers" width="18%" bgcolor="#F8F7F1"><strong class="forumCreateNames">Name</strong></td>
							<td class="forumAnswers" width="5%" bgcolor="#F8F7F1">:</td>
							<td class="forumAnswers" width="77%" bgcolor="#F8F7F1"><?php echo $rows['a_name']; ?></td>
						</tr>
						<tr>
							<td class="forumAnswers" bgcolor="#F8F7F1"><strong class="forumCreateNames">Email</strong></td>
							<td class="forumAnswers" bgcolor="#F8F7F1">:</td>
							<td class="forumAnswers" bgcolor="#F8F7F1"><?php echo $rows['a_email']; ?></td>
						</tr>
						<tr>
							<td class="forumAnswersText" bgcolor="#F8F7F1"><strong class="forumCreateNames">Answer</strong></td>
							<td class="forumAnswersText" bgcolor="#F8F7F1">:</td>
							<td class="forumAnswersText" bgcolor="#F8F7F1"><?php echo $rows['a_answer']; ?></td>
						</tr>
						<tr>
							<td class="forumAnswersDate" bgcolor="#F8F7F1"><strong class="forumCreateNames">Date/Time</strong></td>
							<td class="forumAnswersDate" bgcolor="#F8F7F1">:</td>
							<td class="forumAnswersDate" bgcolor="#F8F7F1"><?php echo $rows['a_datetime']; ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table><br>
		 
		<?php
		}

		$sql3="SELECT view FROM $tbl_name WHERE id='$id'";

		$result3=mysql_query($sql3);

		$rows=mysql_fetch_array($result3);

		$view=$rows['view'];
		 
		// if have no counter value set counter = 1
		if(empty($view))
		{
			$view=1;
			$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
			$result4=mysql_query($sql4);
		}
		 
		// count more value
		$addview=$view+1;

		$sql5="update $tbl_name set view='$addview' WHERE id='$id'";

		$result5=mysql_query($sql5);

		mysql_close();
		?>

		<BR>
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<form name="form1" method="post" action="add_answer.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td width="18%"><strong class="forumCreateNames">Name</strong></td>
								<td width="3%">:</td>
								<td width="79%"><input class="form-control" name="a_name" type="text" id="a_name" size="45"></td>
							</tr>
							<tr>
								<td><strong class="forumCreateNames">Email</strong></td>
								<td>:</td>
								<td><input class="form-control" name="a_email" type="text" id="a_email" size="45"></td>
							</tr>
							<tr>
								<td valign="top"><strong class="forumCreateNames">Answer</strong></td>
								<td valign="top">:</td>
								<td><textarea class="form-control" name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input class="form-control" name="id" type="hidden" value="<?php echo $id; ?>"></td>
								<td><input class="btn btn-forum" type="submit" name="Submit" value="Submit"> <input class="btn btn-logout" type="reset" name="Submit2" value="Reset"></td>
							</tr>
						</table>
					</td>
				</form>
			</tr>
		</table>

	</div>
      <hr>
      <footer>
        <p>&copy; 2015 BioCodeGaming, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>




