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

    <link href="css/styleSupportPage.css" rel="stylesheet">

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

    <!-- <div class="jumbotron">
      <div class="container">
        <h1>Welcome to biocodegaming</h1>
        <p class="maintext">This is BioCodeGaming, the Number 1 platfrom for all your community stuff and gaming servers. We also have a installable application from this website where you will have the same functionality</p>
        <p><a class="btn btn-primary btn-lg" href="application.php" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
 -->
    <div class="container">
      <?php
        if (isset($_REQUEST['email']))  
        {
          //Email information
          $admin_email = "alexmares0304@gmail.com";
          $email = mysql_real_escape_string($_REQUEST['email']);
          $subject = "BioCodeGaming Support mail";
          $comment = mysql_real_escape_string($_REQUEST['Message']);
          $firstName = mysql_real_escape_string($_REQUEST['firstName']);
          $insertion = mysql_real_escape_string($_REQUEST['insertion']);
          $lastName = mysql_real_escape_string($_REQUEST['lastName']);

          //send email
          mail($admin_email, "$subject", $comment, "From:" . $email, $firstName . $insertion . $lastName);
            
          //Email response
          echo "Thank you for contacting us! <br /> We will resolve your problem as soon as possible.";
        }
          
        //if "email" variable is not filled out, display the form
        else {
      ?>
      
      <form action="support.php" method="POST">
        <ul id="ulForm">
          <div id="ContactTitle">Contact</div>
          <li>
            <label>Firstname:</label>
            <input type="text" name="firstName" value="">
          </li>
          <li>
            <label>Insertion:</label>
            <input type="text" name="insertion" value="">
          </li>
          <li>
            <label>Lastname:</label>
            <input type="text" name="lastName" value="">
          </li>
          <li>
            <label>Email address:</label>
            <input type="email" name="email" value="">
          </li>
          <li>
            <label>Explain Your problem:</label>
            <textarea id="messageBox" type="text" name="Message" value=""></textarea>
          </li>
          <li>
            <div id="submitButton">
              <input type="submit" name="submit" value="Send">
            </div>
          </li>
        </ul>
      </form>

          <?php
            }
          ?>
      <hr>

      <footer>
        <p>&copy; 2015 BioCodeGaming, Inc.</p>
      </footer>
    </div> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>