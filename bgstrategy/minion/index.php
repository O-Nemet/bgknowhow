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

    $stmt->bind_result($id, $name, $nameShort, $type, $type2, $pool, $pool2, $text, $textGolden, $tier, $attack, $health, $isToken, $isActive, $hasBattlecry, $hasDeathrattle, $hasTaunt, $hasShield, $hasWindfury, $hasReborn, $hasAvenge, $blizzardId, $flavor, $artist);

    $stmt->fetch()
    ?>
    <div class="card_wrapper">
        <h1 class="cardname"><?= $name ?> <?= $name != $nameShort ? '(' . $nameShort . ')' : '' ?></h1>
        <div class="card_picture_big2">
            <img src="<?= PICTURE_LOCAL_MINION . $blizzardId . PICTURE_LOCAL_BIG_SUFFIX ?>" alt="The picture of <?= $name ?>">
        </div>
        <div class="card_info">
            <!--            <div class="container"><span class="card_attack card_health" style="padding-left: 5px;">--><?//= $attack ?><!--</span>-->
            <!--                <img class="img_health" style="margin-left: -3px;" src="--><?//= PICTURE_LOCAL ?><!--icons/attack.png">-->
            <!--            </div>-->
            <!--            <div class="container"><span class="card_attack card_health">--><?//= $health ?><!--</span>-->
            <!--                <img class="img_health" src="--><?//= PICTURE_LOCAL ?><!--icons/health.png">-->
            <!--            </div>-->
            <!--            <br>-->
            Type:<br><span class="price_font"><?= ($type ?? 'None') ?><?= ($type2 ? '<br>' . $type2 : '') ?></span><br><br>
            Pool:<br><span class="price_font"><?= ($pool ?? 'All') ?><?= ($pool2 ? '<br>' . $pool2 : '') ?></span><br><br>
            <?= $artist ? 'Artist:' : '' ?><br><span class="price_font"><?= $artist ?? '' ?></span><br>
            <span style="color: white; text-shadow: none"><?= $blizzardId ?></span>
        </div>
        <div class="card_picture">
            <img src="<?= PICTURE_LOCAL_MINION . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" alt="<?= $text ?>">
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
