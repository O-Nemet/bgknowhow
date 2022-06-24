<?php
require_once('functions.php');
require_once('config/db.php');
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
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

<body class="<?= getWebsiteName(); ?>" style="background-color: antiquewhite">

<?php
//$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
//echo parse_url($url, PHP_URL_PATH)
?>

<header>
    <div id="website_logo">
        <a href="//bgknowhow.com"><img src="<?= IMG_PATH ?>icons/logo_battlegrounds_small.webp" width="80" height="80" alt="The HS Battlegrounds logo"></a>
    </div>

    <input type="checkbox" id="hamburger_input" class="burger_toggle">

    <label id="hamburger_menu" for="hamburger_input">
        <!--        <div class="hamburger_icon"></div>-->
        <nav id="sidebar_menu">
            <ul>
                <li><a class="menu-topic" href="//bgknowhow.com/introduction.php">&#9654; Introduction</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgstrategy/?show=heroes">&#9654; Hero Strategy</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgstrategy/?show=minions">&#9654; Minion Strategy</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgcomps/">&#9654; Endgame Comps</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgsim/">&#9654; Simulator</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgcurves/">&#9654; Curves</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgjson/">&#9654; BGJSON</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bglegends/">&#9654; Lobby Legends</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgexternal/">&#9654; External Resources</a></li>
                <li><a class="menu-topic" href="//bgknowhow.com/bgguides/guide_pocky.php">&#9654; Guide to Improving at BGs</a></li>
            </ul>
        </nav>
    </label>

    <div class="overlay"></div>

    <h1><a href="//bgknowhow.com">BG Know-How</a></h1>
    <h3>“Welcome to my tavern, friends. Enjoy your stay!”</h3>

    <!--        <div style="float: right;">-->
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
    <!--        </div>-->

    <!--        <div class="cf"></div>-->

    <div id="nav_wrapper">
        <nav id="menu">
            <ul class="menu-top">
                <li class="menu-hover bgjson">
                    <a class="menu-topic" href="//bgknowhow.com/bgjson/">BGJSON</a>
                </li>
                <li class="menu-hover bgcomps">
                    <a class="menu-topic" href="//bgknowhow.com/bgcomps/">Compositions</a>
                    <div class="menu-container-2">
                        <div class="menu-column-1">
                            <ul>
                                <li><a href="//bgknowhow.com/bgcomps/comp_beasts.php">...Beasts</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_demons.php">...Demons</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_dragons.php">...Dragons</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_elementals.php">...Elementals</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_mechs.php">...Mechs</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_murlocs.php">...Murlocs</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_nagas.php">...Nagas</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_pirates.php">...Pirates</a></li>
                                <li><a href="//bgknowhow.com/bgcomps/comp_quilboars.php">...Quilboars</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-hover bgcurves">
                    <a class="menu-topic" href="//bgknowhow.com/bgcurves/">Curves</a>
                </li>
                <li class="menu-hover bgexternal">
                    <a class="menu-topic" href="//bgknowhow.com/bgexternal/">External Resources</a>
                </li>
                <li class="menu-hover bgguides">
                    <a class="menu-topic" href="//bgknowhow.com/bgguides/guide_youtube.php">Guides</a>
                    <div class="menu-container-3">
                        <div class="menu-column-3">
                            <ul>
                                <li><a href="//bgknowhow.com/bgguides/guide_pocky.php">...Guide to Improving at Battlegrounds</a></li>
                                <li><a href="//bgknowhow.com/bgguides/guide_youtube.php">...Featured YouTube video guides</a></li>
                                <li><a href="//bgknowhow.com/bgguides/guide_your.php">...Your guide here</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-hover bglegends">
                    <a class="menu-topic" href="//bgknowhow.com/bglegends/">Lobby Legends</a>
                </li>
                <li class="menu-hover bgsim">
                    <a class="menu-topic" href="//bgknowhow.com/bgsim/">Simulator</a>
                    <div class="menu-container-1">
                        <div class="menu-column-1">
                            <ul>
                                <li><a href="//bgknowhow.com/bgsim/">...Turn-1 Minion Matrix</a></li>
                                <li><a href="//bgknowhow.com/bgsim/custom.php">...Custom Board</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-hover bgstrategy">
                    <a class="menu-topic" href="//bgknowhow.com/bgstrategy/">Strategy</a>
                    <div class="menu-container-2">
                        <div class="menu-column-1">
                            <ul>
                                <li><a href="//bgknowhow.com/bgstrategy/general.php">...General strategy</a></li>
                                <li><a href="//bgknowhow.com/bgstrategy/?show=heroes">...Heroes</a></li>
                                <li><a href="//bgknowhow.com/bgstrategy/?show=minions">...Minions</a></li>
                                <li><a href="//bgknowhow.com/bgstrategy/?show=buddies">...Buddies</a></li>
                                <li><a href="//bgknowhow.com/bgstrategy/?mode=txt">...All Entities</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div style="margin-left: 30px; border-bottom: 0" id="donate-button-container">
                        <div id="donate-button"></div>
                        <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                        <script>
                            PayPal.Donation.Button({
                                env: 'production',
                                hosted_button_id: 'GDSSPCJDR4HL6',
                                image: {
                                    src: 'https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif',
                                    alt: 'Donate with PayPal button',
                                    title: 'PayPal - The safer, easier way to pay online!',
                                }
                            }).render('#donate-button');
                        </script>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

</header>

<div id="content" class="cf">