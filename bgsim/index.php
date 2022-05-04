<?php
include_once('../header.php');
?>

<?php
//require_once('../functions.php');
require_once('classes.php');

StopWatch::start();

//$player1TotalDamage = 0;

//$tempString  = ;
$tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_all.json'));
$needle      = 1;
//var_dump($tempMinions->data);

foreach ($tempMinions->data as $key => $object) {
    if ($object->tier === $needle && $object->isToken === false) {
        $minions[] = $object;
    }
}

?>

<h2 class="page_title">Simulation: 1st Turn</h2>

<p>
    This is a dynamically generated matrix featuring the matchups of all tier 1 minions on turn 1.<br>
    The number in the square shows how much damage you will deal/receive from the board (in addition to the turn 1 damage).<br>
    The number of potential matchup losses and the average damage generated for your buddy meter are displayed on the right.<br>
    For this scenario the Razorfen Geomancer has been self-gemmed to a 4/2 minion.
    <br><br>
    In the future you'll also be able to filter out banned minion types.
</p>

<br>

<div class="typeFilter">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_beasts.png" width="120">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_demons.png" width="120">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_dragons.png" width="120">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_elementals.png" width="120">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_mechs.png" width="120">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_murlocs.png" width="120">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_pirates.png" width="120">
    <img src="<?= PICTURE_LOCAL ?>misc/pool_quilboar.png" width="120">
</div>

<br><br>

<div class="matrix">
    <?php
    $GLOBALS['player1TotalDamage'] = 0;

    echo "<div class='matrix-row' style='visibility: hidden;'>X</div>";
    foreach ($minions as $minion_top) {
        echo "<div class='matrix-column'>$minion_top->nameShort</div>";
    }
    echo "<div class='matrix-column' style='background-color: white !important;'>Losses</div>";
    echo "<div class='matrix-column' style='background-color: white !important;'>Buddy Dmg</div>";
    foreach ($minions as $minion_left) {
        $i                         = 0;
        $minion_left->combatLosses = 0;
        $GLOBALS['player1TotalDamage'] = 0;
//        $minion_left->buddyDmg = 0;
        echo "<div class='matrix-row'>$minion_left->name</div>";
        foreach ($minions as $minion_top) {
            $i++;
            $combatResult              = getCombatResult($minion_left->blizzardId, $minion_top->blizzardId);
            $minion_left->combatLosses = ($combatResult === -1) ? $minion_left->combatLosses + 1 : $minion_left->combatLosses + 0;
            echo "<div class='" . getCellColor($combatResult) . "'>" . $combatResult . "</div>";
        }
//        $minion_left->buddyDmg = $minion_left->buddyDmg + 1;
        echo "<div>" . str_pad($minion_left->combatLosses, 2, '0', STR_PAD_LEFT) . "/" . $i . "</div>";
        echo "<div>" . number_format($GLOBALS['player1TotalDamage'] / $i, 2) . "</div>";
        echo "<br><br>";
    }
    echo '<br><br><span style="font-style: italic; font-size: 12px;">Simulated in: '. number_format(StopWatch::elapsed(), 4) .' seconds.</span>';
    ?>
</div>

<?php
function getCombatResult($id1, $id2): int
{
    $battlefield = new Battlefield();
    $battlefield->spawnMinion(1, 3, new Minion($id1));
    $battlefield->spawnMinion(2, 3, new Minion($id2));
    $battlefield->runFight();

//    echo $battlefield->getTotalMinionDamageDoneP1();
    $GLOBALS['player1TotalDamage'] += $battlefield->getTotalMinionDamageDoneP1();
    return $battlefield->getLoserDamage();
}

function getCellColor($combatResult): string
{
    if ($combatResult === 1) {
        return 'win';
    } else if ($combatResult === -1) {
        return 'loss';
    } else {
        return 'draw';
    }
}

?>

<?php
include_once('../footer.php');
?>
