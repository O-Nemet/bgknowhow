<?php
require_once('functions.php');
require_once('config/db.php');
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="Keywords" content="hearthstone,battlegrounds,hs,bg,heroes,buddies,minions,strategy,json,bgjson">
    <title><?= getWebsiteTitle() ?></title>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAnHNrAFpjUgD///8A96WUAP/e1gD/vbUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIAAAAAAAACAVVhUAAAAABTMzZVYAAABjMzNRM2AAAFMxM1ExEAAAUzFlZDVWAABTMxFDMzVgAFMzMzMzM1AABTMzMzURYAAgUzMzM1YAAAIGUzMzM2AAAAAGUzMzUAAAAAAGUzNQAAAAAAAGVUAAAAAAAAAAAAAAAAAAAAAADgfwAAgB8AAIAPAAAABwAAAAcAAAADAAAAAQAAAAEAAIABAACAAwAAwAEAAPABAAD8AQAA/wEAAP/DAAD//wAA" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="//bgknowhow.com/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P1G76VLP1E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-P1G76VLP1E');
    </script>
</head>

<body style="background-color: antiquewhite">

<header class="cf">
    <div id="website_logo"><img src="<?= IMG_PATH ?>/icons/logo_battlegrounds.webp" width="80" height="80" alt="The HS Battlegrounds logo"></div>

    <div style="float: none;">

        <hgroup style="float: left;">
            <!-- TODO: fix h1-h6 css (page title should not be h1) and formatting -->
            <h1><a href="//bgknowhow.com/index.php">BG Know How</a> <span style="font-size: 14px;">beta</span></h1>
            <h3>The place to get all the Hearthstone Battlegrounds knowledge you need</h3>
        </hgroup>

        <div style="float: right;">
            <?php
            /*
            if (empty($_SESSION['user']['id']))
            {
                echo '<a id="login_link" href="?login" title="Log into your already existing account">Log in</a>';
                echo ' <span style="color: #777777;">|</span> <a href="#" title="Create a new account">Sign up</a>';
            }
            else
            {
                echo '<a href="?profile='. $_SESSION['user']['id'] .'" title="View your profile">'. $_SESSION['user']['name'] .'</a>';
                echo ' <span style="color: #777777;">|</span> <a id="logout_link" href="#" title="End your session">Log out</a>';
            }
            */
            ?>
        </div>

        <!-- <div class="cf"></div> -->

        <div id="nav_wrapper" style="float: left; width: 1430px; margin-top: -28px;">
            <nav id="menu">
                <ul class="menu-top">
                    <li class="menu-hover">
                        <a class="menu-topic" href="//bgknowhow.com/bgjson/index.php">BG JSON</a>
                    </li>
                    <li class="menu-hover">
                        <a class="menu-topic" href="#">Curves</a>
                    </li>
                    <li class="menu-hover">
                        <a class="menu-topic" href="#">Endgame Comps</a>
                        <div class="menu-container-2">
                            <div class="menu-column-1">
                                <ul>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_beasts.php">...Beasts</a></li>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_demons.php">...Demons</a></li>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_dragons.php">...Dragons</a></li>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_elementals.php">...Elementals</a></li>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_mechs.php">...Mechs</a></li>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_murlocs.php">...Murlocs</a></li>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_pirates.php">...Pirates</a></li>
                                    <li><a href="//bgknowhow.com/bgcomps/comp_quilboars.php">...Quilboars</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-hover">
                        <a class="menu-topic" href="//bgknowhow.com/bgsim/simulation_turn1.php">Simulator</a>
                        <div class="menu-container-1">
                            <div class="menu-column-1">
                                <ul>
                                    <li><a href="//bgknowhow.com/bgsim/simulation_turn1.php">...Turn-1 Minion Matrix</a></li>
                                    <li><a href="#">...Custom Board</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-hover">
                        <a class="menu-topic" href="//bgknowhow.com/bgstrategy/">Strategy</a>
                        <div class="menu-container-2">
                            <div class="menu-column-1">
                                <ul>
                                    <li><a href="//bgknowhow.com/bgstrategy/?show=heroes&mode=gfx">...Heroes</a></li>
                                    <li><a href="//bgknowhow.com/bgstrategy/?show=buddies&mode=gfx">...Buddies</a></li>
                                    <li><a href="//bgknowhow.com/bgstrategy/?show=minions&mode=gfx">...Minions</a></li>
                                    <li><a href="//bgknowhow.com/bgstrategy/?show=minions&mode=txt">...All Entities</a></li>
                                    <li><a href="#">...General strategy</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>

    </div>

</header>

<div id="content">