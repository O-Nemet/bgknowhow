<?php
include_once('../../header.php');
?>

<?php
// insert vote
include_once('../strategy_handling.php');
?>

<?php
// update votes
if ($selectedStrat && $selectedVote) {
    setVote($selectedStrat, $selectedVote);
}

// get data
if ($selectedId) {
    $stmt = getEntityData($selectedId, $unitType);

    $stmt->bind_result($selectedId, $name, $type, $text, $textGolden, $tier, $attack, $health, $blizzardId, $isActive, $artist, $heroId, $heroName, $blizzardIdHero);

    $stmt->fetch()
    ?>
    <div class="card_wrapper">
        <h1 class="cardname"><?= $name ?> <?= $isActive === 0 ? '[inactive]' : '' ?></h1>
        <div class="card_picture_big2">
            <img src="<?= PICTURE_LOCAL_BUDDY . $blizzardId . PICTURE_LOCAL_BIG_SUFFIX ?>" alt="The picture of <?= $name ?>">
        </div>
        <div class="card_info">
            <div class="container"><span class="card_attack card_health" style="padding-left: 5px;"><?= $attack ?></span>
                <img class="img_health" style="margin-left: -3px;" src="<?= PICTURE_LOCAL ?>icons/attack.png">
            </div>
            <br><br>
            <div class="container"><span class="card_attack card_health"><?= $health ?></span>
                <img class="img_health" src="<?= PICTURE_LOCAL ?>icons/health.png">
            </div>
            <div class="container">
                <a href="/bgstrategy/hero/?id=<?= $heroId ?>"><img class="img_health" src="<?= PICTURE_LOCAL_HP . $blizzardIdHero . PICTURE_LOCAL_RENDER_SUFFIX_80 ?> alt="<?= $heroName ?>"></a>
            </div>
            <br><br>
            <?= $artist ? 'Artist:' : '' ?><span class="price_font"><?= $artist ?? '' ?></span><br><br>
        </div>
        <div class="card_picture">
            <img src="<?= PICTURE_LOCAL_BUDDY . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" alt="<?= $text ?>">
        </div>
        <div class="card_flavor">
            <?= $textGolden ? 'Golden:' : '' ?><br><span class="price_font" style="font-style: normal"><?= $textGolden ?? '' ?></span>
        </div>
    </div>

    <?php
    include_once('../strategy_and_voting.php');
}
?>

</div> <!-- / content -->
<?php
include_once('../../footer.php');
?>
