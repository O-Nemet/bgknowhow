<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//ini_set('log_errors', 'On');

const IMG_PATH = '//bgknowhow.com/images/';

const PICTURE_LOCAL = 'https://bgknowhow.com/images/';

const PICTURE_LOCAL_HERO            = 'https://bgknowhow.com/images/heroes/';
const PICTURE_LOCAL_BUDDY           = 'https://bgknowhow.com/images/buddies/';
const PICTURE_LOCAL_MINION          = 'https://bgknowhow.com/images/minions/';
const PICTURE_LOCAL_HP              = 'https://bgknowhow.com/images/heropower/';
const PICTURE_LOCAL_PORTRAIT_SUFFIX = '_portrait.png';
const PICTURE_LOCAL_RENDER_SUFFIX   = '_render.png';
const PICTURE_LOCAL_TILE_SUFFIX     = '_tile.webp';

const PICTURE_URL_RENDER       = 'https://art.hearthstonejson.com/v1/render/latest/enUS/512x/'; // 256or512 (png only)
const PICTURE_URL_RENDER_BG    = 'https://art.hearthstonejson.com/v1/bgs/latest/enUS/512x/'; // 256or512 (png only)
const PICTURE_URL_RENDER_DE    = 'https://art.hearthstonejson.com/v1/render/latest/deDE/512x/';
const PICTURE_URL_RENDER_BG_DE = 'https://art.hearthstonejson.com/v1/bgs/latest/deDE/512x/';
const PICTURE_URL_TILE         = 'https://art.hearthstonejson.com/v1/tiles/'; // png/webp/jpg
const PICTURE_URL_ORIGINAL     = 'https://art.hearthstonejson.com/v1/orig/'; // png
const PICTURE_URL_MEDIUM       = 'https://art.hearthstonejson.com/v1/256x/'; // webp/jpg
const PICTURE_URL_BIG          = 'https://art.hearthstonejson.com/v1/512x/'; // webp/jpg

function getWebsiteTitle(): string
{
    $title = '';

    $url  = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $page = parse_url($url, PHP_URL_PATH);

    if (strpos($page, '/bgjson/') !== false) {
        $title .= 'BG JSON - ';
    } else if (strpos($page, '/bgsim/') !== false) {
        $title .= 'BG Simulator - ';
    } else if (strpos($page, '/bgcomps/comp_beasts') !== false) {
        $title .= 'BG Comps (Beasts) - ';
    } else if (strpos($page, '/bgcomps/comp_demons') !== false) {
        $title .= 'BG Comps (Demons) - ';
    } else if (strpos($page, '/bgcomps/comp_dragons') !== false) {
        $title .= 'BG Comps (Dragons) - ';
    } else if (strpos($page, '/bgcomps/comp_elementals') !== false) {
        $title .= 'BG Comps (Elementals) - ';
    } else if (strpos($page, '/bgcomps/comp_mechs') !== false) {
        $title .= 'BG Comps (Mechs) - ';
    } else if (strpos($page, '/bgcomps/comp_murlocs') !== false) {
        $title .= 'BG Comps (Murlocs) - ';
    } else if (strpos($page, '/bgcomps/comp_pirates') !== false) {
        $title .= 'BG Comps (Pirates) - ';
    } else if (strpos($page, '/bgcomps/comp_quilboars') !== false) {
        $title .= 'BG Comps (Quilboars) - ';
    } else if (strpos($page, '/bgstrategy/') !== false) {
        $title .= 'BG Strategy - ';
    }

    $title .= 'Battlegrounds Know How (beta)';

    return $title;
}

function setVote($selectedStrat, $selectedVote) {
    include('config/db.php');

    if ($selectedVote == 1) {
        $voteColumn = 'votes_up';
    } else if ($selectedVote == 2) {
        $voteColumn = 'votes_down';
    } else {
        $voteColumn = 'votes_trash';
    }

    $userIp      = $_SERVER['REMOTE_ADDR'];
    $userProxyIp = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : null;

    if ($stmt = $mysqli->prepare("SELECT COALESCE(MAX(1), 0)
                                FROM log_strategy lgs
                               WHERE lgs.time_created >= NOW() - INTERVAL 7 DAY
                                 AND lgs.id_strategy = ?
                                 AND lgs.ip = ?
                                 LIMIT 1")) {
        $stmt->bind_param("is", $selectedStrat, $userIp);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($alreadyExists);
        $stmt->fetch();
    }

//    echo $userIp."|".$alreadyExists."|".$selectedStrat;

    if ($alreadyExists == 0) {
        if ($stmt = $mysqli->prepare("UPDATE bg_strategy
                                     SET " . $voteColumn . " = " . $voteColumn . "+ 1
                                   WHERE id = ?")) {
            $stmt->bind_param('i', $selectedStrat);
            $stmt->execute();
            $stmt->close();

            if ($stmt = $mysqli->prepare("INSERT INTO log_strategy (id_strategy, ip, ip_proxy)
                                     VALUES (?
                                            ,?
                                            ,?
                                            )")) {
                $stmt->bind_param('iss', $selectedStrat, $userIp, $userProxyIp);
                $stmt->execute();
                $stmt->close();
            } else {
                echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
                return false;
            }
        } else {
            echo 'Update error (' . $mysqli->errno . ') : ' . $mysqli->error;
            return false;
        }
    }
}


function getMinionsForBoard($board): array
{
    $tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_all.json'));

    $i = 0;
    foreach ($board as $needle) {
        foreach ($tempMinions->data as $key => $object) {
            if (strpos($needle, '*') !== false) {
                $needleNew = substr($needle, strpos($needle, '*') + 1);
                if ($object->name === $needleNew) {
                    $minions[$i]['name']    = $object->name;
                    $minions[$i]['picture'] = $object->pictureInternal;
                }
            } else {
                if ($object->nameShort === $needle) {
                    $minions[$i]['name']    = $object->name;
                    $minions[$i]['picture'] = $object->pictureInternal;
                }
            }
        }
        $i++;
    }

//echo "<pre>";
//var_dump($minions);
//echo "</pre>";

    return $minions;
}

function getArmor($armorTier): string
{
    switch ($armorTier) {
        case 1:
            return "0";
        case 2:
            return "2-5";
        case 3:
            return "3-6";
        case 4:
            return "4-7";
        case 5:
            return "5-8";
        case 6:
            return "6-9";
        case 7:
            return "7-10";
        default:
            return "???";
    }
}