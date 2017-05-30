<?php
session_start();

include("Layout/header.html");

?>
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
           <a class="navbar-brand" href="index.php">home</a>
          <a class="navbar-brand" href="about.php">about</a>
          <a class="navbar-brand" href="forum.php">forum</a>
          <a class="navbar-brand" href="contact.php">contact</a>
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

    <!-- make a slider from jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to biocodegaming</h1>
        <p class="maintext">This is BioCodeGaming, the Number 1 platfrom for all your community stuff and gaming servers. We also have a installable application from this website where you will have the same functionality</p>
        <p><a class="btn btn-primary btn-lg" href="application.php" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
    <h1>Latest news and releases</h1>


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
  </body>
</html>