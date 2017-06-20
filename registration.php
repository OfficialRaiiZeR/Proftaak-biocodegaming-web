<?php
session_start();

include("inc/functions.php");

$biocode = array();

if (mysqli_connect_errno()) 
{
  printf("connection failed: %\n", mysql_connect_error());
  exit();
}

if (isset($_POST['mylogin'])) 
{

  $username = mysql_real_escape_string($_POST['username']);
  $fullName = mysql_real_escape_string($_POST['fullName']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);

  $insertDataQuery = " INSERT INTO `biocode`.`login` (`userId`, `userName`, `userPass`, `screenName`, `Currency`, `Email`) VALUES (NULL, '" . $username . "', '" . sha1($password) . "', '" . $fullName . "', '0', '" . $email . "') ";

  mysqli_query($connect, $insertDataQuery);

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
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a class="btn btn-success" href="login.php">Sign in</a>
            <a class="btn btn-success" href="registration.php">Create account</a>
          </form>
        </div>
      </div>
    </nav>

   <div class="container">
    <h1>login</h1>
      <div class="row">
        <div class="col-md-4">
        <?php 
        if ($_SESSION['userlogedin'] == true) 
        {
          header("location:index.php");
        }
        else
        {
        ?>
        <form action="registration.php" method="POST">
            <fieldset>
              <label>
                Username
              </label>
              <br>
              <input type="text" name="username" class="form-control" placeholder="username" value="" required>
              <br>

              <label>
                Full name
              </label>
              <br>
              <input type="text" name="fullName" class="form-control" placeholder="Full Name" value="">
              <br>

              <label>
                Email
              </label>
              <br>
              <input type="email" name="email" class="form-control" placeholder="username" value="" required>
              <br>

              <label>
                Password
              </label>
              <input type="password" name="password" placeholder="Password" class="form-control" value="" required>
              <br>

              <label>
                Verify password
              </label>
              <input type="password" name="confirmPassword" placeholder="Password" class="form-control">
              <br>

              <input type="submit" name="mylogin" value="Create account" class="login-button">

            </fieldset>

        </div>
        </form>
          <?php
          }
          ?>
      <hr>

    </div>
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