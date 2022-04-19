<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('log_errors', 'On');

$tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_all.json'));

$i = 0;
foreach ($board as $needle) {
    foreach ($tempMinions->data as $key => $object) {
        if (strpos($needle, '*')) {
            $needleNew = substr($needle, strpos($needle, '*') + 1);
            if ($object->name === $needleNew) {
                $minions[$i]['name']    = $object->name;
                $minions[$i]['picture'] = $object->picture;
            }
        } else {
            if ($object->nameShort === $needle) {
                $minions[$i]['name']    = $object->name;
                $minions[$i]['picture'] = $object->picture;
            }
        }
    }
    $i++;
}

//echo "<pre>";
//var_dump($minions);
//echo "</pre>";
