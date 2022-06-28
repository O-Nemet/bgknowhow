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

    $stmt->bind_result($selectedId, $name, $nameShort, $health, $armorTier, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive, $artist, $flavor);

    $stmt->fetch();
    ?>

    <div class="card_wrapper">
        <div class="card_info">
            <div class="container"><span class="card_attack card_health"><?= $health ?></span>
                <img class="img_health" src="<?= PICTURE_LOCAL ?>icons/health.png">
            </div>
            <br><br>
            <div class="container"><span class="card_attack" style="padding-left: 1px;"><?= getArmor($armorTier) ?></span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp">
            </div>
            <br><br><br>
            <?= $artist ? 'Artist:' : '' ?><br><span class="price_font"><?= $artist ?? '' ?></span>
            <br><br>
        </div>
        <h1 class="cardname"><?= $name ?> <?= $name != $nameShort ? '(' . $nameShort . ')' : '' ?></h1>
        <div class="card_picture_big">
            <img src="<?= PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_BIG_SUFFIX ?>" alt="The picture of <?= $name ?>">
        </div>
        <div class="card_picture">
            <img src="<?= PICTURE_LOCAL_HP . $blizzardIdHp . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" alt="<?= $hpText ?>">
        </div>
        <div class="card_flavor">
            <?= $flavor ? 'Flavor:' : '' ?><br><span class="price_font" style="text-align: left; font-style: italic"><?= $flavor ?? '' ?></span>
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
