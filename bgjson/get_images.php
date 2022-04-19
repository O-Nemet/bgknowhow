<?php
require_once('../config/db.php');

const CSV_SEPARATOR         = ';';
const PICTURE_URL_RENDER    = 'https://art.hearthstonejson.com/v1/render/latest/enUS/512x/'; // locale/256or512 (png only)
const PICTURE_URL_RENDER_DE = 'https://art.hearthstonejson.com/v1/render/latest/deDe/512x/';
const PICTURE_URL_TILE      = 'https://art.hearthstonejson.com/v1/tiles/'; // png/webp/jpg
const PICTURE_URL_ORIGINAL  = 'https://art.hearthstonejson.com/v1/orig/'; // png
const PICTURE_URL_MEDIUM    = 'https://art.hearthstonejson.com/v1/256x/'; // webp/jpg
const PICTURE_URL_BIG       = 'https://art.hearthstonejson.com/v1/512x/'; // webp/jpg

$getActiveOnly = 1;

// generate heroes files
/*
if ($stmt = $mysqli->prepare("SELECT bgh.id,
                                     bgh.name,
                                     bgh.health,
                                     bgh.armor_tier,
                                     bgh.id_blizzard,
                                     bgh.hp_cost,
                                     bgh.hp_text,
                                     bgh.hp_id_blizzard,
                                     bgh.flag_active
                                FROM bg_heroes bgh
                               WHERE bgh.flag_active = ?
                            ORDER BY bgh.name ASC")) {
    $stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $health, $armorTier, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive);
*/

// generate minions files
if ($stmt = $mysqli->prepare("SELECT bgm.id,
                                     bgm.name,
                                     bgm.type,
                                     bgm.pool,
                                     bgm.text,
                                     bgm.text_golden,
                                     bgm.tier,
                                     bgm.attack,
                                     bgm.health,
                                     bgm.flag_token,
                                     bgm.flag_active,
                                     bgm.flag_battlecry,
                                     bgm.flag_deathrattle,
                                     bgm.flag_taunt,                                     
                                     bgm.flag_shield,                                     
                                     bgm.flag_windfury,                                     
                                     bgm.flag_reborn,                                     
                                     bgm.flag_avenge,                                                                          
                                     bgm.id_blizzard,                                   
                                     bgm.artist                                                                        
                                FROM bg_minions bgm
                               WHERE bgm.flag_active = ?
                            ORDER BY bgm.tier, bgm.name ASC")) {
    $stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $type, $pool, $text, $textGolden, $tier, $attack, $health, $isToken, $isActive, $hasBattlecry, $hasDeathrattle, $hasTaunt, $hasShield, $hasWindfury, $hasReborn, $hasAvenge, $blizzardId, $artist);

    $row_count = $stmt->num_rows;

    while ($stmt->fetch()) {

        if (!copy(PICTURE_URL_RENDER . $blizzardId . '.png', '../images/' . $blizzardId . '_render.png')) {
            echo 'failed to copy ' . $blizzardId . '<br>';
        } else {
            echo 'copy success ' . $blizzardId . '<br>';
        }

    }

    $stmt->close();
} else {
    echo 'Select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}
