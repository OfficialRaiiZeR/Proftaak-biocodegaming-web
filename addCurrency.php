<?php
session_start();
include("inc/functions.php");

if (mysqli_connect_errno()) 
{
  printf("connection failed: %\n", mysql_connect_error());
  exit();
}

if(isset($_GET['item_id'])) {
  $item_id = mysql_real_escape_string($_GET['item_id']);
  $insertDataQuery = "INSERT INTO `biocode`.`inventories` (`user_id`, `item_id`) VALUES (" . $_SESSION['id'] . ", " . $item_id . ");";

  mysqli_query($connect, $insertDataQuery);
  header('Location: userProfile.php');

  exit();
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
      <h1>add your desired currency</h1>
      <div class="row">
        <div class="col-md-4">
          <h2><center>5$ BioCoins</center></h2>
          <p><center><a class="btn btn-logout" href="addCurrency.php?item_id=6">Add currency to your account</a></center></p>
        </div>
        <div class="col-md-4">
          <h2><center>10$ BioCoins</center></h2>
          <p><center><a class="btn btn-logout" href="addCurrency.php?item_id=1">Add currency to your account</a></center></p>
        </div>
        <div class="col-md-4">
          <h2><center>15$ BioCoins</center></h2>
          <p><center><a class="btn btn-logout" href="addCurrency.php?item_id=7">Add currency to your account</a></center></p>
        </div>

      </div>

      <hr>
    <footer>
        <?php
          include("Layout/footer.php");
        ?>
      </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>