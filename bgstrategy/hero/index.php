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

    $stmt->bind_result($selectedId, $name, $nameShort, $health, $armorTier, $armor, $armorMMR, $armorDuos, $blizzardId, $hpCost, $hpText, $blizzardIdHp, $isActive, $isDuosOnly, $artist, $flavor, $buddyId, $buddyName, $blizzardIdBuddy);

    $stmt->fetch();
    ?>

    <div class="card_wrapper">
        <div class="card_info">
            <div class="container" title="Health">
                <span class="card_attack card_health"><?= $health ?></span>
                <img class="img_health" src="<?= PICTURE_LOCAL ?>icons/health.png" alt="Health icon">
            </div>
            <br>
            <div class="container" title="Armor">
                <span class="card_attack" style="padding-left: 1px;"><?= $armor ?></span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor.webp" alt="Armor icon">
            </div>
            <?php
            if ($armorMMR) {
                ?>
                <br>
                <div class="container" title="Armor on high MMR">
                    <span class="card_attack" style="padding-left: 1px;"><?= $armorMMR ?></span>
                    <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/armor_mmr.webp" alt="Armor icon for high MMR">
                </div>
                <?php
            }
            ?>
            <div class="container" title="Armor in Duos mode">
                <span class="card_attack" style="padding-left: 1px;"><?= $armorDuos ?></span>
                <img class="img_armor" src="<?= PICTURE_LOCAL ?>icons/duos.webp" alt="Armor icon">
            </div>
            <br><br><br>
            <?= $artist ? 'Artist:' : '' ?><br><span class="price_font"><?= $artist ?? '' ?></span>
            <br><br>
        </div>
        <h1 class="cardname"><?= $name ?> <?= $name != $nameShort ? '(' . $nameShort . ')' : '' ?> <?= $isActive === 0 ? '[inactive]' : '' ?></h1>
        <h1 class="mobile_only cardname_mobile"><?= $name ?> <?= $name != $nameShort ? '(' . $nameShort . ')' : '' ?></h1>
        <div class="card_picture_big">
            <img src="<?= PICTURE_LOCAL_HERO . $blizzardId . PICTURE_LOCAL_BIG_SUFFIX ?>" alt="The picture of <?= $name ?>">
        </div>
        <div class="card_picture">
            <img src="<?= PICTURE_LOCAL_HP . $blizzardIdHp . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" alt="<?= $hpText ?>">
        </div>
        <div class="card_buddy">
            <a href="/bgstrategy/buddy/?id=<?= $buddyId ?>"><img src="<?= PICTURE_LOCAL_BUDDY . $blizzardIdBuddy . PICTURE_LOCAL_RENDER_SUFFIX_80 ?>" alt="Buddy: <?= $buddyName ?>"></a>
        </div>
        <!--        <div class="card_flavor flavor_hero">-->
        <!--            --><?php //= $flavor ? 'Flavor:' : '' ?><!--<br><span class="price_font">--><?php //= $flavor ?? '' ?><!--</span>-->
        <!--        </div>-->
    </div>

    <?php
    include_once('../strategy_and_voting.php');
}
?>

</div> <!-- / content -->
<?php
include_once('../../footer.php');
?>
