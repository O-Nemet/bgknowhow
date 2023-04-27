<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('log_errors', 'On');

$content     = file_get_contents('heroes.txt');
$needle      = 'Card hero" src="https://d15f34w2p8l1cc.cloudfront.net/hearthstone/';
$shortNeedle = 'https://d15f34w2p8l1cc.cloudfront.net/hearthstone/';
$lastPos     = 0;
$positions   = array();

$tempHeroes = json_decode(file_get_contents('../bgjson/output/bg_heroes_active.json'));

while (($lastPos = strpos($content, $needle, $lastPos)) !== false) {
//    $positions[] = $lastPos;
    $positions[] = $shortNeedle . substr($content, $lastPos + strlen($needle), 68);
    $lastPos     = $lastPos + strlen($needle);
}

$i = 0;
foreach ($positions as $position) {

    // Sire Denathrius missing on official page :-(
//    if ($tempHeroes->data[$i]->id === 'BG24_HERO_100') {
//        $i++;
//    }

    $hero = $tempHeroes->data[$i]->id;

    echo $i . "|" . $hero . "|" . $position . "<br>";

    if (!copy($position, $hero . '_portrait.png')) {
        echo 'failed to copy images/' . $hero . '_portrait.png<br>';
    } else {
        echo 'copy success images/' . $hero . '_portrait.png<br>';
    }

    $i++;
}

