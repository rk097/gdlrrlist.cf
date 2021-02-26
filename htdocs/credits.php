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
    <title>GD LRR Demon List</title>
    <link href="CSS/levelcards.css?v=2021-02-26" rel="stylesheet" type="text/css" />
    <link href="CSS/nav.css?v=2021-2-25" rel="stylesheet" type="text/css" />
    <link href="CSS/changelog.css?v=2020-10-05" rel="stylesheet" type="text/css" />
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
      <h1>Credits</h1>
      <p>Congrats! You found a hidden page! Good for you. Here I, ryan, would like to credit some people who helped with development, either directly or indirectly.</p>
      <ul>
        <li>jack L. Taught me everything I know, and built the skeleton of the new JS-ified site.</li>
        <li>stadust. A fantastic developer, and the developer of the pointercrate demon list. He made the jquery script for resizing the video thumbnails, I pretty much tweaked a couple things and then copied it. Oh and, before you start yelling at me for being a plagiarist, pointercrate is MIT licensed, and I asked him if it was ok. He said yes.</li>
        <li>Vink & Xan. Shitty list owners, who kindly gave me their code for their leaderboards, which allowed me to make the pop ups.</li>
        <li>Necolas, or whoever the guy that made <a href = "https://www.github.com/necolas/normalize.css" target = "_blank">this</a> is. This is what allowed the site to look as clean as it is today. Thanks.</li>
        <li>w3schools. Fantastic site for quick HTML and CSS tutorials.</li>
        <li>nik. He taught me about MongoDB, which either that or firebase is something I'm going to implement in the future.</li>
      </ul> 
    </div>

    <!-- scripts to include -->
    <?php
      include "scripts/collapsible-js.php";
      include "scripts/dropdown-js.php";
      include "scripts/darkbutton-js.php";
    ?>

  </body>
</html>
