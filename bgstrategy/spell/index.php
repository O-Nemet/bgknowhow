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

    $stmt->bind_result($selectedId, $name, $tier, $cost, $type, $text, $blizzardId, $isActive, $artist);

    $stmt->fetch()
    ?>
    <div class="card_wrapper">
        <h1 class="cardname"><?= $name ?> <?= $isActive === 0 ? '[inactive]' : '' ?></h1>
        <div class="card_picture_big2">
            <img src="<?= PICTURE_LOCAL_SPELL . $blizzardId . PICTURE_LOCAL_BIG_SUFFIX ?>" alt="The picture of <?= $name ?>">
        </div>
        <div class="card_info">
            <?= $artist ? 'Artist:' : '' ?> <span class="price_font"><?= $artist ?? '' ?></span><br><br>
        </div>
        <div class="card_picture">
            <img src="<?= PICTURE_LOCAL_SPELL . $blizzardId . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" alt="<?= $text ?>">
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
