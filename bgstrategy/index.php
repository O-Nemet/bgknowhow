<?php
include_once('../header.php');
?>

<?php

$minion  = $_GET['minion'] ?? '';
$buddy   = $_GET['buddy'] ?? '';
$anomaly = $_GET['anomaly'] ?? '';
$spell   = $_GET['spell'] ?? '';
$quest   = $_GET['quest'] ?? '';
$reward  = $_GET['reward'] ?? '';

if (!empty($_GET['mode'])) {
    $mode = $_GET['mode'];
} else {
    $mode = 'gfx';
}

if (!empty($_GET['show'])) {
    $show = $_GET['show'];
} else {
    $show = 'all';
}

if (!empty($_GET['type'])) {
    $minionPool = ucfirst(strtolower($_GET['type']));
    if ($minionPool === 'None') {
        $minionPool = 'All';
    }
} else {
    $minionPool = 'Everything';
}

if (!empty($_GET['ability'])) {
    $minionAbility = ucfirst(strtolower($_GET['ability']));
} else {
    $minionAbility = '';
}

if (!empty($_GET['tier'])) {
    $minionTier = (int)$_GET['tier'];
    $minionTier = ($minionTier > 0 && $minionTier < 8) ? $minionTier : 0;
} else {
    $minionTier = 0;
}

if (!empty($_GET['duos'])) {
    $isDuos = $_GET['duos'] == (1 || true) ? true : false;
} else {
    $isDuos = false;
}

if (!empty($buddy)) {
    echo "buddy " . $buddy;
} else if (!empty($minion)) {
    echo "minion " . $minion;
} else {
    foreach ($tempHeroes->data as $key => $object) {
        $heroes[] = $object;
    }

    foreach ($tempBuddies->data as $key => $object) {
        $buddies[] = $object;
    }

    foreach ($tempAnomalies->data as $key => $object) {
        $anomalies[] = $object;
    }

    foreach ($tempSpells->data as $key => $object) {
        $spells[] = $object;
    }

    foreach ($tempQuests->data as $key => $object) {
        $quests[] = $object;
    }

    foreach ($tempRewards->data as $key => $object) {
        $rewards[] = $object;
    }

    foreach ($tempMinions->data as $key => $object) {
        if ($object->isActive === true && $object->isToken === false) {
            $minions[] = $object;
        }
    }

    //echo "<pre>";
    //print_r($minions);
    //echo "</pre>";

    if ($show == 'heroes' || $show == 'all') {
        echo '<h2 class="page_title">Heroes</h2>';
    }

    if ($show == 'heroes' && $mode == 'gfx') {
        echo "<div class='strategy-images heroes cf'>";
        foreach ($heroes as $hero) {
            echo "<div class='image-container'>
                        <a href='" . $hero->websites->bgknowhow . "'><img width='200' src='" . PICTURE_LOCAL_HERO . $hero->id . PICTURE_LOCAL_PORTRAIT_SUFFIX . "' class='" . (!$hero->isActive ? 'inactive-img' : '') . "'>
                        <br><span>" . $hero->name . "</span></a>";
            if ($hero->isDuosOnly) {
                echo "<div class='overlay-duo'><img src='" . PICTURE_LOCAL . "icons/duos.webp' title='Available only in Duos mode' alt='Duos only'></div>";
            }
            echo "</div>";
        }
        echo "</div>";
    } else if ($show == 'heroes' || $show == 'all') {
        ?>
        <table class="strategy-table">
            <thead>
            <tr>
                <th colspan="5">Heroes</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Health</th>
                <th>Armor</th>
                <th>HP<br>Cost</th>
                <th>Hero Power<br>Text</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($heroes as $hero) {
                echo '<tr style="cursor: pointer;" onclick="window.location.href=\'' . $hero->websites->bgknowhow . '\'">';
                echo "<td><a class='hoverimage' href='" . $hero->websites->bgknowhow . "'>$hero->name</a></td>";
                echo "<td style='text-align: center'>$hero->health</td>";
                echo "<td style='text-align: center'>$hero->armor</td>";
                echo "<td style='text-align: center'>" . ($hero->heroPowerCost !== null ? $hero->heroPowerCost : '-') . "</td>";
                echo "<td class='text' title='" . htmlspecialchars($hero->heroPowerText, ENT_QUOTES, 'utf-8') . "'>$hero->heroPowerText</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <br>

        <?php
    }

    if ($show == 'minions' || $show == 'all') {
        echo '<h2 class="page_title">Minions' . ($minionPool !== 'Everything' ? ' - ' . $minionPool . 's' : '') . ($minionAbility !== '' ? ' (' . $minionAbility . ')' : '') . '</h2>';
    }

    $tierFrom = $minionTier !== 0 ? $minionTier : 1;
    $tierTo   = $minionTier !== 0 ? $minionTier : 7;

    if ($show == 'minions' && $mode == 'gfx') {

        echo "<div class='typeFilter'>";
        echo "<a href='/bgstrategy/?show=minions&type=beast'><img src='" . PICTURE_LOCAL . "misc/pool_beasts.png' alt='Beasts' title='Beasts'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=demon'><img src='" . PICTURE_LOCAL . "misc/pool_demons.png' alt='Demons' title='Demons'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=dragon'><img src='" . PICTURE_LOCAL . "misc/pool_dragons.png' alt='Dragons' title='Dragons'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=elemental'><img src='" . PICTURE_LOCAL . "misc/pool_elementals.png' alt='Elementals' title='Elementals'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=mech'><img src='" . PICTURE_LOCAL . "misc/pool_mechs.png' alt='Mechs' title='Mechs'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=murloc'><img src='" . PICTURE_LOCAL . "misc/pool_murlocs.png' alt='Murlocs' title='Murlocs'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=naga'><img src='" . PICTURE_LOCAL . "misc/pool_naga.png' alt='Nagas' title='Nagas'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=pirate'><img src='" . PICTURE_LOCAL . "misc/pool_pirates.png' alt='Pirates' title='Pirates'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=quilboar'><img src='" . PICTURE_LOCAL . "misc/pool_quilboars.png' alt='Quilboars' title='Quilboars'></a>";
        echo "<a href='/bgstrategy/?show=minions&type=undead'><img src='" . PICTURE_LOCAL . "misc/pool_undeads.png' alt='Undeads' title='Undeads'></a>";
        echo "</div>";

        for ($i = $tierFrom; $i <= $tierTo; $i++) {
            echo "<div style='width: 101%; display: flex; justify-content: center;'>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<img src='" . PICTURE_LOCAL . "icons/star.webp' style='width: 50px; margin-top: 15px; margin-bottom: 25px;'>";
            }
            echo "</div>";
            echo "<div class='strategy-images minions cf'>";
            foreach ($minions as $minion) {
                if ($minionAbility !== '') {
                    $key = 'has' . $minionAbility;
                    if ($minion->abilities->$key) {
                        $hasAbility = true;
                    } else {
                        $hasAbility = false;
                    }
                } else {
                    $hasAbility = true;
                }
                if ($minion->tier === $i && ($minionPool === 'Everything' || $minion->pools[0] === $minionPool || @$minion->pools[1] === $minionPool) && ($hasAbility) && ($isDuos === $minion->isDuosOnly || !$isDuos)) {
                    echo "<div class='image-container'>";
                    echo '<div class="tile" onclick="window.location.href=\'' . $minion->websites->bgknowhow . '\'">';
                    echo "<div class='name'>" . $minion->name . "</div>";
                    echo "<div class='mask'></div>";
                    //                        echo "<a href='" . $minion->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_MINION . $minion->id . PICTURE_LOCAL_TILE_SUFFIX . "'></a>";
                    echo "<div class='image' style='background-image: url(" . PICTURE_LOCAL_MINION . $minion->id . PICTURE_LOCAL_TILE_SUFFIX . ")'></div>";
                    if ($minion->isDuosOnly) {
                        echo "<div class='overlay-duo'><img src='" . PICTURE_LOCAL . "icons/duos.webp' title='Available only in Duos mode' alt='Duos only'></div>";
                    }
                    echo "</div>";
                    echo "</div>";
                }
            }
            echo "</div>";
        }
    } else if ($show == 'minions' || $show == 'all') {
        ?>
        <br>
        <table class="strategy-table">
            <thead>
            <tr>
                <th colspan="7">Minions</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Tier</th>
                <th>Type</th>
                <th>Pool</th>
                <th>Attack</th>
                <th>Health</th>
                <th>Text</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($minions as $minion) {
                echo '<tr style="cursor: pointer;" onclick="window.location.href=\'' . $minion->websites->bgknowhow . '\'">';
                echo "<td><a class='hoverimage' href='" . $minion->websites->bgknowhow . "'>$minion->name</a></td>";
                echo "<td style='text-align: center'>$minion->tier</td>";
                echo "<td>$minion->type</td>";
                echo "<td>$minion->pool</td>";
                echo "<td style='text-align: center'>$minion->attack</td>";
                echo "<td style='text-align: center'>$minion->health</td>";
                echo "<td class='text' title='" . htmlspecialchars($minion->text, ENT_QUOTES, 'utf-8') . "'>$minion->text</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <br>
        <?php
    }

    if ($show == 'buddies' || $show == 'all') {
        echo '<h2 class="page_title">Buddies</h2>';
    }

    if ($show == 'buddies' && $mode == 'gfx') {
        echo "<div class='strategy-images buddies cf'>";
        foreach ($buddies as $buddy) {
            echo "<div><a href='" . $buddy->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_BUDDY . $buddy->id . PICTURE_LOCAL_RENDER_SUFFIX_80 . "' class='" . (!$buddy->isActive ? 'inactive-img' : '') . "'><br><span>$buddy->name<br>Hero: " . $buddy->hero . "</span></a></div>";
        }
        echo "</div>";
    } else if ($show == 'buddies' || $show == 'all') {
        ?>
        <br>
        <table class="strategy-table">
            <thead>
            <tr>
                <th colspan="6">Buddies</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Tier</th>
                <th>Type</th>
                <th>Attack</th>
                <th>Health</th>
                <th>Text</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($buddies as $buddy) {
                echo '<tr style="cursor: pointer;" onclick="window.location.href=\'' . $buddy->websites->bgknowhow . '\'">';
                echo "<td><a href='" . $buddy->websites->bgknowhow . "'>$buddy->name</a></td>";
                echo "<td style='text-align: center'>$buddy->tier</td>";
                echo "<td style='text-align: center'>$buddy->type</td>";
                echo "<td style='text-align: center'>$buddy->attack</td>";
                echo "<td style='text-align: center'>$buddy->health</td>";
                echo "<td class='text' title='" . htmlspecialchars($buddy->text, ENT_QUOTES, 'utf-8') . "'>$buddy->text</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <br>
        <?php
    }

    // Odds for Secrets of Norgannon
    $numberOfAnomalies = 0;
    foreach ($tempAnomalies->data as $key => $object) {
//        if ($object->isActive) {
        $numberOfAnomalies++;
//        }
    }

    if ($show == 'anomalies' || $show == 'all') {
        echo '<h2 class="page_title">Anomalies</h2>';
        echo '<p>One anomaly is randomly choosen from the pool of active anomalies before the hero selection and will apply to all players for the remainder of the whole game. The anomaly called <a class=\'hoverimage\' href="/bgstrategy/anomaly/?id=8">Secrets of Norgannon</a> is five times as likely to be selected as any other anomalies. Which means with currently ' . $numberOfAnomalies . ' different anomalies active any anomaly would have a chance of ' . number_format(100 / $numberOfAnomalies, 2) . '% to be active, but due to this special rule \'Secrets\' has a 5/' . $numberOfAnomalies + 4 . ' or ' . number_format(5 / ($numberOfAnomalies + 4) * 100, 2) . '% chance and any other anomaly a 1/' . $numberOfAnomalies + 4 . ' or ' . number_format(1 / ($numberOfAnomalies + 4) * 100, 2) . '% chance to show up. Three new anomalies will be added to the pool every week and feature an increased appearance rate until the next release.
        <br><br>Depending on the anomaly, some heroes, minion types or even single minions can be banned. There is also a system in place to increase the chances of more complex anomalies for high MMR lobbies (~6000 or more).';
    }

    if ($show == 'anomalies' && $mode == 'gfx') {
        echo "<div class='strategy-images anomalies cf'>";
        foreach ($anomalies as $anomaly) {
            echo "<div><a href='" . $anomaly->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_ANOMALY . $anomaly->id . PICTURE_LOCAL_RENDER_SUFFIX_80 . "' class='" . (!$anomaly->isActive ? 'inactive-img' : '') . "' alt='" . htmlspecialchars($anomaly->name, ENT_QUOTES, 'utf-8') . ": " . htmlspecialchars($anomaly->text, ENT_QUOTES, 'utf-8') . "'><span>" . $anomaly->name . "</span></a></div>";
        }
        echo "</div><br><br>";
    } else if ($show == 'anomalies' || $show == 'all') {
        ?>
        <br>
        <table class="strategy-table">
            <thead>
            <tr>
                <th colspan="2">Anomalies</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Text</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($anomalies as $anomaly) {
                echo '<tr style="cursor: pointer;" onclick="window.location.href=\'' . $anomaly->websites->bgknowhow . '\'">';
                echo "<td>$anomaly->name</td>";
                echo "<td class='text' title='" . htmlspecialchars($anomaly->text, ENT_QUOTES, 'utf-8') . "'>$anomaly->text</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <br>
        <?php
    }

    if ($show == 'spells' || $show == 'all') {
        echo '<h2 class="page_title">Spells</h2>';
        echo '<p>One spell from your Tier or lower will be present in the Tavern on each refresh. The cost to buy them varies from 1 to 7 Gold. While some spells like <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus\' Tribute</a> can have a huge impact on the outcome of your next fight, cheaper ones like  <a class="hoverimage" href="/bgstrategy/spell/?id=3">Tavern Coin</a> or <a class="hoverimage" href="/bgstrategy/spell/?id=8">Careful Investment</a> are a good alternative to rolling your last couple of Gold away, at the end of your Tavern phase.<br><br></p>';
    }

    if ($show == 'spells' && $mode == 'gfx') {
        echo "<div class='strategy-images spells cf'>";
        foreach ($spells as $spell) {
            echo "<div class='image-container'><a href='" . $spell->websites->bgknowhow . "'><img width='256' height='333' src='" . PICTURE_LOCAL_SPELL . $spell->id . PICTURE_LOCAL_RENDER_SUFFIX_80 . "' class='" . (!$spell->isActive ? 'inactive-img' : '') . "' alt='" . htmlspecialchars($spell->name, ENT_QUOTES, 'utf-8') . ": " . htmlspecialchars($spell->text, ENT_QUOTES, 'utf-8') . "'><span>" . $spell->name . "</span></a>";
            if ($spell->isDuosOnly) {
                echo "<div class='overlay-duo'><img src='" . PICTURE_LOCAL . "icons/duos.webp' title='Available only in Duos mode' alt='Duos only'></div>";
            }
            echo "</div>";
        }
        echo "</div><br><br>";
    } else if ($show == 'spells' || $show == 'all') {
        ?>
        <br>
        <table class="strategy-table">
            <thead>
            <tr>
                <th colspan="2">Spells</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Text</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($spells as $spell) {
                echo '<tr style="cursor: pointer;" onclick="window.location.href=\'' . $spell->websites->bgknowhow . '\'">';
                echo "<td>$spell->name</td>";
                echo "<td class='text' title='" . htmlspecialchars($spell->text, ENT_QUOTES, 'utf-8') . "'>$spell->text</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <br>
        <?php
    }

    if ($show == 'quests' || $show == 'all') {
        echo '<h2 class="page_title">Quests</h2>';
        echo '<p>Quests are offered at the beginning of turn 4 (6 gold). The quest texts utilize placeholders like {0} (for example in the text "Spend {0} Gold."), which are replaced by an actual numeric value based on the armor value of the hero you are playing (heroes with more base armor will receive easier to complete quests) and the minion types in the lobby. The baseline value for each quest is documented on the details page.</p>';
    }

    if ($show == 'quests' && $mode == 'gfx') {
        echo "<div class='strategy-images anomalies cf'>";
        foreach ($quests as $quest) {
            echo "<div><img src='" . PICTURE_LOCAL_QUEST . $quest->id . PICTURE_LOCAL_RENDER_SUFFIX_80 . "' class='" . (!$quest->isActive ? 'inactive-img' : '') . "' alt='$quest->name : " . htmlspecialchars($quest->text, ENT_QUOTES, 'utf-8') . "'><span>" . $quest->name . "</span></div>";
        }
        echo "</div><br><br>";
    } else if ($show == 'quests' || $show == 'all') {
        ?>
        <br>
        <table class="strategy-table">
            <thead>
            <tr>
                <th colspan="2">Quests</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Text</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($quests as $quest) {
                echo '<tr style="cursor: pointer;">';
                echo "<td>$quest->name</td>";
                echo "<td class='text' title='" . htmlspecialchars($quest->text, ENT_QUOTES, 'utf-8') . "'>$quest->text</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <br>
        <?php
    }

    if ($show == 'rewards' || $show == 'all') {
        echo '<h2 class="page_title">Rewards</h2>';
    }

    if ($show == 'rewards' && $mode == 'gfx') {
        echo "<div class='strategy-images anomalies cf'>";
        foreach ($rewards as $reward) {
            echo "<div><img src='" . PICTURE_LOCAL_REWARD . $reward->id . PICTURE_LOCAL_RENDER_SUFFIX_80 . "' class='" . (!$reward->isActive ? 'inactive-img' : '') . "' alt='$reward->name : " . htmlspecialchars($reward->text, ENT_QUOTES, 'utf-8') . "'><span>" . $reward->name . "</span></div>";
        }
        echo "</div><br><br>";
    } else if ($show == 'rewards' || $show == 'all') {
        ?>
        <br>
        <table class="strategy-table">
            <thead>
            <tr>
                <th colspan="2">Rewards</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Text</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($rewards as $reward) {
                echo '<tr style="cursor: pointer;">';
                echo "<td>$reward->name</td>";
                echo "<td class='text' title='" . htmlspecialchars($quest->text, ENT_QUOTES, 'utf-8') . "'>$reward->text</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <?php
    }


}
?>
<br><br>

<?php
include_once('../footer.php');
?>
