<?php
include_once('../header.php');
?>

<?php

$buddy  = $_GET['buddy'] ?? '';
$minion = $_GET['minion'] ?? '';

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
    $minionTier = ($minionTier > 0 && $minionTier < 7) ? $minionTier : 0;
} else {
    $minionTier = 0;
}

if (!empty($buddy)) {
    echo "buddy " . $buddy;
} else if (!empty($minion)) {
    echo "minion " . $minion;
} else {
    foreach ($tempHeroes->data as $key => $object) {
        if ($object->isActive === true) {
            $heroes[] = $object;
        }
    }

    foreach ($tempBuddies->data as $key => $object) {
        $buddies[] = $object;
    }

    foreach ($tempMinions->data as $key => $object) {
        if ($object->isActive === true && $object->isToken !== true) {
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
        echo "<div class='strategy-images cf'>";
        foreach ($heroes as $hero) {
            echo "<div><a href='" . $hero->websites->bgknowhow . "'><img width='200' src='" . PICTURE_LOCAL_HERO . $hero->id . PICTURE_LOCAL_PORTRAIT_SUFFIX . "'><br><span>" . $hero->name . "</span></a></div>";
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
    $tierTo   = $minionTier !== 0 ? $minionTier : 6;

    if ($show == 'minions' && $mode == 'gfx') {
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
                if ($minion->tier === $i && ($minionPool === 'Everything' || $minion->pools[0] === $minionPool || @$minion->pools[1] === $minionPool) && ($hasAbility)) {
                    echo '<div class="tile" onclick="window.location.href=\'' . $minion->websites->bgknowhow . '\'">';
                    echo "<div class='name'>" . $minion->name . "</div>";
                    echo "<div class='mask'></div>";
//                        echo "<a href='" . $minion->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_MINION . $minion->id . PICTURE_LOCAL_TILE_SUFFIX . "'></a>";
                    echo "<div class='image' style='background-image: url(" . PICTURE_LOCAL_MINION . $minion->id . PICTURE_LOCAL_TILE_SUFFIX . ")'></div>";
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
            echo "<div><a href='" . $buddy->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_BUDDY . $buddy->id . PICTURE_LOCAL_RENDER_SUFFIX_80 . "'></a></div>";
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
        <?php
    }

}
?>
<br><br>

<?php
include_once('../footer.php');
?>
