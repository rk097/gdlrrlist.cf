<?php
session_start();
$_SESSION['active-nav'] = '61plus';

$themeClass = '';
if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
  $themeClass = 'dark-theme';
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="Geometry Dash LRR Demonlist">
    <meta property="og:description" content="A demon list dedicated to low-refresh-rate (60hz, 75hz, Mobile) Geometry Dash players.">
    <meta name="author" content="ryan9328">
    <meta name="keywords" content="ryan9328,official,geometry,dash,hardest,extreme,insane,demon,list,demonlist,hardest,levels,gmd,gd,typier,game,top,level,levels,player,players,geometry dash, LRR, 60hz, 60HZ, 75hz, 75HZ, geometry dash 60hz demonlist, GD 60hz list">
    <meta name="description" content="A demon list dedicated to low-refresh-rate (60hz, 75hz, Mobile) Geometry Dash players.">
    <title>GD LRR Demon List</title>
    <link href="CSS/levelcards.css?v=2021-02-26" rel="stylesheet" type="text/css" />
    <link href="CSS/nav.css?v=2021-2-25" rel="stylesheet" type="text/css" />
    <link href="CSS/list.css?v=2020-10-29" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter|Bitter:light,bold">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
  </head>
  <body class = "<?php echo $themeClass; ?>">
  
  <?php include "nav.php" ?>
  
    <div id="levels-container"> 
      <h1 style = "text-align:center">61hz+ levels</h1>
      <p style = "text-align:center">Here, we feature any list-worthy demons that have been beaten on 61-75hz but are not eligible for normal rankings due to not having a 60hz victor. This is to recognize the achievements of 61-75hz players and also to encourage 60hz players to beat these levels to get them ranked by making them more known to the community.
        <br>
        <br>
        NOTE: Unless you COMPLETE one of these levels on 60hz, please do NOT submit records for these levels.
        <br>
        <br></p>
    </div>


    <!-- scripts to include -->
    <?php
      include "scripts/collapsible-js.php";
      include "scripts/61plus-js.php";
      include "scripts/dropdown-js.php";
      include "scripts/videoresize-js.php";
      include "scripts/darkbutton-js.php";
    ?>
  </body>
</html>
