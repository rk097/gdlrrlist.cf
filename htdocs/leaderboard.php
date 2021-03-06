<?php
session_start();
$_SESSION['active-nav'] = 'leaderboard';

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
    <link href="CSS/leaderboard.css?v=2021-03-23" rel="stylesheet" type="text/css" />
    <link href="CSS/playercards.css?v=2021-03-23" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter|Bitter:light,bold">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
  </head>
  <body class = "<?php echo $themeClass; ?>">
    
  <?php include "nav.php" ?>
  
    <div id="leaderboard" style = "text-align:center"> 
      <h1>Leaderboard</h1>
      <p>Click on a player's name for some additional information. It may take a second to load.</p>
      <p><a href = "pointcalculator.php" target = "_blank">Points Calculator</a></p>
    </div>

    <!-- scripts to include -->
    <?php
      include "scripts/leaderboardcalc-js.php";
      include "scripts/dropdown-js.php";
      include "scripts/darkbutton-js.php";
    ?>

  </body>
</html>
