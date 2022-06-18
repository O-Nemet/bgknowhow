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
    $stmt = getEntityData($selectedId);

    $stmt->bind_result($selectedId, $name, $health, $armorTier, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive, $artist, $flavor);

    $stmt->fetch();
    ?>

    <div class="card_wrapper">
        <h1 class="cardname"><?= $name ?></h1>
        <div class="card_picture_big">
            <img src="<?= PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_BIG_SUFFIX ?>" alt="The picture of <?= $name ?>">
        </div>
        <div class="card_info">
            Health: <span class="card_attack"><?= $health ?></span><br><br>
            Armor: <span class="card_attack"><?= getArmor($armorTier) ?></span><br><br>
            <?= $artist ? 'Artist:' : '' ?> <span id="low_price" class="price_font"><?= $artist ?? '' ?></span><br><br>
            <?= $flavor ? 'Flavor:' : '' ?><span id="avg_price" class="price_font" style="text-align: left; font-style: italic"><?= $flavor ?? '' ?></span><br>
        </div>
        <div class="card_picture">
            <img src="<?= PICTURE_LOCAL_HP . $blizzardIdHp . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" alt="The hero power of <?= $name ?>">
        </div>
    </div>

    <?php
    include_once('../strategy_and_voting.php');
}
?>

</div> <!-- / content -->
<?php

?>

<?php
include_once('../../footer.php');
?>
