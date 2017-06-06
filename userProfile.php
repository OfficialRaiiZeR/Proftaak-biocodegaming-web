<?php
session_start();


if (isset($_POST['mylogout'])) 
{
  $_SESSION['userlogedin'] = false;
  header("location:index.php");
}


  $sql = "SELECT * FROM `login` LIMIT 0, 4 ";

  $resource = mysqli_query($connect, $sql);

  $loginInfo = array();
  while ($result = mysqli_fetch_assoc($resource)) 
  {
    $loginInfo[] = $result;
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

    <link href="css/styleContactPage.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

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
    <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right" action="index.php" method="POST">
                <fieldset>
                 <input class="btn btn-logout" type="submit" name="mylogout" value="logout">
                 <a class="btn btn-logout" href="index.php">Go to main page</a>
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
    <h1>User profile</h1>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
        <?php

        foreach ($loginInfo as $login) {

        ?>
            Name:

            Username:

            Password:

            Email: 
        </div>
        <div class="col-md-4">

        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2015 BioCodeGaming, Inc.</p>
      </footer>
    </div>


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
