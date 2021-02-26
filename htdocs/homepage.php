<?php
session_start();
$_SESSION['active-nav'] = 'homepage';

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
    <meta property="og:title" content="Geometry Dash LRR Demonlist">
    <meta property="og:description" content="A demon list dedicated to low-refresh-rate (60hz, 75hz, Mobile) Geometry Dash players.">
    <meta name="author" content="ryan9328">
    <meta name="keywords" content="ryan9328,official,geometry,dash,hardest,extreme,insane,demon,list,demonlist,hardest,levels,gmd,gd,typier,game,top,level,levels,player,players,geometry dash, LRR, 60hz, 60HZ, 75hz, 75HZ, geometry dash 60hz demonlist, GD 60hz list">
    <meta name="description" content="A demon list dedicated to low-refresh-rate (60hz, 75hz, Mobile) Geometry Dash players.">
    <link href="CSS/levelcards.css?v=2021-02-26" rel="stylesheet" type="text/css" />
    <link href="CSS/nav.css?v=2021-2-25" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter|Bitter:light,bold">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
      p{
        font-weight:normal;
      }
    </style>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
  </head>
  <body class = "<?php echo $themeClass; ?>">
    
  <?php include "nav.php" ?>
    <!-- <p><a href = "leaderboard.html">Leaderboard page</a></p>
    <p><a href = "Extendedlist.html">Extended page</a></p> -->
    <div id="levels-container"> 
      <h1 style = "text-align:center">The Geometry Dash Low Refresh Rate Demon List</h1>
      <h3 style = "text-align:center">Now on its own website as opposed to a slow, limited <a target = "_blank" href = "https://sites.google.com/view/lrrdemonlist/about-the-list?authuser=0">Google Site!</a></h3>
      <h6 style = "text-align:center">Sponsored by ryan9328<sup>TM</sup></h6>
      <h6 style = "text-align:center">Interested in how this was made? Watch this:</h6>
      <iframe src = "https://www.youtube.com/embed/0VA7yWtcc9I" allowfullscreen = "true" style = "display:block;margin:0 auto"></iframe>
      <p style = "text-align:center">Since the demons on Pointercrate are starting to become unreasonable for 60/75hz/Mobile players to keep up with, here's a list of levels for said players instead! Here's how everything works.</p>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">These are the rules. They can also be found on our <a target = "_blank" href = "https://discord.gg/PCQ5V3e">Discord server.</a> Please read them.</h3>
            </div>
          </button>
          <div class = "content">
            <h2>Record Submission Rules</h2>
            <ul>
              <li>As of January 9th, 2021, we have officially adopted the Pointercrate demonlist's guidelines, which you can find <a href = "https://pointercrate.com/guidelines/" target = "_blank">here</a>. This means that your record must be acceptable on Pointercrate for it to be acceptable on this list! However, we also have some extra rules, specific to LRR:</li>
              <li><strong>Low refresh rate means your monitor is running the game at 75fps or below (including mobile)!</strong> This means that if you want to submit a record, you need to have played the level on <=75fps. This includes playing at 75fps or below on a 144hz/240hz/etc. monitor.</li>
              <li>In order to prove that you are using 75fps or below, you need to have an fps counter that is clearly visible in your recording.</li>
              <li>Despite what it says on the Pointercrate guidelines, generally records without clicks/taps (if android) will not be accepted, even if there is supporting raw footage.</li>
              <li><strong>Android mobile users are not exempt from any of these rules!</strong></li>
              <li>iOS users have their own special rules; please read them on the Pointercrate page.</li>
              <li>Please do not submit multiple records of the same record (don't submit dupes)!</li>
            </ul>
            <h2>Other List Rules</h2>
            <ul>
              <li>All levels on this list need to be rated demons.</li>
              <li>This list was made for people who want a more accessible list for lower refresh rates! However, the placements of the levels will based off of 60hz PC opinions MOSTLY.</li>
              <li>Levels that don't have a 60hz PC victor but do have a mobile victor are eligible for addition; levels that don't have a 60hz PC victor but do have a 61-75hz victor are not. This is because mobile is similar enough in difficulty to 60hz usually, while 75hz can be massively different (especially for ship and wave based levels).</li>
              <li>If there is not a verification video for a certain level, the first LRR victor's video will be displayed for that level.</li>
              <li>If (like the case of Down Bass) there is no verification video and there is no LRR victor either then a random victor’s video will be shown instead.</li>
              <li>Verifiers who verified the levels on 60-75hz/mobile will be counted as victors.</li>
              <li>Any player who has previously beaten something on a low refresh rate or a mobile device will have their records counted for when they were using that refresh rate.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsibleBig">
            <div class = "title">
              <h1 class = "date">Contact/Follow us!</h1>
            </div>
          </button>
          <div class = "content">
            <h2>Reach out to the team!</h2>
            <p>Once again, the easiest place to reach us is our <a target = "_blank" href = "https://discord.gg/PCQ5V3e">Discord server.</a> There will always be staff members active at most hours of the day, so you can rest assured that your question or concern will get answered! The community there's pretty chill too, so, why not pop in?</p>
            <p>Speaking of staff, here's the Staff list if you want to reach someone in particular or are just curious:</p>
            <ul>
              <li><h4>List Owners:</h4></li>
              <ul>
                <li>TyPier</li>
                <li>jaynt456</li>
                <li>ryan9328</li>
              </ul>
              <li><h4>List Moderators:</h4></li>
              <ul>
                <li>blankz</li>
                <li>DaMathMan</li>
                <li>Edant</li>
                <li>FrostBurn</li>
                <li>Ikarya</li>
                <li>SubZeroV</li>
              </ul>
              <li><h4>List Helpers:</h4></li>
              <ul>
                <li>Coopersuper</li>
                <li>Gzeee</li>
                <li>JudeRB</li>
                <li>Liizoks</li>
                <li>owoZ1rc0n</li>
                <li>Thonyell</li>
                <li>ViperVenom95</li>
              </ul>
              <li><h4>Server Admins:</h4></li>
              <ul>
                <li>DarkGamma</li>
                <li>Moutaa</li>
              </ul>
              <li><h4>Server Staff:</h4></li>
              <ul>
                <li>notSilva</li>
                <li>Lavaclaw</li>
                <li>Inga8</li>
              </ul>
            </ul>
            <h2>Follow the team! and other links</h2>
            <p>Almost every member of the team has a YouTube channel. All of them are featured channels on the LRR List's official <a href = "https://www.youtube.com/channel/UCI4HMETnm1F3-L-wpCVP_qw/videos?view_as=subscriber" target = "_blank">Youtube channel!</a></p>
            <p>Some of the members have socials, others do not. Team members will have their social media links linked to their discord accounts if they have any, so that's the place to find where to follow them.</p>
            <p>Record submission form: <a href = "https://docs.google.com/forms/d/e/1FAIpQLSfpZDIHi6G47Es11l_DggbmoXHaJIGfFZQd-vbpq8tr1hEoQA/viewform" target = "_blank">https://docs.google.com/forms/d/e/1FAIpQLSfpZDIHi6G47Es11l_DggbmoXHaJIGfFZQd-vbpq8tr1hEoQA/viewform</a></p>
            <p>LRR Knowledgebase: <a href = "https://docs.google.com/document/d/1HLgXGqfm7FPKPoVIOwg7o3N8efB7lZfR1hNhOKWR68M/edit?usp=sharing" target = "_blank">https://docs.google.com/document/d/1HLgXGqfm7FPKPoVIOwg7o3N8efB7lZfR1hNhOKWR68M/edit?usp=sharing</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class = "column">
        <div class = "card">
          <button class = "collapsibleBig">
            <div class = "title">
              <h1 class = "date">"Help...</h1>
            </div>
          </button>
          <div class = "content">
            <p>With what?</p>
            <ul>
              <li>... me calculate how many points I will have after I beat/progress on something!" Watch <a href = "https://youtu.be/NkcEtpU6ppQ" target = "_blank">this</a> video.</li>
              <li>... I need to ask you something!" Contact me (6666#9328) on discord.</li>
              <li>... I don't understand what this symbol means!" Check out the <a href = "https://docs.google.com/document/d/1HLgXGqfm7FPKPoVIOwg7o3N8efB7lZfR1hNhOKWR68M/edit?usp=sharing" target = "_blank">knowledgebase.</a></li>
              <li>... what's the leaderboard equation?" Check out the knowledgebase.</li>
              <li>... me beat a level!" Here, I give you my blessings :)</li>
              <li>... its not listed here." Check the knowledgebase or contact me on discord.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class = "column">
        <div class = "card">
          <button class = "collapsibleBig">
            <div class = "title">
              <h1 class = "date">Special Thanks</h1>
            </div>
          </button>
          <div class = "content">
            <p>This section was something that was completely missing on the old site - a section thanking all of the people that made this project possible, of which there are many.</p>
            <p>Let's begin with the people who helped Ty and jaynt make the original list itself:</p>
            <ul>
              <li>Luqualizer</li>
              <li>Zest</li>
              <li>Exyl</li>
              <li>GDonut</li>
              <li>synactive</li>
              <li>th31</li>
              <li>LuigiDB</li>
              <li>ThunderBT</li>
              <li>Kneevan</li>
              <li>Hilo</li>
              <li>Shulk-</li>
              <li>Indigo</li>
              <li>Stormfly</li>
              <li>KrmaL</li>
              <li>Hawkyre</li>
            </ul>
            <p>All of the people listed here were/are skilled LRR players at one point or another, and all of them contributed greatly to making the list as accurate as possible. (Of course, that doesn't mean there isn't room for improvement in terms of rankings, which we'll get to in a second). A big thank you to them for being significant early contributors!</p>
            <p>We would also like to thank Samiversal, for being a former longtime co-owner but who has since left the team, and Sley for building the LRR community server.</p>
            <p>Moving into the present: we tried to make the list as accurate as possible, but of course we messed up in places (Esencia used to be above A Bizarre Phantasm, as one example). Like we mentioned before, the list always has room for improvement and greater accuracy somewhere, so now its time to thank those who help us make the list more accurate into the present:</p>
            <ul>
              <li>ThunderBT</li>
              <li>Luqualizer</li>
              <li>Samamba</li>
              <li>Bread</li>
              <li>GDonut</li>
              <li>Exyl</li>
              <li>Hilo</li>
              <li>ItoPopcorn</li>
              <li>Coopersuper</li>
            </ul>
            <p>And finally, a very special thank you to jack L, Vink, stadust, NiknotNoob, ssamosa211, and Hikudo who all helped me with the site itself. I especially want to thank jack L, who taught me all the javascript and json-related things that I know now which I used to build the backend for the site that you are seeing today. Oh and of course W3Schools, because that website makes learning HTML and CSS much quicker.</p>
            <h4 style = "text-align:center">Once again, this list would not have been possible without all of the people mentioned above, so we sincerely thank you guys for your support.</h4>
            <p style = "text-align:right">-ryan9328</p>
          </div>
        </div>
      </div>
    </div>

    <!-- scripts to include -->
    <?php
      include "scripts/collapsible-js.php";
      include "scripts/collapsiblebig-js.php";
      include "scripts/dropdown-js.php";
      include "scripts/videoresize-js.php";
      include "scripts/darkbutton-js.php";
    ?>


  </body>
</html>
