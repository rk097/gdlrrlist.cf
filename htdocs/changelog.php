<?php
session_start();
$_SESSION['active-nav'] = 'changelog';

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
        <h1 style = "text-align:center">Changelog</h1>
        <p style = "text-align:center">Every change that this list has ever experienced (after the creation of the Google Site), sorted by most recent at the top and least recent towards the bottom.</p>
        <p style = "text-align:center">Looking for the <a href = "sitechanges.php" target = "_blank">website changelog?</a></p>
      <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">February 24, 2021 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                    <p dir="ltr"><strong>Aronia</strong> has been placed at #1, above <strong>Erebus</strong> with a list requirement of 61%. This pushes <i>Allegiance</i> onto the Extended List and knocks down Erebus from the #1 spot after 8 months! Congrats Lavaclaw!</p>
                   <p dir="ltr">Following a nerfdate, <strong>Just Dance</strong> has been lowered from #45 to #47, above <strong>Atmosphere</strong> and below <strong>ATMarbl</strong>.</p>
                    <p dir="ltr"><strong>Tempest Tornado</strong> has been placed at #42, above <strong>Prismatic Haze</strong> and below <strong>Fusion Z</strong> with a list requirement of 66%. This pushes <i>Deception Dive</i> onto the Extended List.</p>
                    <p dir="ltr"><i>Precipitance</i> has been placed at #118, above <i>Falling Up</i> and below <i>ICE Carbon Diablo X</i>.</p>
                </div>
            </div>
        </div>
      <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">February 5, 2021 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr">Following a nerfdate, <strong>Killbot</strong> has been lowered to #14, above <strong>distraught</strong> and below <strong>Carnage Mode</strong>.</p>
                   <p dir="ltr"><strong>Factory Realm X</strong> has been raised to #13, above <strong>Killbot</strong> and below <strong>Freedom08</strong>.</p>
                    <p dir="ltr"><strong>Carnage Mode</strong> has been raised to #9, above <strong>Bloodbath</strong> and below <strong>Celestial Force</strong>.</p>
                    <p dir="ltr"><i>MELTDOWN</i> has been placed at #117, above <i>AcropoliX</i> and below <i>Falling Up</i>.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">February 3, 2021 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><i>Misty Mountains</i> has been moved from #145 to #129, above <i>Grimoire Heart</i> and below <i>Doop</i>.</p>
                   <p dir="ltr"><i>TANTRUM</i> has been placed at #112, above <i>Retention</i> and below <i>Night Life</i>.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">January 31, 2021 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><i>Reverie</i> has been placed at #120, above <i>Thanatophobia</i> and below <i>SUBVERSIVE</i>.</p>
                   <p dir="ltr"><i>Diligence</i> has been placed at #127, above <i>Doop</i> and below <i>Polish Alphabet</i>.</p>
                   <p dir="ltr"><i>Faith</i> has been placed at #137, above <i>Electrosonic</i> and below <i>Hypersonic</i>.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">January 28, 2021 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><strong>kowareta</strong> has been placed at #2, above <strong>Plasma Pulse Finale</strong> and below <strong>Erebus</strong>. This pushes <i>8o X</i> onto the Extended List.</p>
                   <p dir="ltr"><strong>Want Me</strong> has been placed at #44, above <strong>ATMarbl</strong> and below <strong>Just Dance</strong>. This pushes <i>HURRICANE</i> onto the Extended List.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">January 22, 2021 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><strong>Frightful Melody</strong> has been placed at #85, above <strong>Heartbeat</strong> and below <strong>Fingerdash v3</strong>. This pushes <i>Alcatraz</i> onto the Extended List.</p>
                    <p dir="ltr"><i>Virtual Collapse</i> has been placed at #116, above <i>SUBVERSIVE</i> and below <i>Napalm</i>.</i></p>
                    <p dir="ltr">Want Me was not placed this update because of a lack of a list percentage.</p>
                </div>
            </div>
        </div>
                <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">December 22, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><strong>INNARDS</strong> has been placed at #32, above <strong>Artificial Ideology</strong> and below <strong>MadMansion</strong> with a list requirement of 69%.</p>
                   <p dir="ltr"><strong>Super Probably Level</strong> has been lowered to #22, under <strong>Phobos</strong> and above <strong>Silentium Gradas</strong>.</p>
                   <p dir="ltr"><strong>The Flawless</strong> has been raised to #57, above <strong>Plasma Pulse III</strong> and below <strong>Breakout</strong>.</p>
                   <p dir="ltr"><i>SUBVERSIVE</i> has been raised to #115, above <i>Incipient</i> and below <i>Napalm</strong>.</i>
                   <p dir="ltr"><i>Thanatophobia</i> has been lowered to #116, above <i>Incipient</i> and below <i>SUBVERSIVE</strong>.</i>

                   
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">December 14, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><strong>Athanatos</strong> has been placed at #6, above <strong>Celestial Force</strong> and below <strong>Artificial Ascent</strong> with a list requirement of 63%.</p>
                   <p dir="ltr"><strong>Red World Rebirth</strong> has been swapped with <strong>Belloq</strong> and now sits below it at #26, above <strong>Aftermath</strong>.</p>
                   <p dir="ltr"><strong>Just Dance</strong> has been placed at #41, above <strong>ATMarbl</strong> and below <strong>Inflective</strong> with a list requirement of 63%.</p>
                   <p dir="ltr"><i>Napalm</i> has been placed at #114, above <i>Incipient</i> and below <i>AcropoliX</strong>.</i>
                   <p dir="ltr"><strong>Artificial Ideology</strong>'s list requirement has been raised from 43% to 57%.</p>
                   <p dir="ltr">These changes push <i>Artificial Dream</i>, and <i>Penombre</i> onto the Extended List.</p>

                   
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">December 2, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><strong>Glacial Torrent</strong> has been placed at #49, above <strong>Idols</strong> and below <strong>Azure Fiesta</strong> with a list requirement of 58%.</p>
                   <p dir="ltr"><strong>Reverence</strong> has been placed at #57, above <strong>Novalis</strong> and below <strong>Penultimate Phase</strong>. Note that this placement is subject to change due to the lack of opinions right now so expect it being moved up or down in the future.</p>
                   <p dir="ltr"><strong>Zenith</strong> has been placed at #76, above <strong>Elliptic Curve</strong> and below <strong>Violently X</strong>. Note that this placement is subject to change due to the lack of opinions right now so expect it being moved up or down in the future.</p>
                   <p dir="ltr"><i>Mirage</i> has been placed at #101, above <i>A2Marbl</i> and below <strong>Artificial Dream</strong>. Note that this placement is subject to change due to the lack of opinions right now so expect it being moved up or down in the future.</p>
                   <p dir="ltr">These changes push <i>CYCLONE</i>, <i>FinKor</i>, and <i>A2Marbl</i> onto the Extended List.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">November 25, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><i>Night Life</i> has been placed at #102, above <i>Retention</i> and below <i>Frizzantino Vibes</i>.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">November 24, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><strong>Thanatophobia</strong> has been placed at #94, above <strong>Alcatraz</strong> and below <strong>8o X</strong>. This pushes <i>Frizzantino Vibes</i> onto the Extended List.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">November 1, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                   <p dir="ltr"><strong>Inflective</strong> has been placed at #39, above <strong>ATMarbl</strong> and below <strong>Prismatic Haze</strong>. This pushes <i>Retention</i> onto the Extended List.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">October 18, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                    <p dir="ltr"><strong>Azure Fiesta</strong> has been raised from #53 to #46, above <strong>Idols</strong> and below <strong>Concaved Memories</strong> with a list requirement of 55%.</p>
                    <p dir="ltr"><strong>FinKor</strong> has been placed at #97, above <strong>CYCLONE</strong> and below <strong>A2Marbl</strong>. This pushes <i>Awakening Horus</i> onto the Extended List.</p>
                    <p dir="ltr"><i>Master Duel</i> has been placed at #116, above <i>Underground</i> and below <i>Duelo Maestro</i>.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">October 13, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                    <p dir="ltr"><strong>Elliptic Curve</strong> has been placed at #73, above <strong>Pumped Up Kicks</strong> and below <strong>Violently X</strong>. This pushes <i>Ice Carbon Diablo X</i> onto the Extended List.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">October 12, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                    <p dir="ltr"><strong>HURRICANE</strong> has been raised from #96 to #91, above <strong>8o X</strong> and below <strong>Allegiance</strong>.</p>
                    <p dir="ltr"><i>Misty Mountains</i> has been placed at #123, above <i>Excessive Compliment</i> and below <i>Quest for Perfection</i>.</p>
                </div>
            </div>
        </div>
        <div class = "column">
            <div class = "card">
            <button class = "collapsible">
                <div class = "title">
                    <h3 class = "date">October 8, 2020 Changes:</h3>
                </div>
            </button>
                <div class = "content">
                    <p dir="ltr"><strong>Sysmique Locked</strong> has been placed at #83, above <strong>Uprise</strong> and below <strong>Grill Kill</strong>. This pushes <i>Falling Up</i> onto the Extended List.</p>
                </div>
            </div>
      </div>
        <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 7, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Mandragora</strong> has been placed at #81, above <strong>Grill Kill</strong> and below <strong>CholeriX</strong>. <strong>Aftermath</strong> has been moved one spot up due to miscommunication from the last changelog placement. The previous changelog has been updated to the current placement. This pushes <i>Acropolix</i> onto the Extended List.</p>
          </div>
        </div>
      </div>
        <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 6, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Aftermath</strong> has been lowered from #22 to #26, above <strong>Epsilon</strong> and below <strong>Belloq</strong>.</p>
          </div>
        </div>
      </div>
        <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 5, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Disentombed</strong> has been placed at #24, above <strong>Red World Rebirth</strong> and below <strong>Silentium Gradas</strong> with a list requirement of 60%. The 75hz only victored levels, <i>Asmodeus</i> and <i>Bang Gang</i>, have been temporarily removed from the list. They will be soon added to a listing of 75hz only victored levels on a separate page. This brings <strong>AcropoliX</strong> back onto the main list at #100.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">October 4, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Sunset Sandstorm</strong> has been placed at #4, above <strong>Artificial Ascent</strong> and below <strong>Digital Descent</strong> with a list requirement of 32%. This pushes <i>Acropolix</i> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">August 11, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Aftermath</strong> and <strong>Phobos</strong> have been swapped, with <strong>Phobos</strong> above at #21.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">August 5, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>ElectroLux</strong> was placed at #50, above <strong>Plasma Pulse III</strong> and below <strong>Breakout</strong>. This pushes Plasma Pulse III onto the Bottom 50 and <i>Incipient</i> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 23, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Prismatic Haze</strong> was placed at #37, above <strong>ATMarbl</strong> and below <strong>Fusion Z</strong>. This pushes Twisted Tranquility onto the Bottom 50 and <i>Acu</i> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 19, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Asmodeus</strong> was placed at #20, above <strong>Aftermath</strong> and below <strong>Hatred</strong>. This pushes Novalis onto the Bottom 50 and <i>Zettabyte</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Artifice</strong> was placed at #35, above <strong>Fusion Z</strong> and below <strong>Cadrega Mode</strong>. This pushes Penultimate Phase onto the Bottom 50 and <i>Grimoire Heart</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Breakout</strong> was placed at #48, above <strong>Plasma Pulse III</strong> and below <strong>WaveBreaker</strong>. This pushes Azure Fiesta onto the Bottom 50 and <i>Doop</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Maybe Possibly Thing</strong> was placed at #62, above Marathon and below Niflheim. This pushes <i>Polish Alphabet</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Our Fountain</strong> was placed at #73, above Fingerdash v3 and below Tech Manifestation. This pushes <i>SUBVERSIVE</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Fingerdash v3</strong> was placed at #65, above Heartbeat and below Tech Manifestation. This pushes <i>Cosmorush 21</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Grill Kill</strong> was placed at #79, above Uprise and below CholeriX. This pushes <i>Sky Tech</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Raindance</strong> was placed at #81 above UltraSans and below Uprise. This pushes <i>Matilda the Machine</i> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 14, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Erebus</strong> was placed at #1, above <strong>Plasma Pulse Finale</strong>. This pushes Skrrah onto the extended list and <i>Night Party</i> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 13, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Super Probably Level</strong> has been raised from #27 to #17, above <strong>Hatred</strong> and below <strong>Black Blizzard</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 12, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Skrrah</strong> was placed at #49, above <strong>The Hell Dignity</strong> and below <strong>Novalis</strong>. This pushes  This pushes Panasonic onto the Bottom 50 and <i>Underground</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Void Wave</strong> was placed at #30, above <strong>A Bizarre Phantasm</strong> and below <strong>Betrayal of Fate</strong>. This pushes The Hell Dignity onto the Bottom 50 and <i>Duelo Maestro</i> onto the Extended List.</p>
            <p dir="ltr">A2Marbl has been raised from #88 to #82, above HURRICANE and below Artificial Dream.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 11, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Alcatraz</strong> was placed at #70, above Cataclysm and below UltraSans. This pushes <i>Electrosonic</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Azure Fiesta</strong> was placed at #45, above <strong>Esencia</strong> and below <strong>Twisted Tranquility</strong>. This pushes Fexty onto the Bottom 50 and <i>HyperSonic</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Esencia</strong> was moved down from #46 to #57, above Unearthed and below Audio Extraction.</p>
            <p dir="ltr"><strong>Fingerdash v3</strong> was placed at #65, above Heartbeat and below Tech Manifestation. This pushes <i>Cosmorush 21</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Atmosphere</strong> was placed at #34, above <strong>The Hell Zone</strong> and below <strong>ATMarbl</strong>. This pushes Fexty onto the Bottom 50 (again because of Esencia) and <i>Thunder Alphabet</i> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 10, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Annihilation Nation</strong> was placed at #15, above <strong>Black Blizzard</strong> and below <strong>The Hell Field</strong>. This pushes Triple Six onto the Bottom 50, and <i>Cosmic Calamity</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Belloq</strong> was placed at #22, above <strong>Epsilon</strong> and below <strong>Silentium Gradas</strong>. This pushes Digital Disarray onto the Bottom 50, and <i>AAAAAAAAAAAAAAAAAAAA</i> onto the Extended List.</p>
            <p dir="ltr"><strong>Bang Gang</strong> was placed at #36, above <strong>Conical Depression</strong> and below <strong>Aurora</strong>. This pushes The Flawless onto the Bottom 50, and <i>Gammaray </i> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 8, 2020 Changes: RULE CHANGE!</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr">This list is now going back to adding levels to the list with only non-60hz PC victors! But there is still a change, the placement of the level will be based off of the only LRR victor, but it will be changed according to a 60hz PC victor if one beats it in due time. If a level is beaten on a non-60hz PC victor, it won't be placed until a month after it has been beaten, to wait for a 60hz PC victor. After that month we will place it based off of the non-60hz PC victor. This means a lot of levels will be added to the list soon!</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">July 4, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Thunder Alphabet</strong> was placed at #94, below <strong>Underground</strong> and above <strong>Cosmorush 21</strong>. This pushes <strong>Quest for Perfection</strong> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">June 30, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Artificial Ideology</strong> has been raised from #28 to #26, below <strong>Super Probably Level</strong> and above <strong>Betrayal of Fate</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">June 23, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Cataclysm</strong> and <strong>Deception Dive</strong> have been swapped, with <strong>Cataclysm</strong> being above at #67.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">June 22, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Doop</strong> has been raised from #93 to #88, below <strong>Polish Alphabet</strong> and above <strong>Grimoire Heart</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">June 21, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Plasma Pulse Finale</strong> was placed at #1, above <strong>Digital Descent</strong>. This pushes <strong>Niflheim</strong> onto the <i>Bottom 50</i>, and <strong>Excessive Compliment</strong> onto the <i>Extended List</i>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">June 12, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Red World Rebirth</strong> was lowered from #12 to #19, below <strong>Silentium Gradas</strong> and above <strong>Epsilon</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">June 11, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Cataclysm</strong> has been raised from #70 to #67, below <strong>Deception Dive</strong> and above <strong>Allegiance</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">June 1, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>The Ultimate Phase</strong> was removed from the list due to the update being harder than the original level. This brings <strong>Excessive Compliment</strong> back onto the Bottom 50 (again lol).</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">May 28, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Frizzantino Vibes</strong> has been raised from #93 to #74, above <strong>Retention</strong> and below <strong>CYCLONE</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">May 27, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Acu</strong> was placed at #81, under <strong>Incipient</strong> and above <strong>Matilda the Machine</strong>. This pushes <strong>Excessive Compliment</strong> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">May 18, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>The Ultimate Phase</strong> has been raised from #98 to #95, above <strong>Gammaray</strong> and below <strong>Electrosonic</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">May 3, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>HURRICANE</strong> has been placed at #72 below <strong>Artificial Dream</strong> and above <strong>CYCLONE</strong>. This pushes <strong>Photovoltaic</strong> onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">April 26, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Plasma Pulse III</strong> has been raised from #41 to #39 below <strong>WaveBreaker</strong> and above <strong>Twisted Tranquility</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">April 22, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr"><strong>Allegiance</strong> has been raised from #83 to #67, below <strong>Deception Dive</strong> and above <strong>8o X</strong>.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">April 7, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr">Concaved Memories has been placed at #35 between The Hell Factory and Idols. This pushes Marathon out of the top 50 and Final Epilogue onto the Extended List.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">April 4, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr">Cataclysm and Artificial Dream have been swapped, with Cataclysm above at #68.</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">March 19, 2020 Changes: RULE CHANGE!</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>RULE CHANGE!</strong></span></p>    
            <p dir="ltr" >Every level on the list must now have a 60hz PC victor or below to add them to the list! This is due to making the opinions based on one refresh rate. Mobile players and 61-75hz players can still have records added to the list, this will cause 8 levels to be removed from the list as they do not have 60hz pc victors.</p> 
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level removals:</strong></span></p>  
            <ul style="list-style-type:square">
              <li>#17 - Annihilation Nation</li>
              <li>#21 - Belloq</li>
              <li>#35 - Atmosphere</li>
              <li>#41 - Concaved Memories</li>
              <li>#50 - Bang Gang</li>
              <li>#52 - Skrrah</li>
              <li>#63 - Raindance</li>
              <li>#99 - Master Duel</li>
            </ul>
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Spot Changes!</strong></span></p>
            <p dir="ltr">The Flawless was lowered from #26 down to #46</p>
            <p dir="ltr">Aurora was raised from #38 to #32 between The Hell Zone and Conical Depression</p>
            <p dir="ltr">WaveBreaker was raised from #51 to #37 between Elite Z Rebirth and Twisted Tranquility</p>
            <p dir="ltr">Cataclysm was lowered from #45 to #69 between Artificial Dream and Cyclone</p>
            <p dir="ltr">UltraSans was raised from #74 to #64 between Uprise and Deception Dive</p>
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Additions!</strong></span></p>
            <p dir="ltr" >Violently X was placed at #56 between Glide and Pumped up Kicks</p>
            <p dir="ltr" >A2Marbl was placed at #74 between Ice Carbon Diablo X and Falling Up</p>
            <p dir="ltr" >These changes bring Cosmic Calamity, The Ultimate Phase, Quest for Perfection, Excessive Compliment, Photovoltaic, and Final Epilogue back from the Extended List onto the Bottom 50</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 17, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Spot Changes!</strong></span></p>
            <p dir="ltr" >Elite Z Rebirth was raised to #40 between Idols and Concaved Memories</p> 
            <p dir="ltr">Cataclysm was raised to #45 between Plasma Pulse III and Penultimate Phase</p>
            <p dir="ltr">The Hell Dignity was lowered to #48 between Novalis and PanaSonic</p>
            <p dir="ltr">Glide and Heat Wave have been swapped, with Heat Wave above at #61</p>
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Additions!</strong></span></p>
            <p dir="ltr" >The Antimatter was placed at #60 between Unearthed and Heat Wave</p>
            <p dir="ltr" >These changes push Wavebreaker out of the top 50 and Cosmic Calamity out of the Top 100</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 6, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Spot Changes!</strong></span></p>
            <p dir="ltr" >Concaved Memories raised to #41 between The Hell Dignity and Twisted Tranquility</p> 
            <p dir="ltr">Plasma Pulse III was raised to #44 between Esencia and Novalis</p>
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Additions!</strong></span></p>
            <p dir="ltr" >Penultimate Phase was placed at #45 between Plasma Pulse III and Novalis</p>
            <p dir="ltr" >These changes push Digital Disarray and Fexty out of the top 50 and The Ultimate Phase out of the Top 100</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 5, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Spot Changes!</strong></span></p>
            <p dir="ltr" >distraught and Blade of Justice have been swapped, with distraught above at #9</p> 
            <p dir="ltr">Audio Expulsion and The Hell Field have been swapped, with Audio Expulsion above at #13</p>
            <p dir="ltr" >Retention has been lowered from #70 to #75, between CYCLONE and Awakening Horus</p>
            <p dir="ltr" >Esencia has been raised to #42 between Twisted Tranquility and Novalis</p>
            <p dir="ltr" >These changes push Quest For Perfection off the list</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 4, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Additions!</strong></span></p>
            <p dir="ltr">Added Artificial Ideology at #31 between A Bizarre Phantasm and Cadrega Mode</p>
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Spot Changes!</strong></span></p>
            <p dir="ltr" >Audio Expulsion has been raised to #14 between The Hell Field and Black Blizzard </p> 
            <p dir="ltr">Twisted Tranquility has been raised to #41 between The Hell Dignity and Esencia</p>
            <p dir="ltr" >Triple Six has been lowered to #51 between Digital Disarray and Niflheim</p>
            <p dir="ltr" >Esencia has been raised to #42 between Twisted Tranquility and Novalis</p>
            <p dir="ltr" >These changes push Quest For Perfection off the list</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 3, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
            <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Spot Changes!</strong></span></p>
            <p dir="ltr" >Esencia has been lowered to #50, between Twisted Tranquility and Niflheim</p>
            <p dir="ltr" >AAAAAAAAAAAAAAAAAAAA has been raised one spot up to #97 between Master Duel and Cosmic Calamity</p>
          </div>
        </div>
      </div>
      <div class = "column">
        <div class = "card">
          <button class = "collapsible">
            <div class = "title">
              <h3 class = "date">February 2, 2020 Changes:</h3>
            </div>
          </button>
          <div class = "content">
              <p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Additions!</strong></span></p><p dir="ltr" >Added Factory Realm X at #10 between distraught and Red World Rebirth</p><p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Spot Changes!</strong></span></p><p dir="ltr" >The Flawless was lowered to #25 between The Hell Origin and MadMansion</p><p dir="ltr" >AAAAAAAAAAAAAAAAAAAA has been raised to #97 between Cosmic Calamity and The Ultimate Phase</p><p dir="ltr" >These changes push Photvoltaic off the list</p><p dir="ltr" >_______________________________________________________________________________________________________</p><p dir="ltr" ><span style="font-family: Bitter;"><strong>Level Additions!</strong></span></p><p dir="ltr" >Added Killbot at #4 between Celestial Force and Bloodbath</p><p dir="ltr" >This change pushes Excessive Compliment off the list</p>
          </div>
        </div>
      </div>
    </div>

    <!-- scripts to include -->
    <?php
      include "scripts/collapsible-js.php";
      include "scripts/dropdown-js.php";
      include "scripts/darkbutton-js.php";
    ?>

  </body>
</html>
