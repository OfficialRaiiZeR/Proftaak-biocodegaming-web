<?php
session_start();

include("inc/Function.php");

$tbl_name="forum_question"; 

$sql="SELECT * FROM $tbl_name ORDER BY id DESC"; // OREDER BY id DESC is order result by descending

$result=mysql_query($sql);


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

    <link href="css/styleForumPage.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
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
          <!-- een branch van dit maken als tijd over is -->

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
    

    <table width="90%" border="0" align="center" cellpadding="5" cellspacing="2" bgcolor="#CCCCCC">
      <tr>
        <td class="btn btn-forum" colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_topic.php"><strong>Create New Topic</strong> </a></td>
      </tr>
      <div class="ForumTopBar">
        <tr>
          <td class="forumBars" width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
          <td class="forumBars" width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
          <td class="forumBars" width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
          <td class="forumBars" width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
          <td class="forumBars" width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
        </tr>
      </div>

      <?php
      // Start looping table row
      while($rows=mysql_fetch_array($result)){
      ?>
      <tr>
        <td class="forumComments" align="center" bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
        <td class="forumComments" align="center" bgcolor="#FFFFFF"><b><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a></b><BR></td>
        <td class="forumComments" align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
        <td class="forumComments" align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
        <td class="forumComments" align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
      </tr>

      <?php
      // Exit looping and close connection 
      }
      
      mysql_close();
      ?>

    </table>

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
  </body>
</html>



