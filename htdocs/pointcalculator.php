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
    <link href="CSS/levelcards.css?v=2020-10-29" rel="stylesheet" type="text/css" />
    <link href="CSS/nav.css?v=2021-2-19" rel="stylesheet" type="text/css" />
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
    <ul class = "nav">
      <li class = "redir"><a href = "#" class = "btn-toggle">Color Switch</a></li>
      <li class = "redir"><a href="changelog.php">Changelog</a></li>
      <li class = "redir"><a href="leaderboard.php">Leaderboard</a></li>
      <li class = "redir"><a href="extended.php">Extended List</a></li>
      <li class = "redir"><a href="index.php">Main List</a></li>
      <li class = "redir"><a href="homepage.php">About</a></li>
      <li class = "titlebox">GD LRR Demon List</li>
      <li>
        <button onclick="dropMenu()" class="dropbtn">Go To...</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="homepage.php">About</a>
          <a href="index.php">Main List</a>
          <a href="extended.php">Extended List</a>
          <a href="61plus.php">61hz+ Levels</a>
          <a href="leaderboard.php">Leaderboard</a>
          <a href="changelog.php">Changelog</a>
          <a href = "#" class = "btn-toggle2">Color Switch</a>
         </div>
      </li>
    </ul>
    <div id = "calc" style = "text-align:center">
      <h1>Points Calculator</h1>
      <p>Follow the instructions on the prompts to use this tool. I also made a <a href = "https://youtu.be/NkcEtpU6ppQ" target = "_blank">video</a> explaining how to use it in a little more detail. The final calculated point value is at the bottom of the page.</p>
      <script src="JS/pointcalculator.js?v=2021-02-22"></script>
      <script src="JS/dropdown.js"></script>
      <script src="JS/darkbutton.js"></script>
    </div>
  </body>
</html>