<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//ini_set('log_errors', 'On');

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