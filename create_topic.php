<?php  
session_start();

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
				<form id="form1" name="form1" method="post" action="add_topic.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
							</tr>
							<tr>
								<td width="14%"><strong class="forumCreateNames">Topic</strong></td>
								<td width="2%">:</td>
								<td width="84%"><input class="form-control" name="topic" type="text" id="topic" size="50" /></td>
							</tr>
							<tr>
								<td valign="top"><strong class="forumCreateNames">Detail</strong></td>
								<td valign="top">:</td>
								<td><textarea class="form-control" name="detail" cols="50" rows="3" id="detail"></textarea></td>
							</tr>
							<tr>
								<td><strong class="forumCreateNames">Name</strong></td>
								<td>:</td>
								<td><input class="form-control" name="name" type="text" id="name" size="50" /></td>
							</tr>
							<tr>
								<td><strong class="forumCreateNames">Email</strong></td>
								<td>:</td>
								<td><input class="form-control" name="email" type="text" id="email" size="50" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input class="btn btn-forum" type="submit" name="Submit" value="Submit" /> <input class="btn btn-logout" type="reset" name="Submit2" value="Reset" /></td>
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



