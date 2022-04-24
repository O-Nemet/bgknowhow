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

//var_dump($postText);
//var_dump($postId);
//var_dump($selectedStrat);
//var_dump($selectedVote);


if ($postText && $postId) {
    $selectedId = $postId;

    if ($stmt = $mysqli->prepare("INSERT INTO bg_strategy (id_hero, text)
                                    VALUES (?
                                            ,?
                                            )")) {
        $stmt->bind_param('is', $postId, $postText);
        $stmt->execute();
        $stmt->close();

//        return true;
    } else {
        echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
        return false;
    }
}

if ($selectedStrat && $selectedVote) {
    echo "update";
    if ($stmt = $mysqli->prepare("UPDATE bg_strategy
                                     SET votes_up = votes_up + 1
                                   WHERE id = ?")) {
        $stmt->bind_param('i', $selectedStrat);
        $stmt->execute();
        $stmt->close();

//        return true;
    } else {
        echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
        return false;
    }
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
                            ORDER BY bgh.name ASC")) {
    $stmt->bind_param("i", $selectedId);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($heroId, $name, $health, $armorTier, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive, $artist, $flavor);

    while ($stmt->fetch()) {

        ?>
        <br>

        <div class="card_wrapper">
            <h1 class="cardname"><?= $name ?></h1>
            <div class="card_picture_big">
                <img src="<?= PICTURE_URL_BIG . $blizzardId . ".webp" ?>" style="border-radius: 0px 0px 0px 10px;" width="460" height="305" alt="The picture of <?= $name ?>">
            </div>
            <div style="position: absolute; width: 200px; right: 249px; top: 10px;">
                <br>
                <b>Health:</b> <span id="count_listed"><?= $health ?></span><br><br>
                Armor: <span id="count_listed_foil"><?= getArmor($armorTier) ?></span><br><br>
                Artist: <span id="low_price" class="price_font"><?= $artist ?></span><br><br>
                Flavor: <span id="avg_price" class="price_font" style="text-align: left; font-style: italic"><?= $flavor ?></span><br>
            </div>
            <div style="position: absolute; right: 5px; top: 25px;">
                <img src="<?= PICTURE_LOCAL_HP . $blizzardIdHp . PICTURE_LOCAL_RENDER_SUFFIX ?>" style="width: 240px; height:340px" alt="The hero power of <?= $name ?>">
            </div>

        </div>

        <div style="margin: 390px auto 0;width: 55%;">
            <form method="post" action="index.php" novalidate>
                <span>Add your strategy or tips:</span>
                <textarea name="text" autocomplete="strategy-text" class="strategy-input" placeholder="What is good with this hero?&#10;What is something only it can do?&#10;What are its weaknesses?"></textarea>
                <input type="hidden" name="id" value="<?= $selectedId ?>">
                <button type="submit" id="strategy-submit" class="button_sell">SUBMIT your strategy</button>
            </form>
        </div>

        <div style="padding-bottom: 20px;">
            <?php
            if ($stmt = $mysqli->prepare("SELECT bgs.id,
                                     bgs.text,
                                     bgs.votes_up,
                                     bgs.votes_down,
                                     bgs.votes_trash
                                FROM bg_strategy bgs
                               WHERE bgs.id_hero = ?
                                 AND bgs.flag_active = 1
                            ORDER BY (bgs.votes_up - bgs.votes_down) DESC")) {
                $stmt->bind_param("i", $selectedId);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($id, $text, $votesUp, $votesDown, $votesTrash);

                while ($stmt->fetch()) {
                    ?>
                    <div class="strategy-wrapper cf">
                        <div class="strategy-item">
                            <span><?= nl2br($text) ?></span>
                        </div>
                        <div class="vote-buttons">
                            <div class="upvotes" title="Upvote"><p class="button"><a href="//bgknowhow.com/bgstrategy/hero/?id=<?= $heroId ?>&strat=<?= $id ?>&vote=1">&and; (<?= $votesUp ?>)</a></p></div>
                            <div class="downvotes" title="Downvote"><p class="button"><a href="//bgknowhow.com/bgstrategy/hero/?id=<?= $heroId ?>&strat=<?= $id ?>&vote=2">&or; (<?= str_pad($votesDown, strlen($votesUp), '0', STR_PAD_LEFT) ?>)</a></p></div>
                            <div class="flagvotes" title="Flag for bad content or outdated information"><p class="button"><a href="//bgknowhow.com/bgstrategy/hero/?id=<?= $heroId ?>&strat=<?= $id ?>&vote=0">X (<?= $votesTrash ?>)</a></p></div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <?php
    }
}
?>

<?php
include_once('../../footer.php');
?>

