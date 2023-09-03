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
//                                 AND bgh.name IN ('Kurtrus Ashfallen')
//--                                 AND bgh.id_blizzard IN ('BG26_HERO_101', 'BG26_HERO_102')
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
//                               WHERE 1=1
//                                 AND bgm.flag_active = ?
//--                                 AND bgm.id > 0
//                                 AND bgm.name IN ('Surf n\' Surf', 'Niuzao', 'Soul Rewinder', 'Keyboard Igniter', 'Famished Felbat', 'Time Saver', 'Stormbringer', 'Electric Synthesizer', 'Obsidian Ravager', 'Carbonic Copy', 'Granite Guardian', 'Adaptable Barricade', 'Omega Buster', 'Sanguine Champion', 'Sore Loser', 'Relentless Sentry', 'Champion of the Primus', 'Recurring Nightmare', 'Fairy Tale Caroler')
//                            ORDER BY bgm.tier, bgm.name ASC")) {
//    $stmt->bind_param("i", $getActiveOnly);
//    $stmt->execute();
//    $stmt->store_result();
//    $stmt->bind_result($id, $name, $nameShort, $blizzardId);

// generate buddies files
//if ($stmt = $mysqli->prepare("SELECT bgb.id,
//                                     bgb.name,
//                                     bgb.id_blizzard,
//                                     bgb.flag_active
//                                FROM bg_buddies bgb
//                               WHERE bgb.flag_active = ?
//                                 AND bgb.id_blizzard is not null
//                                 AND bgb.name IN ('Piloted Whirl-O-Tron')
//                            ORDER BY bgb.tier, bgb.name ASC")) {
//    $stmt->bind_param("i", $getActiveOnly);
//    $stmt->execute();
//    $stmt->store_result();
//    $stmt->bind_result($id, $name, $blizzardId, $isActive);

// generate quest files
//if ($stmt = $mysqli->prepare("SELECT bgq.id,
//                                     bgq.name,
//                                     bgq.id_blizzard
//                                FROM bg_quests bgq
//                               WHERE 1=1 -- bgq.flag_active = ?
//                            ORDER BY bgq.name ASC")) {
//    #$stmt->bind_param("i", $getActiveOnly);
//    $stmt->execute();
//    $stmt->store_result();
//    $stmt->bind_result($id, $name, $blizzardId);

// generate reward files
//    if ($stmt = $mysqli->prepare("SELECT bgr.id,
//                                         bgr.name,
//                                         bgr.id_blizzard
//                                FROM bg_rewards bgr
//                               WHERE 1=1 -- bgq.flag_active = ?
//                            ORDER BY bgr.name ASC")) {
//        #$stmt->bind_param("i", $getActiveOnly);
//        $stmt->execute();
//        $stmt->store_result();
//        $stmt->bind_result($id, $name, $blizzardId);

// generate anomaly files
if ($stmt = $mysqli->prepare("SELECT bga.id,
                                         bga.name,
                                         bga.id_blizzard
                                FROM bg_anomalies bga
                               WHERE 1=1 -- bgq.flag_active = ?
                                 AND bgb.name IN ('Denathrius\' Anima Reserves')
                            ORDER BY bga.name ASC")) {
    #$stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $blizzardId);


    $row_count = $stmt->num_rows;
    if ($row_count == 0) echo '0 results';

    while ($stmt->fetch()) {
        # heroes
//        if (!copy(PICTURE_URL_RENDER . $blizzardId . '.png', '../images/' . $blizzardId . '_render.png') ||
//            !copy(PICTURE_URL_RENDER . $blizzardId . '.png', '../images/convert/' . $blizzardId . '_render.png')
//        ) {
//            echo 'failed to copy ../images/' . $blizzardId . '_render.png<br>';
//        } else {
//            echo 'copy success ../images/' . $blizzardId . '_render.png<br>';
//        }

        # heropowers
//        if (!copy(PICTURE_URL_RENDER_BG . $blizzardIdHp . '.png', '../images/' . $blizzardIdHp . '_render.png') ||
//            !copy(PICTURE_URL_RENDER_BG . $blizzardIdHp . '.png', '../images/convert/' . $blizzardIdHp . '_render.png')
//        ) {
//            echo 'failed to copy ../images/' . $blizzardIdHp . '_render.png<br>';
//        } else {
//            echo 'copy success ../images/' . $blizzardIdHp . '_render.png<br>';
//        }

        # minions / hero pictures
        if (!copy(PICTURE_URL_RENDER_BG . $blizzardId . '.png', '../images/' . $blizzardId . '_render.png') ||
            !copy(PICTURE_URL_RENDER_BG . $blizzardId . '.png', '../images/convert/' . $blizzardId . '_render.png')
        ) {
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

    require_once('convert_images.php');
} else {
    echo 'Select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}
