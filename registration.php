<?php
session_start();

include("inc/functions.php");

$biocode = array();

if (mysqli_connect_errno()) {
  printf("connection failed: %\n", mysql_connect_error());
}

if (isset($_POST['submit'])) {

  $username = mysql_real_escape_string($_POST['username']);
  $firstname = mysql_real_escape_string($_POST['firstname']);
  $insertion = mysql_real_escape_string($_POST['insertion']);
  $lastname = mysql_real_escape_string($_POST['lastname']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
  $confirmPassword = mysql_real_escape_string($_POST['confirmPassword']);
}

  // !!!deze insert nog aanpasen, het is de oude nog van guestbook. database is namelijk nog niet klaar!!!
  $insertDataQuery = " INSERT INTO `biocode`.`members` (`memberID`, `username`, `email`, `password`) VALUES (NULL, '$memberID', '$username', 'email', '$password', '', CURRENT_DATE())";

    mysqli_query($connect, $insertDataQuery);
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
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <!-- een branch van dit aken als tijd over is -->
            <?php  
              include("Layout/header.html");
            ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            
            
            <a class="btn btn-success" href="login.php">Sign in</a>
            <a class="btn btn-success" href="registration.php">Create account</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

   <div class="container">
    <h1>login</h1>

      <div class="row">
        <div class="col-md-4">
       <?php 
        if ($_SESSION['userlogedin'] == true) {
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
        </div>
        <div class="col-md-4">
              <label>
                username
              </label>
              <br>
              <input type="text" name="username" class="form-control" placeholder="username" value="" required>
              <br>
              <label>
                first name
              </label>
              <br>
              <input type="text" name="firstname" class="form-control" placeholder="firstname" value="">
              <br>
              <label>
              <label>
                insertion
              </label>
              <br>
              <input type="text" name="insertion" class="form-control" placeholder="insertion" value="" required>
              <br>
                surname
              </label>
              <br>
              <input type="text" name="lastname" class="form-control" placeholder="username" value="" required>
              <br>
              <label>
                email
              </label>
              <br>
              <input type="text" name="email" class="form-control" placeholder="username" value="" required>
              <br>
              <label>
                password
              </label>
              
              <input type="password" name="password" placeholder="Password" class="form-control" value="" required>
              <label>
                verify password
              </label>
              
              <input type="password" name="confirmPassword" placeholder="Password" class="form-control">
              <br>
              <input type="submit" name="mylogin" value="login" class="login-button">

              <img src="images/logo_biocodegaming.png" alt="album title goes here" width="250" height="250">
            </fieldset>
        </div>
          </form>
          <?php
             }
           ?>
      </div>


      <hr>

      <footer>
        <?php
          include("Layout/footer.php");
        ?>
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