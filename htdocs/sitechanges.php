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
    <link href="/CSS/levelcards.css?v=2021-02-26" rel="stylesheet" type="text/css" />
    <link href="/CSS/nav.css?v=2021-2-25" rel="stylesheet" type="text/css" />
    <link href="/CSS/changelog.css?v=2020-10-05" rel="stylesheet" type="text/css" />
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
      <h1 style = "text-align:center">Website Changelog</h1>
      <p style = "text-align:center">Here, I'll be noting down any changes to the website that take place. Since most people probably won't care, I won't add this in the directory, so it'll be a bit difficult to access.</p>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 25, 2021 (v1.1.1)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr">Some pretty major changes back-end wise, but from the viewer's perspective all that really changed is bugfixes.</p>
              <p dir="ltr">Sponsored by Hikudo and PHP</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 19, 2021 (v1.1.0)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr">Introducing Dark Theme! Sponsored by CSS, JS, and PHP. HUGE thanks to ssamosa211 who did a lot of work in designing the dark theme along with making the CSS easy for me to refine and restructure.</p>
              <p dir="ltr">Along with that, ssamosa211 also integrated the 61+hz list into the site after months of me being too busy to do it myself.</p>
              <p dir="ltr">The site is now on GitHub as well! For any of you like ssamsosa211 who want to contribute to the development of the LRR List, you now can easily do so by visiting the <a href = "https://github.com/rk097/gdlrrlist.cf" target = "_blank">GitHub Repository</a>. From now on I will be updating this rather than the repl.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">January 10, 2021 (v1.0.5)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr">Updated the rules!</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">November 4, 2020 (v1.0.4)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr">Progresses now are listed in descending order, with highest percent at the top of the list and lower percents towards the bottom.</p>
              <p dir="ltr">I made an embedded points calculator tool which should help you determine how much points you will get after you beat something. Follow the prompts to use it, but watch <a href = "https://youtu.be/NkcEtpU6ppQ">this</a> video if you need extra help using it. Access it on the <a href = "leaderboard.php">leaderboard</a> page.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 29, 2020 (v1.0.3)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr">Added a button at the bottom of the page that takes you back to the top of the page, and reorganized some files</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 6, 2020 (v1.0.2)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr" >SSL Encryption enabled, meaning https headed URLs will work now. This should also make the google search engine SEOs favor us more, so hopefully google can notice us soon because google is refusing to do so atm :(</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 5, 2020 (v1.0.1)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr" >Small bugfix update: Ax20 was causing a lot of issues for smaller screens, so now that shrinks relative to your device's resolution. Cool. Also more list mods are starting to get the hang of the new site editing system, so that's cool too.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 4, 2020 (v1.0.0)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr" >We have officially moved to this new thing! yay! Everything looks much nicer now-stuff looks modern rather than from the 1990s. And now everything is powered by JavaScript, so thats great.</p>
          </div>
        </div>
      </div>
    <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 27, 2020 (vAlpha)</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr" >Domain reserved, early features were made. At this point in time, everything was powered by C++ file generation, so it wasn't fully automatic, which is why I call this version "vAlpha". After early August,I didn't update this site at all, because I was doing all the dev work in the <a href = "https://repl.it/@ryan9328/gdlrrlistcf#index.html" target = "_blank">repl</a> after that; so this site was in Alpha stage pretty much up until it was ready for the list Mods to start working on themselves.</p>
          </div>
        </div>
    </div>
    </div>

    <!-- scripts to include -->
    <?php
      include "scripts/dropdown-js.php";
      include "scripts/dropdown-js.php";
      include "scripts/darkbutton-js.php";
    ?>

  </body>
</html>
