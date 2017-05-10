<?php 

include("inc/functions.php");

$username = "qwer";
$password = "123";
$login = array();
session_start();
if (!isset($_SESSION['userlogedin'])) {
  $_SESSION['userlogedin'] = false;
}

if (isset($_POST['mylogin'])) {
  $loginQuery = "SELECT * FROM `login` WHERE `userName` = '". $_POST['username'] . "' AND `userPass` = '" . sha1($_POST['password']) . "'";

  

  if ($resource = mysqli_query($connect, $loginQuery))
  {
    

  }

  $rowcount=mysqli_num_rows($result);

  printf("Result set has %d rows.\n",$rowcount);

  echo "<pre>";
  var_dump($user);
  echo "<pre>";
//die($loginQuery);



  if ($_POST['username'] == $username && $_POST['password'] == $password) {
    $_SESSION['userlogedin'] = true;
    header("location:index.php");
  }
  # code...
}

if (isset($_POST['mylogout'])) {
  $_SESSION['userlogedin'] = false;
  header("location:index.php");
}

// echo "<pre>";
// var_dump($connect);
// echo "</pre>";
//var_dump($_POST);
//var_dump($connect);

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
          <a class="navbar-brand" href="index.html">home</a>
          <a class="navbar-brand" href="about.html">about</a>
          <a class="navbar-brand" href="forum.php">forum</a>
          <a class="navbar-brand" href="contact.html">contact</a>
          <a class="navbar-brand" href="support.php">support</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            
            
            <button type="submit" class="btn btn-success" href="login.php">Sign in</button>
            <button type="submit" class="btn btn-success" href="registration.php">Create account</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

   <div class="container">
    <h1>login</h1>
      <!-- Example row of columns -->
      <div class="row">
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
              <label>
                username
              </label>
              <input type="text" name="username">
              <label>
                password
              </label>
              <input type="password" name="password">
              <input type="submit" name="mylogin" value="login">
            </fieldset>
          </form>
          <?php
        }
       ?>

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
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>