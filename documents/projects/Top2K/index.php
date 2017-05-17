<?php
session_start();

include("inc/functions.php");

// de query om producten uit je database op te halen
$selectSongsQuery = "SELECT * FROM `2016` ";

  $selectSongsQuery = "SELECT * FROM  `2016` WHERE 1 ";

    if(isset($_POST['requestArtist']) && $_POST['requestArtist'] != "")
    {
        $artiest = $_POST['requestArtist'];
        $selectSongsQuery .= " AND `artist` LIKE '$artiest%'";
    }

     if(isset($_POST['requestTitle']) && $_POST['requestTitle'] != "")
    {
        $title = $_POST['requestTitle'];
        $selectSongsQuery .= " AND `title` LIKE '$title%'";

    }

    if(isset($_POST['requestPosition']) && $_POST['requestPosition'] != "")
    {
        $position = $_POST['requestPosition'];
        $selectSongsQuery .= " AND `position` LIKE '$position'";

    }

if(isset($_POST['top2000id']))
{
	$selectSongsQuery = "SELECT * FROM `2016` ORDER BY `2016`.`top2000id` ASC ";
}

if(isset($_POST['positionfilter']))
{
	$selectSongsQuery = "SELECT * FROM `2016` ORDER BY `2016`.`position` ASC ";
}

if(isset($_POST['title']))
{
	$selectSongsQuery = "SELECT * FROM `2016` ORDER BY `2016`.`title` ASC ";
}

if(isset($_POST['artist']))
{
	$selectSongsQuery = "SELECT * FROM `2016` ORDER BY `2016`.`position` ASC ";
}

if(isset($_POST['year']))
{
	$selectSongsQuery = "SELECT * FROM `2016` ORDER BY `2016`.`year` ASC ";
}

if(isset($_POST['playtime']))
{
	$selectSongsQuery = "SELECT * FROM `2016` ORDER BY `2016`.`playtime` ASC ";
}

if(isset($_POST['reset']))
{
	$selectSongsQuery = "SELECT * FROM `2016` ";
}
$resource = mysqli_query($connect, $selectSongsQuery);

//die($selectSongsQuery);

$songs = array();
while($result = mysqli_fetch_assoc($resource))
{
$songs[] = $result;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="top2000">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>TOP2K.</title>
</head>
<body>


<form name="filterform" id="filterfrom" method="post">

	<div id="filtercontainer">
		<div id="filterbutton"><a onclick="document.forms['filterfrom'].submit()">filter</a></div>
		<div class="filtercss"><label><input name="2016[]" type="checkbox"/> <span>reset</span></label></div></th>
		
	</div>
      <li>
        <label>Filter On Artist</label> <br>
        <input type="text" name="requestArtist" value="">
     </li>
      <li>
        <label>Filter On Title</label> <br>
        <input type="text" name="requestTitle" value="">
      </li>
      <li>
        <label>Filter On Position</label> <br>
        <input type="text" name="requestPosition" value="">
      </li>
	</div>


	<!--<div id="trackbarcontainer">
		<input type="range"  min="0" max="100" />
	</div>-->
	

<div id="top2k-container">

	<section>
  <!--table start-->
  <h1></h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>NUMBER ID<div class="filtercss"><label><input name="top2000id[]" type="checkbox"/> <span>ORDER BY ID</span></label></div></th>
          <th>POSITION<div class="filtercss"><label><input name="positionfilter[]" type="checkbox"/> <span>ORDER BY POSITION</span></label></div></th>
          <th>TITLE<div class="filtercss"><label><input name="title[]" type="checkbox"/> <span>ORDER BY TITLE</span></label></div></th>
          <th>ARTIST<div class="filtercss"><label><input name="artist[]" type="checkbox"/> <span>ORDER BY ARTIST</span></label></div></th>
          <th>YEAR<div class="filtercss"><label><input name="year[]" type="checkbox"/> <span>ORDER BY YEAR</span></label></div></th>
          <th>PLAYTIME<div class="filtercss"><label><input name="playtime[]" type="checkbox"/> <span>ORDER BY PLAYTIME</span></label></div></th>
          
        </tr>
        
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">

    <?php 

    foreach($songs as $song) {
    ?>
    
      <tbody>
        <tr>

          <td><?php echo $song['top2000id']; ?></td>
          <td><?php echo $song['position']; ?></td>
          <td><?php echo $song['title']; ?></td>
          <td><?php echo $song['artist']; ?></td>
          <td><?php echo $song['year']; ?></td>
          <td><?php echo $song['playtime']; ?></td>

        </tr>
      </tbody>
      <?php
	}
  ?>
    </table>
    <table>
      <thead>
        <tr>
          <th>test</th>
          <th>test</th>
        </tr>
      </thead>
    </table>
  </div>
</section>
	</div>




	</form>
	</body>
</html>