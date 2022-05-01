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

            foreach ($tempMinions->data as $key => $object) {
                if ($object->isActive === true && $object->isToken !== true)
                    $minions[] = $object;
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
                    echo "<div><a href='" . $hero->websites->bgknowhow . "'><img width='200' src='" . PICTURE_LOCAL_HERO . $hero->blizzardId . PICTURE_LOCAL_PORTRAIT_SUFFIX . "'><br><span>" . $hero->name . "</span></a></div>";
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
                        <th>Text</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($heroes as $hero) {
                        echo '<tr style="cursor: pointer;" onclick="window.location.href=\'' . $hero->websites->bgknowhow . '\'">';
                        echo "<td><a href='" . $hero->websites->bgknowhow . "'>$hero->name</a></td>";
                        echo "<td>$hero->health</td>";
                        echo "<td>$hero->armor</td>";
                        echo "<td class='text'>$hero->heroPowerText</td>";
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
                echo "<div class='strategy-images cf'>";
                foreach ($buddies as $buddy) {
                    echo "<div><a href='" . $buddy->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_BUDDY . $buddy->blizzardId . PICTURE_LOCAL_RENDER_SUFFIX . "'></a></div>";
                }
                echo "</div>";
            } else if ($show == 'buddies' || $show == 'all') {
                ?>
                <br>
                <table class="strategy-table">
                    <thead>
                    <tr>
                        <th colspan="5">Buddies</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Tier</th>
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
                        echo "<td>$buddy->tier</td>";
                        echo "<td>$buddy->attack</td>";
                        echo "<td>$buddy->health</td>";
                        echo "<td class='text'>$buddy->text</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <br>
                <?
            }
            ?>

            <?php
            if ($show == 'minions' || $show == 'all') {
                echo '<h2 class="page_title">Minions</h2>';
            }

            if ($show == 'minions' && $mode == 'gfx') {
                echo "<div class='strategy-images cf'>";
                foreach ($minions as $minion) {
                    echo '<div class="tile" onclick="window.location.href=\'' . $minion->websites->bgknowhow . '\'">';
                        echo "<div class='name'>". $minion->name . "</div>";
                        echo "<div class='mask'></div>";
//                        echo "<a href='" . $minion->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_MINION . $minion->blizzardId . PICTURE_LOCAL_TILE_SUFFIX . "'></a>";
                        echo "<div class='image' style='background-image: url(" . PICTURE_LOCAL_MINION . $minion->blizzardId . PICTURE_LOCAL_TILE_SUFFIX . ")'></div>";
                    echo "</div>";
                }
                echo "</div>";
            } else if ($show == 'minions' || $show == 'all') {
                ?>
                <br>
                <table class="strategy-table">
                    <thead>
                    <tr>
                        <th colspan="5">Minions</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Tier</th>
                        <th>Attack</th>
                        <th>Health</th>
                        <th>Text</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($minions as $minion) {
                        echo '<tr style="cursor: pointer;" onclick="window.location.href=\'' . $minion->websites->bgknowhow . '\'">';
                        echo "<td><a href='" . $minion->websites->bgknowhow . "'>$minion->name</a></td>";
                        echo "<td>$minion->tier</td>";
                        echo "<td>$minion->attack</td>";
                        echo "<td>$minion->health</td>";
                        echo "<td class='text'>$minion->text</td>";
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
