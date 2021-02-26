<?php
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
    <link href="CSS/leaderboard.css?v=2020-10-29" rel="stylesheet" type="text/css" />
    <link href="CSS/playercards.css?v=2020-10-29" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter|Bitter:light,bold">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
  </head>
  <body class = "<?php echo $themeClass; ?>">

  <?php include "nav.php" ?>
  
    <div id = "calc" style = "text-align:center">
      <h1>Points Calculator</h1>
      <p>Follow the instructions on the prompts to use this tool. I also made a <a href = "https://youtu.be/NkcEtpU6ppQ" target = "_blank">video</a> explaining how to use it in a little more detail. The final calculated point value is at the bottom of the page.</p>
      
      <!-- scripts to include -->
    <?php
      include "scripts/pointcalculator-js.php";
      include "scripts/dropdown-js.php";
      include "scripts/darkbutton-js.php";
    ?>

    </div>
  </body>
</html>
