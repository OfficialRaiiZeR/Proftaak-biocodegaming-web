<?php
session_start();

//var_dump($_SESSION);


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

    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
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

          <?php  
            include("Layout/header.html");
          ?>

        </div>
        <?php 

	    if ($_SESSION['userlogedin'] == true) 
	    {

        ?>

        <div id="navbar" class="navbar-collapse collapse">
        	<form action="index.php" method="POST">
          		<fieldset>
            		<input type="submit" name="mylogout" value="logout">
          		</fieldset>
        	</form>
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

    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to biocodegaming</h1>
        <p class="maintext">This is BioCodeGaming, the Number 1 platfrom for all your community stuff and gaming servers. We also have a installable application from this website where you will have the same functionality</p>
        <p><a class="btn btn-primary btn-lg" href="application.php" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <h1>Latest news and releases</h1>
      <div class="row">
        <div class="col-md-4">
          <h2>join our steam group!</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio duiv hashugu. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>our teamspeak</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>our discord</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>New logo's</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>New staffmembers</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>help us improve!</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <p><a class="btn2" href="#" role="button">Older news &raquo;</a></p>
      </div>

      <hr>

      <footer>
        <p>&copy; 2015 - 2017 BioCodeGaming, Inc.
          <img src="images/icons/twitter bold.png" alt="support" width="50" height="50">
          <img src="images/icons/facebook bold.png" alt="support" width="50" height="50">
          <img src="images/icons/instagram bold.png" alt="support" width="50" height="50">
          <img src="images/icons/youtube bold.png" alt="support" width="50" height="50">
        </p>
      </footer>
    </div>

    <!-- ================================================== core JavaScript ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
</script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
  </body>
</html>
