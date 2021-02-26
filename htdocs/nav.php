<ul class="nav">
    <li class="redir"><a href = "#" class = "btn-toggle">Toggle Theme</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "changelog"){echo 'active-nav-item';}?>" href="changelog.php">Changelog</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "leaderboard"){echo 'active-nav-item';}?>" href="leaderboard.php">Leaderboard</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "61plus"){echo 'active-nav-item';}?>" href="61plus.php">61hz+ Levels</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "extended"){echo 'active-nav-item';}?>" href="extended.php">Extended List</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "index"){echo 'active-nav-item';}?>" href="index.php">Main List</a></li>
    <li class="redir"><a class="nav-buttons <?php if($_SESSION['active-nav'] == "homepage"){echo 'active-nav-item';}?>" href="homepage.php">About</a></li>
    <li class="titlebox"><a href="/" class="titlebox-href">GD LRR Demon List</a></li>
    <li>
    <button onclick="dropMenu()" class="dropbtn">Go To...</button>
        <div id="myDropdown" class="dropdown-content">
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "homepage"){echo 'active-nav-item';}?>" href="homepage.php">About</a>
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "index"){echo 'active-nav-item';}?>" href="index.php">Main List</a>
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "extended"){echo 'active-nav-item';}?>" href="extended.php">Extended List</a>
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "61plus"){echo 'active-nav-item';}?>" href="61plus.php">61hz+ levels</a>
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "leaderboard"){echo 'active-nav-item';}?>" href="leaderboard.php">Leaderboard</a>
            <a class="nav-buttons <?php if($_SESSION['active-nav'] == "changelog"){echo 'active-nav-item';}?>" href="changelog.php">Changelog</a>
            <a href="#" class="btn-toggle2">Toggle Theme</a>
        </div>
    </li>
</ul>
