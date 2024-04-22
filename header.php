<?php
require_once('config/db.php');
require_once('config/api_blizzard.php');

require_once('functions.php');
require_once('session.php');

$lastURL = isset($_SERVER['HTTP_REFERER']) ?? null;
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="Keywords" content="bgknowhow,hearthstone,battlegrounds,hs,bg,hsbg,heroes,minions,buddies,strategy,json,bgjson">
    <title><?= getWebsiteTitle() ?></title>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAnHNrAFpjUgD///8A96WUAP/e1gD/vbUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIAAAAAAAACAVVhUAAAAABTMzZVYAAABjMzNRM2AAAFMxM1ExEAAAUzFlZDVWAABTMxFDMzVgAFMzMzMzM1AABTMzMzURYAAgUzMzM1YAAAIGUzMzM2AAAAAGUzMzUAAAAAAGUzNQAAAAAAAGVUAAAAAAAAAAAAAAAAAAAAAADgfwAAgB8AAIAPAAAABwAAAAcAAAADAAAAAQAAAAEAAIABAACAAwAAwAEAAPABAAD8AQAA/wEAAP/DAAD//wAA" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/styles/style.css">

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
    <script src="/functions.js" type="text/javascript"></script>
    <script src="/miniontooltip.js" type="text/javascript"></script>
</head>

<body class="<?= getWebsiteName(); ?>" style="background-color: antiquewhite">

<?php
//$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
//echo parse_url($url, PHP_URL_PATH)
?>

<header>
    <div id="website_logo">
        <a href="/"><img src="<?= IMG_PATH ?>icons/logo_battlegrounds_small.webp" width="80" height="80" alt="The HS Battlegrounds logo"></a>
    </div>

    <input type="checkbox" id="hamburger_input" class="burger_toggle">

    <label id="hamburger_menu" for="hamburger_input">
        <!--        <div class="hamburger_icon"></div>-->
        <nav id="sidebar_menu">
            <ul>
                <li><a class="menu-topic" href="/introduction.php">&#9654; Introduction</a></li>
                <li><a class="menu-topic" href="/bgnews/">&#9654; News</a></li>
                <li><a class="menu-topic" href="/bgbasics/">&#9654; Basics</a></li>
                <li><a class="menu-topic" href="/bgstrategy/general.php">&#9654; General Strategy</a></li>
                <li><a class="menu-topic" href="/bgstrategy/?show=heroes">&#9654; Hero Strategy</a></li>
                <li><a class="menu-topic" href="/bgstrategy/?show=minions">&#9654; Minion Strategy</a></li>
                <li><a class="menu-topic" href="/bgstrategy/?show=spells">&#9654; Spell Strategy</a></li>
                <li><a class="menu-topic" href="/bgcomps/">&#9654; Compositions</a></li>
                <li><a class="menu-topic" href="/bgbasics/armor.php">&#9654; Hero Armor</a></li>
                <li><a class="menu-topic" href="/bgcurves/">&#9654; Curves</a></li>
                <!--                <li><a class="menu-topic" href="/bgsim/?be=1&de=1&dr=1&el=1&me=1&mu=1&na=1&pi=1&qu=1&ud=1">&#9654; Simulator</a></li>-->
                <li><a class="menu-topic" href="/bglegends/">&#9654; Tournaments</a></li>
                <li><a class="menu-topic" href="/bgexternal/">&#9654; Resources</a></li>
                <!--                <li><a class="menu-topic" href="/bgguides/pocky.php">&#9654; Guide to Improving at BGs</a></li>-->
                <!--                <li><a class="menu-topic" href="/bgguides/youtube.php">&#9654; Featured YouTube guides</a></li>-->
                <li><a class="menu-topic" href="/bgjson/">&#9654; BGJSON</a></li>
                <?php
                //                if (!isset($_SESSION['usertag'])) {
                //                    echo '<li><a class="menu-topic" href="/login.php"><i class="bi bi-box-arrow-in-right"></i> &nbsp;Log in via BNet</a></li>';
                //                } else {
                //                    echo '<li><a class="menu-topic" href="/logout.php"><i class="bi bi-box-arrow-right"></i> &nbsp;Log out</a></li>';
                //                }
                ?>
            </ul>
        </nav>
    </label>

    <div class="overlay"></div>

    <h1><a href="/">BG Know-How</a></h1>
    <?php
    $name = isset($_SESSION['usertag']) ? strstr($_SESSION['usertag'], '#', true) : 'friends';
    echo "<h3>“Welcome to my tavern, $name. Enjoy your stay!”</h3>";
    ?>

    <div style="float: right;">
        <?php
        //        if (empty($_SESSION['user']['id'])) {
        //            echo '<a id="login_link" href="?login.php" title="Log in via your existing BattleNet account">Log in</a>';
        //        } else {
        //            echo '<a id="logout_link" href="?logout.php" title="End your session">Log out</a>';
        //        }
        ?>
    </div>

    <!--        <div class="cf"></div>-->

    <div id="nav_wrapper">
        <nav id="menu">
            <ul class="menu-top">
                <li class="menu-hover bgnews">
                    <a class="menu-topic" href="/bgnews/">News</a>
                </li>
                <li class="menu-hover bgjson">
                    <a class="menu-topic" href="/bgjson/">BGJSON</a>
                </li>
                <li class="menu-hover bgcomps">
                    <a class="menu-topic" href="/bgcomps/">Compositions</a>
                    <div class="menu-container-2">
                        <div class="menu-column-1">
                            <ul>
                                <li><a href="/bgcomps/comp_beasts.php">...Beasts</a></li>
                                <li><a href="/bgcomps/comp_demons.php">...Demons</a></li>
                                <li><a href="/bgcomps/comp_dragons.php">...Dragons</a></li>
                                <li><a href="/bgcomps/comp_elementals.php">...Elementals</a></li>
                                <li><a href="/bgcomps/comp_mechs.php">...Mechs</a></li>
                                <li><a href="/bgcomps/comp_murlocs.php">...Murlocs</a></li>
                                <li><a href="/bgcomps/comp_nagas.php">...Nagas</a></li>
                                <li><a href="/bgcomps/comp_pirates.php">...Pirates</a></li>
                                <li><a href="/bgcomps/comp_quilboars.php">...Quilboars</a></li>
                                <li><a href="/bgcomps/comp_undeads.php">...Undeads</a></li>
                                <li><a href="/bgcomps/comp_neutrals.php">...Neutrals</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-hover bgcurves">
                    <a class="menu-topic" href="/bgcurves/">Curves</a>
                </li>
                <li class="menu-hover bgexternal">
                    <a class="menu-topic" href="/bgexternal/">Resources</a>
                </li>
                <li class="menu-hover bgguides">
                    <a class="menu-topic" href="/bgguides/youtube.php">Guides</a>
                    <div class="menu-container-3">
                        <div class="menu-column-3">
                            <ul>
                                <li><a href="/bgguides/pocky.php">...Guide to Improving at Battlegrounds</a></li>
                                <li><a href="/bgguides/jeef.php">...Jeef's composition spreadsheet/guide</a></li>
                                <li><a href="/bgguides/youtube.php">...Featured YouTube video guides</a></li>
                                <li><a href="/bgguides/your.php">...Your guide here</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-hover bglegends">
                    <a class="menu-topic" href="/bglegends/">Tournaments</a>
                </li>
                <li class="menu-hover bgsim">
                    <a class="menu-topic" href="/bgsim/?be=1&de=1&dr=1&el=1&me=1&mu=1&na=1&pi=1&qu=1&ud=1">Simulator</a>
                    <div class="menu-container-1">
                        <div class="menu-column-1">
                            <ul>
                                <li><a href="/bgsim/?be=1&de=1&dr=1&el=1&me=1&mu=1&na=1&pi=1&qu=1&ud=1">...Turn-1 Minion Matrix</a></li>
                                <li><a href="/bgsim/custom.php">...Custom Board</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-hover bgbasics">
                    <a class="menu-topic" href="/bgbasics/">Basics</a>
                    <div class="menu-container-1">
                        <div class="menu-column-1">
                            <ul>
                                <li><a href="/bgbasics/">...Definitions</a></li>
                                <li><a href="/bgbasics/triple_stats.php">...Triple Stats</a></li>
                                <li><a href="/bgbasics/faq.php">...FAQ</a></li>
                                <li><a href="/bgbasics/armor.php">...Hero Armor</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-hover bgstrategy">
                    <a class="menu-topic" href="/bgstrategy/">Strategy</a>
                    <div class="menu-container-2">
                        <div class="menu-column-1">
                            <ul>
                                <li><a href="/bgstrategy/general.php">...General Strategy</a></li>
                                <li><a href="/bgstrategy/?show=heroes">...Heroes</a></li>
                                <li><a href="/bgstrategy/?show=minions">...Minions</a></li>
                                <li><a href="/bgstrategy/?show=spells">...Spells</a></li>
                                <li><a href="/bgstrategy/?show=anomalies">...Anomalies</a></li>
                                <li><a href="/bgstrategy/?show=quests">...Quests</a></li>
                                <li><a href="/bgstrategy/?show=rewards">...Rewards</a></li>
                                <li><a href="/bgstrategy/?show=buddies">...Buddies</a></li>
                                <li><a href="/bgstrategy/?mode=txt">...All Entities</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <span style="color: #CCC">&nbsp;|&nbsp;</span>
                </li>
                <li class="menu-hover login">
                    <?php
                    //                    if (!isset($_SESSION['usertag'])) {
                    //                        echo '<a class="menu-topic" href="/login.php" title="Log in via your existing BattleNet account"> <i class="bi bi-box-arrow-in-right"></i> &nbsp;Log in</a>';
                    //                    } else {
                    //                        echo '<a class="menu-topic" href="/logout.php" title="End your session"> <i class="bi bi-box-arrow-right"></i> &nbsp;Log out</a>';
                    //                    }
                    ?>
                </li>
                <li>
                    <div style="margin-left: 5px; margin-top: 1px; border-bottom: 0" id="donate-button-container">
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