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

    if ($stmt = $mysqli->prepare("INSERT INTO bg_strategy (id_buddy, text)
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

if ($stmt = $mysqli->prepare("SELECT bgb.id,
                                     bgb.name,
                                     bgb.type,
                                     bgb.text,
                                     bgb.text_golden,
                                     bgb.tier,
                                     bgb.attack,
                                     bgb.health,
                                     bgb.id_blizzard,
                                     bgb.flag_active
                                FROM bg_buddies bgb
                               WHERE bgb.id = ?
                               LIMIT 1")) {
    $stmt->bind_param("i", $selectedId);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($selectedId, $name, $type, $text, $textGolden, $tier, $attack, $health, $blizzardId, $isActive);

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
                Attack: <span id="count_listed_foil"><?= $attack ?></span><br><br>
                <b>Health:</b> <span id="count_listed"><?= $health ?></span><br><br>
                Artist: <span id="low_price" class="price_font"><?= isset($artist) ?></span><br><br>
                Flavor: <span id="avg_price" class="price_font" style="text-align: left; font-style: italic"><?= isset($flavor) ?></span><br>
            </div>
            <div style="position: absolute; right: -5px; top: -5px;">
                <img src="<?= PICTURE_LOCAL_BUDDY . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX ?>" style="width: 250px; height:380px" alt="The buddy <?= $name ?>">
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
