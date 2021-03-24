<?php
session_start();
$_SESSION['active-nav'] = 'index';

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
  <link href="CSS/levelcards.css?v=2021-03-23" rel="stylesheet" type="text/css" />
    <link href="CSS/nav.css?v=2021-03-23" rel="stylesheet" type="text/css" />
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
    <!--<body style="background-color:white;">-->
      
    <?php include "nav.php" ?>

    <!-- <p><a href = "leaderboard.html">Leaderboard page</a></p>
    <p><a href = "Extendedlist.html">Extended page</a></p> -->
    <div id="levels-container"> 
      <h1 style = "text-align:center">Top 75 Demons List</h1>
      <p style = "text-align:center">All of these levels are very hard, have LRR victors, and award points for completions and partial progresses!<br> Want to submit a record? Submit it <a href = "https://docs.google.com/forms/d/e/1FAIpQLSfpZDIHi6G47Es11l_DggbmoXHaJIGfFZQd-vbpq8tr1hEoQA/viewform?usp=sf_link" target = "_blank">here!</a></p>
    </div>

    <!-- scripts to include -->
    <?php
      include "scripts/dropdown-js.php";
      include "scripts/mainlist-js.php";
      include "scripts/collapsible-js.php";
      include "scripts/videoresize-js.php";
      include "scripts/darkbutton-js.php";
    ?>

  </body>
</html>
