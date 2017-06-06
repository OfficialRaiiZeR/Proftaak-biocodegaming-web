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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>www.biocodegaming.com</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styleAboutPage.css" rel="stylesheet">

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
        <h1 class="headerText">About biocodegaming</h1>
      <div class="row">
        
          <div class="infobox">
             <h3 class="maintext">We aare biocodegaming, a community website original from steam. we desided to make a website because de did not like
             how other community websites operated and just made our own one.</h3>
          </div>
        
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
    <script src="js/ie-emulation-modes-warning.js"></script>
  </body>
</html>
