<?php
include_once('../header.php');
?>

<?php
require_once('../config/db.php');
include_once('../functions.php');

$hero   = $_GET['hero'] ?? '';
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

if (!empty($hero)) {
echo "hero " . $hero;

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
                               WHERE bgh.id = ?
                            ORDER BY bgh.name ASC")) {
$stmt->bind_param("i", $hero);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $health, $armorTier, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive);

while ($stmt->fetch()) {

?>

<div class="card_wrapper">
    <h1 class="cardname"><?= $name ?></h1>
    <div class="card_picture_big" style="width: 460px; height: 305px;">
        <img src="<?= PICTURE_URL_RENDER . $blizzardId . ".png" ?>" style="border-radius: 0px 0px 0px 10px;" width="460" height="305" alt="The picture of <?= $name ?>">
    </div>
    <div class="price_graph" style="width: 458px; height: 303px; border: 1px solid #333333; background-color: #9999BB; display: none;">
        <img src="<?= IMG_PATH ?>price_graph.png" width="458" height="303" alt="Price graph for <?= $card_data[0]['name'] ?> (<?= $card_data[0]['edition'] ?>)">
    </div>
    <div style="position: absolute; left: 480px; top: 12px;">
        <img <?= $pic_path_full ?> style="border-radius: 0px 7px 7px 0px;" width="240" height="340" alt="The card <?= $card_data[0]['name'] ?> as featured in <?= $card_data[0]['edition'] ?>">
    </div>
    <div style="position: absolute; width: 200px; right: 6px; top: 10px;">
        <a href="?edition=<?= $card_data[0]['edition'] ?>"><img style="margin-left: 75px;" src="<?= IMG_PATH ?>icons/medium/<?= $card_data[0]['edition'] ?>_<?= $card_data[0]['rarity_long'] ?>.gif" title="Show all cards from <?= $card_data[0]['edition_long'] ?>" alt="<?= $card_data[0]['edition'] ?>"></a>
        <br>
        Regular copies: <span id="count_listed"><?= $card_data[0]['count_listed'] ?></span><br>
        Foil copies: <span id="count_listed_foil"><?= $card_data[0]['count_listed_foil'] ?></span><br>
        Low Price: <span id="low_price" class="price_font"><?= (is_null($card_data[0]['low_price'])) ? '-' : '$' . number_format($card_data[0]['low_price'], 2) ?></span><br>
        Avg Price: <span id="avg_price" class="price_font"><?= (is_null($card_data[0]['avg_price'])) ? '-' : '$' . number_format($card_data[0]['avg_price'], 2) ?></span><br>
        <p class="button <?= (is_null($card_data[0]['low_price'])) ? 'disabled' : '' ?>" id="buy"><a href="#"><?= (is_null($card_data[0]['low_price'])) ? 'Currently<br>not available' : 'BUY this<br>card now!' ?></a></p>
        <a class="button_sell" data-foil_ind="false" style="width: 130px; margin-left: 19px; line-height: 18px;" href="#">SELL this card</a>
        <a id="price_graph_button" style="font-size: 12px;" href="#">[Show price graph]</a>
    </div>

    <?php
    }
    }
    } else
        if (!empty($buddy)) {
            echo "buddy " . $buddy;
        } else if (!empty($minion)) {
            echo "minion " . $minion;
        } else {
            $tempHeroes  = json_decode(file_get_contents('../bgjson/output/bg_heroes_all.json'));
            $tempBuddies = json_decode(file_get_contents('../bgjson/output/bg_buddies_all.json'));
            $tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_all.json'));

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
                    echo "<div><a href='" . $hero->websites->bgknowhow . "'><img src='" . PICTURE_LOCAL_HERO . $hero->blizzardId . PICTURE_LOCAL_PORTRAIT_SUFFIX . "'><br><span>" . $hero->name . "</span></a></div>";
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

                <br><br>

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

                <br><br>

                <?
            }
            ?>

            <?php
            if ($show == 'minions' || $show == 'all') {
                echo '<h2 class="page_title">Minions</h2>';
            }

            if ($show == 'minions' && $mode == 'gfx') {
//                echo '<h2 class="page_title" style="margin-top: 40px">Minions</h2>';

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
