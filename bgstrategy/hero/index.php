<?php
include_once('../../header.php');
?>

<?php
$selectedId = $_GET['id'] ?? '';
$selectedId = htmlspecialchars($selectedId);

$selectedStrat = $_GET['strat'] ?? '';
$selectedStrat = (int)htmlspecialchars($selectedStrat);

$selectedVote = $_GET['vote'] ?? '';
$selectedVote = htmlspecialchars($selectedVote);

$postText = $_POST['text'] ?? '';
$postText = htmlspecialchars($postText);

$postId = $_POST['id'] ?? '';
$postId = (int)htmlspecialchars($postId);

if ($postText && $postId) {
    $selectedId = $postId;

    if ($stmt = $mysqli->prepare("INSERT INTO bg_strategy (id_hero, text)
                                    VALUES (?
                                           ,?
                                           )")) {
        $stmt->bind_param('is', $postId, $postText);
        $stmt->execute();
        $stmt->close();
    } else {
        echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
        return false;
    }
}

// update votes
if ($selectedStrat && $selectedVote) {
    setVote($selectedStrat, $selectedVote);
}

if ($stmt = $mysqli->prepare("SELECT bgh.id,
                                     bgh.name,
                                     bgh.health,
                                     bgh.armor_tier,
                                     bgh.id_blizzard,
                                     bgh.hp_cost,
                                     bgh.hp_text,
                                     bgh.hp_id_blizzard,
                                     bgh.flag_active,   
                                     bgh.artist,
                                     bgh.flavor
                                FROM bg_heroes bgh
                               WHERE bgh.id = ?
                               LIMIT 1")) {
    $stmt->bind_param("i", $selectedId);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($selectedId, $name, $health, $armorTier, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive, $artist, $flavor);

    while ($stmt->fetch()) {
        ?>
        <br>

        <div class="card_wrapper">
            <h1 class="cardname"><?= $name ?></h1>
            <div class="card_picture_big">
                <img src="<?= PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_BIG_SUFFIX ?>" style="border-radius: 0px 0px 0px 10px;" width="460" height="305" alt="The picture of <?= $name ?>">
            </div>
            <div class="card_info">
                <br>
                <b>Health:</b> <span><?= $health ?></span><br><br>
                Armor: <span id="count_listed_foil"><?= getArmor($armorTier) ?></span><br><br>
                Artist: <span id="low_price" class="price_font"><?= $artist ?? '' ?></span><br><br>
                Flavor: <span id="avg_price" class="price_font" style="text-align: left; font-style: italic"><?= $flavor ?? '' ?></span><br>
            </div>
            <div style="position: absolute; right: -5px; top: -5px;">
                <img src="<?= PICTURE_LOCAL_HP . $blizzardIdHp . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" style="width: 250px; height:380px" alt="The hero power of <?= $name ?>">
            </div>
        </div>

        <?php
        include_once('../strategy_and_voting.php');
        ?>

        </div>
        <?php
    }
}
?>

<?php
include_once('../../footer.php');
?>
