<?php
require_once('../config/db.php');
require_once('../functions.php');

$getActiveOnly = 1;

// generate heroes files
//if ($stmt = $mysqli->prepare("SELECT bgh.id,
//                                     bgh.name,
//                                     bgh.health,
//                                     bgh.id_blizzard,
//                                     bgh.hp_id_blizzard,
//                                     bgh.flag_active
//                                FROM bg_heroes bgh
//                               WHERE bgh.flag_active = ?
//                                 AND bgh.id_blizzard IN ('BG25_HERO_105')
//                            ORDER BY bgh.name ASC")) {
//    $stmt->bind_param("i", $getActiveOnly);
//    $stmt->execute();
//    $stmt->store_result();
//    $stmt->bind_result($id, $name, $health, $blizzardId, $blizzardIdHp, $isActive);

// generate minions files
//if ($stmt = $mysqli->prepare("SELECT bgm.id,
//                                     bgm.name,
//                                     bgm.name_short,
//                                     bgm.id_blizzard
//                                FROM bg_minions bgm
//                               WHERE bgm.flag_active = ?
//                                 AND bgm.name IN ('Tarecgosa', 'Shell Collector', 'Annihilan Battlemaster', 'Poetic Pen Pal', 'Leeching Felhound', 'Fireworks Fanatic', 'Dr. Boombox', 'Sly Raptor', 'Gem Smuggler', 'Bonemare')
//                            ORDER BY bgm.tier, bgm.name ASC")) {
//    $stmt->bind_param("i", $getActiveOnly);
//    $stmt->execute();
//    $stmt->store_result();
//    $stmt->bind_result($id, $name, $nameShort, $blizzardId);

// generate buddies files
if ($stmt = $mysqli->prepare("SELECT bgb.id,
                                     bgb.name,
                                     bgb.id_blizzard,
                                     bgb.flag_active
                                FROM bg_buddies bgb
                               WHERE bgb.flag_active = ?
                                 AND bgb.id_blizzard is not null 
                            ORDER BY bgb.tier, bgb.name ASC")) {
    $stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $blizzardId, $isActive);

    $row_count = $stmt->num_rows;
    if ($row_count == 0) echo '0 results';

    while ($stmt->fetch()) {
        // heros
//        if (!copy(PICTURE_URL_RENDER . $blizzardId . '.png', '../images/' . $blizzardId . '_render.png')) {
//            echo 'failed to copy ../images/' . $blizzardId . '_render.png<br>';
//        } else {
//            echo 'copy success ../images/' . $blizzardId . '_render.png<br>';
//        }

//        // heropowers
//        if (!copy(PICTURE_URL_RENDER_BG . $blizzardIdHp . '.png', '../images/' . $blizzardIdHp . '_render.png')) {
//            echo 'failed to copy ../images/' . $blizzardIdHp . '_render.png<br>';
//        } else {
//            echo 'copy success ../images/' . $blizzardIdHp . '_render.png<br>';
//        }

        // minions / hero pictures
        if (!copy(PICTURE_URL_RENDER_BG . $blizzardId . '.png', '../images/' . $blizzardId . '_render.png')) {
            echo 'failed to copy ../images/' . $blizzardId . '_render.png<br>';
        } else {
            echo 'copy success ../images/' . $blizzardId . '_render.png<br>';
        }

//        if (!copy(PICTURE_URL_BIG . $blizzardId . '.webp', '../images/' . $blizzardId . '_big.webp')) {
//            echo 'failed to copy ../images/' . $blizzardId . '_big.webp<br>';
//        } else {
//            echo 'copy success ../images/' . $blizzardId . '_big.webp<br>';
//        }
//        if (!copy(PICTURE_URL_MEDIUM . $blizzardId . '.webp', '../images/' . $blizzardId . '_medium.webp')) {
//            echo 'failed to copy ../images/' . $blizzardId . '_medium.webp<br>';
//        } else {
//            echo 'copy success ../images/' . $blizzardId . '_medium.webp<br>';
//        }
//        if (!copy(PICTURE_URL_TILE . $blizzardId . '.webp', '../images/' . $blizzardId . '_tile.webp')) {
//            echo 'failed to copy ../images/' . $blizzardId . '_tile.webp<br>';
//        } else {
//            echo 'copy success ../images/' . $blizzardId . '_tile.webp<br>';
//        }

    }

    $stmt->close();
} else {
    echo 'Select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}
