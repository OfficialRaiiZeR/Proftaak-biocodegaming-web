<?php
session_start();

include("inc/functions.php");

if (isset($_POST['mylogout'])) 
{
  $_SESSION['userlogedin'] = false;
  header("location:index.php");
}

  $sql = "SELECT * FROM `login` WHERE `userName` = '". $_SESSION['userName'] . "' LIMIT 0, 1 ";

  $resource = mysqli_query($connect, $sql);

  $projects = array();
  while ($result = mysqli_fetch_assoc($resource)) 
  {
    $projects[] = $result;
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
          <ul>
    <div id="info-containertext1">
    <a onclick=
        "document.getElementById('info-container').style.display='block';
         document.getElementById('info-container2').style.display='none';
         document.getElementById('info-container3').style.display='none';
         document.getElementById('info-container4').style.display='none';
        ">
        <h3>General information</h3>
      </a>
      </div>

      <div id="info-containertext2">
      <a onclick=
        "document.getElementById('info-container').style.display='none';
         document.getElementById('info-container2').style.display='block';
         document.getElementById('info-container3').style.display='none';
         document.getElementById('info-container4').style.display='none';
        ">
        <h3>Private information</h3>
      </a>
      </div>

      <div id="info-containertext3">
      <a onclick=
        "document.getElementById('info-container').style.display='none';
         document.getElementById('info-container2').style.display='none';
         document.getElementById('info-container3').style.display='block';
         document.getElementById('info-container4').style.display='none';
        ">
        <h3>Currency</h3>
      </a>
      </div>

      <div id="info-containertext4">
      <a onclick=
        "document.getElementById('info-container').style.display='none';
         document.getElementById('info-container2').style.display='none';
         document.getElementById('info-container3').style.display='none';
         document.getElementById('info-container4').style.display='block';
        ">
        <h3>Inventory</h3>
      </a>
      </div>

    </ul>
        </div>

       <?php

          foreach ($projects as $value) {

          ?>
        <div class="col-md-4">

          <!-- general information -->
          <div ID="info-container">
            naam:<b> <?php echo $value['screenName']; ?></b>
            <br>
            <br>
            Username: <b> <?php echo $value['userName']; ?></b>
            <br>
            <br>
            Email: <b> <?php echo $value['Email']; ?></b>
          </div>

          <!-- password -->
          <div ID="info-container2">
            change password: <b><input type="changePassword" name="changePassword" placeholder="change Password" class="form-control"></b>
            <br>
            <br>
            confirm password: <b><input type="confimChangePassword" name="confirmChangePassword" placeholder="confirm change Password" class="form-control"></b>
          </div>

          <!-- currency -->
          <div ID="info-container3">
            current currency: <b> <?php echo $value['Currency']; ?></b>
            <br>
            <br>
            you want more? <b> <?php echo $value['Currency']; ?></b>
          </div>
        </div>

          <!-- invenory -->
          <div ID="info-container4">
            <div class="InventoryContainer"> 


            </div>
          </div>
        </div>

        <?php } ?>
        <div class="col-md-4">

        </div>
      </div>

      <hr>

      <footer>
        <?php
          include("Layout/footer.php");
        ?>
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
