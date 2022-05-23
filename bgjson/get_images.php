<?php
require_once('../config/db.php');
require_once('../functions.php');

$getActiveOnly = 1;

// generate heroes files
//if ($stmt = $mysqli->prepare("SELECT bgh.id,
//                                     bgh.name,
//                                     bgh.health,
//                                     bgh.hp_id_blizzard,
//                                     bgh.flag_active
//                                FROM bg_heroes bgh
//                               WHERE bgh.flag_active = ?
//--                                  AND bgh.hp_id_blizzard IN ('BG22_HERO_002p', 'BG20_HERO_283p')
//                            ORDER BY bgh.name ASC")) {
//    $stmt->bind_param("i", $getActiveOnly);
//    $stmt->execute();
//    $stmt->store_result();
//    $stmt->bind_result($id, $name, $health, $armorTier, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive);


// generate minions files
if ($stmt = $mysqli->prepare("SELECT bgm.id,
                                     bgm.name,
                                     bgm.name_short                                  
                                FROM bg_minions bgm
                               WHERE bgm.flag_active = ?
                                 AND bgm.id_blizzard IN ('BG23_001'
                                               ,'BG23_009'
                                               ,'BG23_011'
                                               ,'BG23_005'
                                               ,'BG23_003'
                                               ,'BG23_013'
                                               ,'BG23_015'
                                               ,'BG23_018'
                                               ,'BG22_403'
                                               )
                            ORDER BY bgm.tier, bgm.name ASC")) {
    $stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $nameShort, $type, $pool, $text, $textGolden, $tier, $attack, $health, $isToken, $isActive, $hasBattlecry, $hasDeathrattle, $hasTaunt, $hasShield, $hasWindfury, $hasReborn, $hasAvenge, $blizzardId, $artist);

// generate buddies files
//if ($stmt = $mysqli->prepare("SELECT bgb.id,
//                                     bgb.name,
//                                     bgb.id_blizzard,
//                                     bgb.flag_active
//                                FROM bg_buddies bgb
//                               WHERE bgb.flag_active = ?
//                            ORDER BY bgb.tier, bgb.name ASC")) {
//    $stmt->bind_param("i", $getActiveOnly);
//    $stmt->execute();
//    $stmt->store_result();
//    $stmt->bind_result($id, $name, $type, $text, $textGolden, $tier, $attack, $health, $blizzardId, $isActive);

    $row_count = $stmt->num_rows;

    while ($stmt->fetch()) {
        if (!copy(PICTURE_URL_RENDER_BG . $blizzardId . '.png', '../images/' . $blizzardId . '_render.png')) {
            echo 'failed to copy ../images/' . $blizzardId . '_render.png<br>';
        } else {
            echo 'copy success ../images/' . $blizzardId . '_render.png<br>';
        }
    }

    $stmt->close();
} else {
    echo 'Select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}
