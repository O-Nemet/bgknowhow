<?php
require_once('../config/db.php');
require_once('../functions.php');

const CSV_SEPARATOR  = ';';
const VERSION        = '0.8.0';
const BUDDIES_ACTIVE = true;
const URL_BKH        = 'https://bgknowhow.com/bgstrategy/';
const URL_PHS        = 'https://playhearthstone.com/battlegrounds/';
const URL_HPN        = 'https://hearthpwn.com/cards/';
const URL_HSF        = 'https://hearthstone.fandom.com/wiki/Battlegrounds/';

$getActiveOnly                  = 1;

// generate heroes files
if ($stmt = $mysqli->prepare("SELECT bgh.id,
                                     bgh.name,
                                     bgh.name_short,
                                     bgh.pool,
                                     bgh.health,
                                     bgh.armor,
                                     bgh.armor_mmr,
                                     bgh.armor_tier,
                                     bgb.name,
                                     bgb.id_blizzard,
                                     bgh.id_blizzard,
                                     bgh.id_playhs,
                                     bgh.id_hpwn,
                                     bgh.hp_cost,
                                     bgh.hp_text,
                                     bgh.hp_id_blizzard,
                                     bgh.flag_active
                                FROM bg_heroes bgh
                                LEFT JOIN bg_buddies bgb
                                ON bgh.id = bgb.hero_id                                
     --                          WHERE bgh.flag_active = ?
                            ORDER BY bgh.name ASC")) {
    #$stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $nameShort, $pool, $health, $armor, $armorMMR, $armorTier, $buddyName, $buddyId, $blizzardId, $playhsId, $hpwnId, $hpCost, $hpText, $blizzardIdHp, $isActive);

    $row_count = $stmt->num_rows;

//    echo '<pre>';
//    var_dump($stmt);
//    echo '</pre>';

    $csvHeader =
        'Name' . CSV_SEPARATOR .
        'Name Short' . CSV_SEPARATOR .
        'Health' . CSV_SEPARATOR .
//        'Armor-Tier' . CSV_SEPARATOR .
        'Armor' . CSV_SEPARATOR .
        'Armor High MMR' . CSV_SEPARATOR .
        (BUDDIES_ACTIVE ? 'Buddy' . CSV_SEPARATOR : null) .
        'Blizzard ID' . CSV_SEPARATOR .
        'Picture link' . CSV_SEPARATOR .
        'Hero Power cost' . CSV_SEPARATOR .
        'Hero Power text' . CSV_SEPARATOR .
        'Hero Power Blizzard ID' . CSV_SEPARATOR .
        'Hero Power picture link' . CSV_SEPARATOR .
        'Active' . PHP_EOL;

    $csvDataHeroes       = $csvHeader;
    $csvDataHeroesActive = $csvHeader;
    $csvData             = '';

    // json metadata
    $heroes['meta']['date']          = date("Y-m-d");
    $heroes['meta']['version']       = VERSION;
    $heroesActive['meta']['date']    = date("Y-m-d");
    $heroesActive['meta']['version'] = VERSION;

    $i = 0;
    $j = 0;
    while ($stmt->fetch()) {
        $csvData =
            $name . CSV_SEPARATOR .
            $nameShort . CSV_SEPARATOR .
            $health . CSV_SEPARATOR .
//            $armorTier . CSV_SEPARATOR .
            $armor . CSV_SEPARATOR .
            $armorMMR . CSV_SEPARATOR .
            (BUDDIES_ACTIVE ? $buddyName . CSV_SEPARATOR : null) .
            $blizzardId . CSV_SEPARATOR .
            PICTURE_URL_RENDER . $blizzardId . '.png' . CSV_SEPARATOR .
            $hpCost . CSV_SEPARATOR .
            (str_contains($hpText, ';') ? '"' . $hpText . '"' : $hpText) . CSV_SEPARATOR .
            $blizzardIdHp . CSV_SEPARATOR .
            PICTURE_URL_RENDER_BG . $blizzardIdHp . '.png' . CSV_SEPARATOR .
            (bool)$isActive . PHP_EOL;

        $csvDataHeroes .= $csvData;

        $heroes['data'][$i]['name']         = $name;
        $heroes['data'][$i]['nameShort']    = $nameShort;
        $heroes['data'][$i]['pool']         = $pool;
        $heroes['data'][$i]['health']       = $health;
        $heroes['data'][$i]['armorTier']    = $armorTier;
        $heroes['data'][$i]['armor']        = $armor;
        $heroes['data'][$i]['armorHighMMR'] = $armorMMR;
        (BUDDIES_ACTIVE ? $heroes['data'][$i]['buddy'] = $buddyName : null);
//        (BUDDIES_ACTIVE ? $heroes['data'][$i]['buddy']['name'] = $buddyName : null);
//        (BUDDIES_ACTIVE ? $heroes['data'][$i]['buddy']['id'] = $buddyId : null);
        $heroes['data'][$i]['id']                    = $blizzardId;
        $heroes['data'][$i]['picture']               = PICTURE_URL_RENDER . $blizzardId . '.png';
        $heroes['data'][$i]['pictureSmall']          = PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80;
        $heroes['data'][$i]['picturePortrait']       = PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_PORTRAIT_SUFFIX;
        $heroes['data'][$i]['pictureWhole']          = PICTURE_LOCAL_HERO . $blizzardId . '_big.webp';
        $heroes['data'][$i]['heroPowerCost']         = $hpCost;
        $heroes['data'][$i]['heroPowerText']         = $hpText;
        $heroes['data'][$i]['heroPowerId']           = $blizzardIdHp;
        $heroes['data'][$i]['heroPowerPicture']      = PICTURE_URL_RENDER_BG . $blizzardIdHp . '.png';
        $heroes['data'][$i]['heroPowerPictureSmall'] = PICTURE_LOCAL_HP . $blizzardIdHp . PICTURE_LOCAL_RENDER_SUFFIX_80;
        $heroes['data'][$i]['websites']['blizzard']  = ($playhsId ? URL_PHS . $playhsId : null);
        $heroes['data'][$i]['websites']['bgknowhow'] = URL_BKH . 'hero/?id=' . $id;
        $heroes['data'][$i]['websites']['fandom']    = URL_HSF . str_replace(' ', '_', $name);
        $heroes['data'][$i]['websites']['hearthpwn'] = ($hpwnId ? URL_HPN . $hpwnId : null);
        $heroes['data'][$i]['isActive']              = (bool)$isActive;

        if ($isActive) {
            $csvDataHeroesActive      .= $csvData;
            $heroesActive['data'][$j] = $heroes['data'][$i];

            $j++;
        }

        $i++;
    }

    $stmt->free_result();
    $stmt->close();

    $csvFile = 'output/bg_heroes_all.csv';
    file_put_contents($csvFile, $csvDataHeroes);
    echo 'Written file ' . $csvFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $csvFile = 'output/bg_heroes_active.csv';
    file_put_contents($csvFile, $csvDataHeroesActive);
    echo 'Written file ' . $csvFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

    $jsonFile = 'output/bg_heroes_all.json';
    $jsonData = json_encode($heroes);
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $jsonData = json_encode($heroesActive);
    $jsonFile = 'output/bg_heroes_active.json';
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

} else {
    echo 'Select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}

// generate minions files
if ($stmt = $mysqli->prepare("SELECT bgm.id,
                                     bgm.name,
                                     bgm.name_short,
                                     bgm.type,
                                     bgm.type2,
                                     bgm.pool,
                                     bgm.pool2,
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
                                     bgm.flag_venomous,                                     
                                     bgm.flag_reborn,                                     
                                     bgm.flag_avenge,                                                                          
                                     bgm.flag_magnetic,                                                                          
                                     bgm.flag_spellcraft,
                                     bgm.id_blizzard,
                                     bgm.id_summon,
                                     bgm.id_playhs,
                                     bgm.id_hpwn,                                     
                                     bgm.artist,
                                     bgm.flavor
                                FROM bg_minions bgm
--                               WHERE bgm.flag_active = ?
                            ORDER BY bgm.flag_token, bgm.tier, bgm.name")) {
    #$stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $nameShort, $type, $type2, $pool, $pool2, $text, $textGolden, $tier, $attack, $health, $isToken, $isActive, $hasBattlecry, $hasDeathrattle, $hasTaunt, $hasShield, $hasWindfury, $hasVenomous, $hasReborn, $hasAvenge, $hasMagnetic, $hasSpellcraft, $blizzardId, $summonId, $playhsId, $hpwnId, $artist, $flavor);

    $row_count = $stmt->num_rows;

    $csvHeader =
        'Name' . CSV_SEPARATOR .
        'Name Short' . CSV_SEPARATOR .
        'Type' . CSV_SEPARATOR .
        'Type2' . CSV_SEPARATOR .
        'Pool' . CSV_SEPARATOR .
        'Pool2' . CSV_SEPARATOR .
        'Tier' . CSV_SEPARATOR .
        'Attack' . CSV_SEPARATOR .
        'Health' . CSV_SEPARATOR .
        'Text' . CSV_SEPARATOR .
        'Attack Golden' . CSV_SEPARATOR .
        'Health Golden' . CSV_SEPARATOR .
        'Text Golden' . CSV_SEPARATOR .
        'Token' . CSV_SEPARATOR .
        'Battlecry' . CSV_SEPARATOR .
        'Deathrattle' . CSV_SEPARATOR .
        'Taunt' . CSV_SEPARATOR .
        'Divine Shield' . CSV_SEPARATOR .
        'Windfury' . CSV_SEPARATOR .
        'Venomous' . CSV_SEPARATOR .
        'Reborn' . CSV_SEPARATOR .
        'Avenge' . CSV_SEPARATOR .
        'Magnetic' . CSV_SEPARATOR .
        'Spellcraft' . CSV_SEPARATOR .
        'Blizzard ID' . CSV_SEPARATOR .
        'Summon ID' . CSV_SEPARATOR .
        'Picture Link' . CSV_SEPARATOR .
        'Artist' . CSV_SEPARATOR .
        'Flavor' . CSV_SEPARATOR .
        'Active' . PHP_EOL;

    $csvData              = '';
    $csvDataMinions       = $csvHeader;
    $csvDataMinionsActive = $csvHeader;

    // json metadata
    $minions['meta']['date']          = date("Y-m-d");
    $minions['meta']['version']       = VERSION;
    $minionsActive['meta']['date']    = date("Y-m-d");
    $minionsActive['meta']['version'] = VERSION;

    $i = 0;
    $j = 0;
    while ($stmt->fetch()) {
        $csvData                                            =
            $name . CSV_SEPARATOR .
            $nameShort . CSV_SEPARATOR .
            $type . CSV_SEPARATOR .
            $type2 . CSV_SEPARATOR .
            ($pool ? $pool : 'All') . CSV_SEPARATOR .
            $pool2 . CSV_SEPARATOR .
            $tier . CSV_SEPARATOR .
            $attack . CSV_SEPARATOR .
            $health . CSV_SEPARATOR .
            (str_contains($text, ';') ? '"' . $text . '"' : $text) . CSV_SEPARATOR .
            $attack * 2 . CSV_SEPARATOR .
            $health * 2 . CSV_SEPARATOR .
            (str_contains($textGolden, ';') ? '"' . $textGolden . '"' : $textGolden) . CSV_SEPARATOR .
            (bool)$isToken . CSV_SEPARATOR .
            (bool)$hasBattlecry . CSV_SEPARATOR .
            (bool)$hasDeathrattle . CSV_SEPARATOR .
            (bool)$hasTaunt . CSV_SEPARATOR .
            (bool)$hasShield . CSV_SEPARATOR .
            (bool)$hasWindfury . CSV_SEPARATOR .
            (bool)$hasVenomous . CSV_SEPARATOR .
            (bool)$hasReborn . CSV_SEPARATOR .
            (bool)$hasAvenge . CSV_SEPARATOR .
            (bool)$hasMagnetic . CSV_SEPARATOR .
            (bool)$hasSpellcraft . CSV_SEPARATOR .
            $blizzardId . CSV_SEPARATOR .
            $summonId . CSV_SEPARATOR .
            PICTURE_URL_RENDER_BG . $blizzardId . '.png' . CSV_SEPARATOR .
            $artist . CSV_SEPARATOR .
            $flavor . CSV_SEPARATOR .
            (bool)$isActive . PHP_EOL;

        $csvDataMinions .= $csvData;

        $minions['data'][$i]['name']      = $name;
        $minions['data'][$i]['nameShort'] = $nameShort;
        $minions['data'][$i]['type']      = $type;
        $minions['data'][$i]['types'][0]  = $type;
        if ($type2) {
            $minions['data'][$i]['types'][1] = $type2;
        }
        $minions['data'][$i]['pool']     = ($pool ? $pool : 'All');
        $minions['data'][$i]['pools'][0] = ($pool ? $pool : 'All');
        if ($pool2) {
            $minions['data'][$i]['pools'][1] = $pool2;
        }
        $minions['data'][$i]['tier']                        = $tier;
        $minions['data'][$i]['attack']                      = $attack;
        $minions['data'][$i]['health']                      = $health;
        $minions['data'][$i]['text']                        = $text;
        $minions['data'][$i]['attackGolden']                = $attack * 2;
        $minions['data'][$i]['healthGolden']                = $health * 2;
        $minions['data'][$i]['textGolden']                  = $textGolden;
        $minions['data'][$i]['isActive']                    = (bool)$isActive;
        $minions['data'][$i]['isToken']                     = (bool)$isToken;
        $minions['data'][$i]['abilities']['hasBattlecry']   = (bool)$hasBattlecry;
        $minions['data'][$i]['abilities']['hasDeathrattle'] = (bool)$hasDeathrattle;
        $minions['data'][$i]['abilities']['hasTaunt']       = (bool)$hasTaunt;
        $minions['data'][$i]['abilities']['hasShield']      = (bool)$hasShield;
        $minions['data'][$i]['abilities']['hasWindfury']    = (bool)$hasWindfury;
        $minions['data'][$i]['abilities']['hasVenomous']    = (bool)$hasVenomous;
        $minions['data'][$i]['abilities']['hasReborn']      = (bool)$hasReborn;
        $minions['data'][$i]['abilities']['hasAvenge']      = (bool)$hasAvenge;
        $minions['data'][$i]['abilities']['hasMagnetic']    = (bool)$hasMagnetic;
        $minions['data'][$i]['abilities']['hasSpellcraft']  = (bool)$hasSpellcraft;
        $minions['data'][$i]['id']                          = $blizzardId;
        $minions['data'][$i]['summonId']                    = $summonId;
        $minions['data'][$i]['picture']                     = PICTURE_URL_RENDER_BG . $blizzardId . '.png';
        $minions['data'][$i]['pictureSmall']                = PICTURE_LOCAL_MINION . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80;
        $minions['data'][$i]['artist']                      = $artist;
        $minions['data'][$i]['flavor']                      = $flavor;
        $minions['data'][$i]['websites']['blizzard']        = ($playhsId ? URL_PHS . $playhsId : null);
        $minions['data'][$i]['websites']['bgknowhow']       = URL_BKH . 'minion/?id=' . $id;
        $minions['data'][$i]['websites']['fandom']          = URL_HSF . str_replace(' ', '_', $name);
        $minions['data'][$i]['websites']['hearthpwn']       = ($hpwnId ? URL_HPN . $hpwnId : null);

        if ($isActive) {
            $csvDataMinionsActive      .= $csvData;
            $minionsActive['data'][$j] = $minions['data'][$i];

            $j++;
        }

        $i++;
    }

    $stmt->free_result();
    $stmt->close();

    $csvFile = 'output/bg_minions_all.csv';
    file_put_contents($csvFile, $csvDataMinions);
    echo 'Written file ' . $csvFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $csvFile = 'output/bg_minions_active.csv';
    file_put_contents($csvFile, $csvDataMinionsActive);
    echo 'Written file ' . $csvFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

    $jsonFile = 'output/bg_minions_all.json';
    $jsonData = json_encode($minions);
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $jsonFile = 'output/bg_minions_active.json';
    $jsonData = json_encode($minionsActive);
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

} else {
    echo 'Select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}

// generate buddies files
if ($stmt = $mysqli->prepare("SELECT bgb.id,
                                     bgb.name,
                                     bgb.type,
                                     bgb.text,
                                     bgb.text_golden,
                                     bgb.tier,
                                     bgb.attack,
                                     bgb.health,
                                     (SELECT bgh.name FROM bg_heroes bgh WHERE bgh.id = bgb.hero_id) AS heroName,
                                     bgb.id_blizzard,
                                     bgb.id_playhs,
                                     bgb.id_hpwn,
                                     bgb.flag_active
                                FROM bg_buddies bgb
--                               WHERE bgb.flag_active = ?
                            ORDER BY bgb.tier, bgb.name ASC")) {
    #$stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $type, $text, $textGolden, $tier, $attack, $health, $heroName, $blizzardId, $playhsId, $hpwnId, $isActive);

    $row_count = $stmt->num_rows;

    $csvHeader =
        'Name' . CSV_SEPARATOR .
        'Type' . CSV_SEPARATOR .
        'Tier' . CSV_SEPARATOR .
        'Attack' . CSV_SEPARATOR .
        'Health' . CSV_SEPARATOR .
        'Text' . CSV_SEPARATOR .
        'Attack Golden' . CSV_SEPARATOR .
        'Health Golden' . CSV_SEPARATOR .
        'Text Golden' . CSV_SEPARATOR .
        'Buddy Of' . CSV_SEPARATOR .
        'Blizzard ID' . CSV_SEPARATOR .
        'Picture Link' . CSV_SEPARATOR .
        'Active' . PHP_EOL;

    $csvData          = '';
    $csvBuddies       = $csvHeader;
    $csvBuddiesActive = $csvHeader;

    // json metadata
    $buddies['meta']['date']          = date("Y-m-d");
    $buddies['meta']['version']       = VERSION;
    $buddiesActive['meta']['date']    = date("Y-m-d");
    $buddiesActive['meta']['version'] = VERSION;

    $i = 0;
    $j = 0;
    while ($stmt->fetch()) {

        $csvData =
            $name . CSV_SEPARATOR .
            $type . CSV_SEPARATOR .
            $tier . CSV_SEPARATOR .
            $attack . CSV_SEPARATOR .
            $health . CSV_SEPARATOR .
            (str_contains($text, ';') ? '"' . $text . '"' : $text) . CSV_SEPARATOR .
            $attack * 2 . CSV_SEPARATOR .
            $health * 2 . CSV_SEPARATOR .
            (str_contains($textGolden, ';') ? '"' . $textGolden . '"' : $textGolden) . CSV_SEPARATOR .
            $heroName . CSV_SEPARATOR .
            $blizzardId . CSV_SEPARATOR .
            PICTURE_URL_RENDER_BG . $blizzardId . '.png' . CSV_SEPARATOR .
            (bool)$isActive . PHP_EOL;

        $csvBuddies .= $csvData;

        $buddies['data'][$i]['name']                  = $name;
        $buddies['data'][$i]['type']                  = $type;
        $buddies['data'][$i]['tier']                  = $tier;
        $buddies['data'][$i]['attack']                = $attack;
        $buddies['data'][$i]['health']                = $health;
        $buddies['data'][$i]['text']                  = $text;
        $buddies['data'][$i]['attackGolden']          = $attack * 2;
        $buddies['data'][$i]['healthGolden']          = $health * 2;
        $buddies['data'][$i]['textGolden']            = $textGolden;
        $buddies['data'][$i]['hero']                  = $heroName;
        $buddies['data'][$i]['isActive']              = (bool)$isActive;
        $buddies['data'][$i]['id']                    = $blizzardId;
        $buddies['data'][$i]['picture']               = PICTURE_URL_RENDER_BG . $blizzardId . '.png';
        $buddies['data'][$i]['pictureSmall']          = PICTURE_LOCAL_BUDDY . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80;
        $buddies['data'][$i]['websites']['blizzard']  = ($playhsId ? URL_PHS . $playhsId : null);
        $buddies['data'][$i]['websites']['bgknowhow'] = URL_BKH . 'buddy/?id=' . $id;
        $buddies['data'][$i]['websites']['fandom']    = URL_HSF . str_replace(' ', '_', $name);
        $buddies['data'][$i]['websites']['hearthpwn'] = ($hpwnId ? URL_HPN . $hpwnId : null);

        if ($isActive) {
            $csvBuddiesActive          .= $csvData;
            $buddiesActive['data'][$j] = $buddies['data'][$i];

            $j++;
        }

        $i++;
    }

    $stmt->free_result();
    $stmt->close();

    $csvFile = 'output/bg_buddies_all.csv';
    file_put_contents($csvFile, $csvBuddies);
    echo 'Written file ' . $csvFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $csvFile = 'output/bg_buddies_active.csv';
    file_put_contents($csvFile, $csvBuddiesActive);
    echo 'Written file ' . $csvFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

    $jsonFile = 'output/bg_buddies_all.json';
    $jsonData = json_encode($buddies);
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $jsonFile = 'output/bg_buddies_active.json';
    $jsonData = json_encode($buddiesActive);
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

} else {
    echo 'Select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}

// generate quest files
if ($stmt = $mysqli->prepare("SELECT bgh.id,
                                     bgh.name,
                                     bgh.text,
                                     bgh.id_blizzard,
                                     bgh.id_playhs,
                                     bgh.id_hpwn,
                                     bgh.flag_active
                                FROM bg_quests bgh
     --                          WHERE bgh.flag_active = ?
                            ORDER BY bgh.name ASC")) {
    #$stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $text, $blizzardId, $playhsId, $hpwnId, $isActive);

    $row_count = $stmt->num_rows;

    $csvHeader           =
        'Name' . CSV_SEPARATOR .
        'Text' . CSV_SEPARATOR .
        'Blizzard ID' . CSV_SEPARATOR .
        'Picture link' . CSV_SEPARATOR .
        'Active' . PHP_EOL;
    $csvDataQuests       = $csvHeader;
    $csvDataQuestsActive = $csvHeader;
    $csvData             = '';

    // json metadata
    $quests['meta']['date']          = date("Y-m-d");
    $quests['meta']['version']       = VERSION;
    $questsActive['meta']['date']    = date("Y-m-d");
    $questsActive['meta']['version'] = VERSION;

    $i = 0;
    $j = 0;
    while ($stmt->fetch()) {
        $csvData =
            $name . CSV_SEPARATOR .
            (str_contains($text, ';') ? '"' . $text . '"' : $text) . CSV_SEPARATOR .
            $blizzardId . CSV_SEPARATOR .
            PICTURE_URL_RENDER_BG . $blizzardId . '.png' . CSV_SEPARATOR .
            (bool)$isActive . PHP_EOL;

        $csvDataQuests .= $csvData;

        $quests['data'][$i]['name']    = $name;
        $quests['data'][$i]['text']    = $text;
        $quests['data'][$i]['id']      = $blizzardId;
        $quests['data'][$i]['picture'] = PICTURE_URL_RENDER_BG . $blizzardId . '.png';
//        $quests['data'][$i]['pictureSmall']          = PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80;
        $quests['data'][$i]['websites']['blizzard'] = ($playhsId ? URL_PHS . $playhsId : null);
//        $quests['data'][$i]['websites']['bgknowhow'] = URL_BKH . 'hero/?id=' . $id;
        $quests['data'][$i]['websites']['fandom']    = URL_HSF . str_replace(' ', '_', $name);
        $quests['data'][$i]['websites']['hearthpwn'] = ($hpwnId ? URL_HPN . $hpwnId : null);
        $quests['data'][$i]['isActive']              = (bool)$isActive;

        if ($isActive) {
            $csvDataQuestsActive      .= $csvData;
            $questsActive['data'][$j] = $quests['data'][$i];

            $j++;
        }

        $i++;
    }

    $stmt->free_result();
    $stmt->close();

    $csvFile = 'output/bg_quests_all.csv';
    file_put_contents($csvFile, $csvDataQuests);
    echo 'Written file ' . $csvFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $csvFile = 'output/bg_quests_active.csv';
    file_put_contents($csvFile, $csvDataQuestsActive);
    echo 'Written file ' . $csvFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

    $jsonFile = 'output/bg_quests_all.json';
    $jsonData = json_encode($quests);
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $jsonData = json_encode($questsActive);
    $jsonFile = 'output/bg_quests_active.json';
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

} else {
    echo 'Quests select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}

// generate rewards files
if ($stmt = $mysqli->prepare("SELECT bgh.id,
                                     bgh.name,
                                     bgh.text,
                                     bgh.id_blizzard,
                                     bgh.id_playhs,
                                     bgh.id_hpwn,
                                     bgh.flag_active
                                FROM bg_rewards bgh
     --                          WHERE bgh.flag_active = ?
                            ORDER BY bgh.name ASC")) {
    #$stmt->bind_param("i", $getActiveOnly);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $text, $blizzardId, $playhsId, $hpwnId, $isActive);

    $row_count = $stmt->num_rows;

    $csvHeader            =
        'Name' . CSV_SEPARATOR .
        'Text' . CSV_SEPARATOR .
        'Blizzard ID' . CSV_SEPARATOR .
        'Picture link' . CSV_SEPARATOR .
        'Active' . PHP_EOL;
    $csvDataRewards       = $csvHeader;
    $csvDataRewardsActive = $csvHeader;
    $csvData              = '';

    // json metadata
    $rewards['meta']['date']          = date("Y-m-d");
    $rewards['meta']['version']       = VERSION;
    $rewardsActive['meta']['date']    = date("Y-m-d");
    $rewardsActive['meta']['version'] = VERSION;

    $i = 0;
    $j = 0;
    while ($stmt->fetch()) {
        $csvData =
            $name . CSV_SEPARATOR .
            (str_contains($text, ';') ? '"' . $text . '"' : $text) . CSV_SEPARATOR .
            $blizzardId . CSV_SEPARATOR .
            PICTURE_URL_RENDER_BG . $blizzardId . '.png' . CSV_SEPARATOR .
            (bool)$isActive . PHP_EOL;

        $csvDataRewards .= $csvData;

        $rewards['data'][$i]['name']    = $name;
        $rewards['data'][$i]['text']    = $text;
        $rewards['data'][$i]['id']      = $blizzardId;
        $rewards['data'][$i]['picture'] = PICTURE_URL_RENDER_BG . $blizzardId . '.png';
//        $rewards['data'][$i]['pictureSmall']          = PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80;
        $rewards['data'][$i]['websites']['blizzard'] = ($playhsId ? URL_PHS . $playhsId : null);
//        $rewards['data'][$i]['websites']['bgknowhow'] = URL_BKH . 'hero/?id=' . $id;
        $rewards['data'][$i]['websites']['fandom']    = URL_HSF . str_replace(' ', '_', $name);
        $rewards['data'][$i]['websites']['hearthpwn'] = ($hpwnId ? URL_HPN . $hpwnId : null);
        $rewards['data'][$i]['isActive']              = (bool)$isActive;

        if ($isActive) {
            $csvDataRewardsActive      .= $csvData;
            $rewardsActive['data'][$j] = $rewards['data'][$i];

            $j++;
        }

        $i++;
    }

    $stmt->free_result();
    $stmt->close();

    $csvFile = 'output/bg_rewards_all.csv';
    file_put_contents($csvFile, $csvDataRewards);
    echo 'Written file ' . $csvFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $csvFile = 'output/bg_rewards_active.csv';
    file_put_contents($csvFile, $csvDataRewardsActive);
    echo 'Written file ' . $csvFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

    $jsonFile = 'output/bg_rewards_all.json';
    $jsonData = json_encode($rewards);
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $i . ' entries.<br>' . PHP_EOL;

    $jsonData = json_encode($rewardsActive);
    $jsonFile = 'output/bg_rewards_active.json';
    file_put_contents($jsonFile, $jsonData);
    echo 'Written file ' . $jsonFile . ' with ' . $j . ' entries.<br>' . PHP_EOL;

} else {
    echo 'Rewards select failed: (' . $mysqli->errno . ') ' . $mysqli->error . '<br>';
}

// json metadata
$allEntities['meta']['date']    = date("Y-m-d");
$allEntities['meta']['version'] = VERSION;

unset($heroes['meta']);
unset($minions['meta']);
unset($buddies['meta']);
unset($quests['meta']);
unset($rewards['meta']);

$allEntities['data']['heroes']  = $heroes['data'];
$allEntities['data']['minions'] = $minions['data'];
$allEntities['data']['buddies'] = $buddies['data'];
$allEntities['data']['quests']  = $quests['data'];
$allEntities['data']['rewards'] = $rewards['data'];

$jsonFile = 'output/bg_entities_all.json';
$jsonData = json_encode($allEntities);
file_put_contents($jsonFile, $jsonData);
echo 'Written file ' . $jsonFile . ' with all entries.<br>' . PHP_EOL;

// json metadata
$allEntitiesActive['meta']['date']    = date("Y-m-d");
$allEntitiesActive['meta']['version'] = VERSION;

unset($heroesActive['meta']);
unset($minionsActive['meta']);
unset($buddiesActive['meta']);
unset($questsActive['meta']);
unset($rewardsActive['meta']);

$allEntitiesActive['data']['heroes']  = $heroesActive['data'];
$allEntitiesActive['data']['minions'] = $minionsActive['data'];
@$allEntitiesActive['data']['buddies'] = $buddiesActive['data'];
@$allEntitiesActive['data']['quests'] = $questsActive['data'];
@$allEntitiesActive['data']['rewards'] = $rewardsActive['data'];

$jsonFile = 'output/bg_entities_active.json';
$jsonData = json_encode($allEntitiesActive);
file_put_contents($jsonFile, $jsonData);
echo 'Written file ' . $jsonFile . ' with all entries.<br>' . PHP_EOL;
