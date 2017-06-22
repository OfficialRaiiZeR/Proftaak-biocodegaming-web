<?php 
session_start();

//session_destroy();

//var_dump($_SESSION);

include("inc/functions.php");

$username = "qwer";
$password = "123";
$login = array();
if (!isset($_SESSION['userlogedin'])) {
  $_SESSION['userlogedin'] = false;
}

if (isset($_POST['mylogin'])) {
  $loginQuery = "SELECT * FROM `login` WHERE `userName` = '". $_POST['username'] . "' AND `userPass` = '" . sha1($_POST['password']) . "'";
$_SESSION['userName'] = $_POST['username'];
  

  if ($resource = mysqli_query($connect, $loginQuery))
  {
    $rowcount=mysqli_num_rows($resource);
    $user=mysqli_fetch_assoc($resource);
    if($rowcount > 0)
    {
      $_SESSION['userlogedin'] = true;
      $_SESSION['id'] = $user['userId'];
      header("location:index.php");
    }
    else
    {
      //header("location:http://www.someweirdwebsite.com");
    }
    
  }
}


  //printf("Result set has %d rows.\n",$rowcount);


/*

  if ($_POST['username'] == $username && $_POST['password'] == $password) {
    $_SESSION['userlogedin'] = true;
    header("location:index.php");
  }
  */
  # code...


if (isset($_POST['mylogout'])) {
  $_SESSION['userlogedin'] = false;
  header("location:login.php");
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
      <!-- Example row of columns -->
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
       
      </div>
      <form action="login.php" method="POST">
            <fieldset>
        <div class="col-md-4">
              <label>
                username
              </label>
              <br>
              <input type="text" name="username" class="form-control" placeholder="username" required="">
              <br>
              <label>
                password
              </label>
              <br>
              <input type="password" name="password" placeholder="Password" class="form-control" required="">
              <br>
              <input class="btn btn-login" type="submit" name="mylogin" value="login">
            </fieldset>
      </form>
    </div>
          
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
    <script>
</script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>