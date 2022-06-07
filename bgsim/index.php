<?php
include_once('../header.php');
?>

<?php
require_once('classes.php');

$minionTypes['beasts']     = isset($_GET['be']) ? intval($_GET['be']) : 1;
$minionTypes['demons']     = isset($_GET['de']) ? intval($_GET['de']) : 1;
$minionTypes['dragons']    = isset($_GET['dr']) ? intval($_GET['dr']) : 1;
$minionTypes['elementals'] = isset($_GET['el']) ? intval($_GET['el']) : 1;
$minionTypes['mechs']      = isset($_GET['me']) ? intval($_GET['me']) : 1;
$minionTypes['murlocs']    = isset($_GET['mu']) ? intval($_GET['mu']) : 1;
$minionTypes['nagas']      = isset($_GET['na']) ? intval($_GET['na']) : 1;
$minionTypes['pirates']    = isset($_GET['pi']) ? intval($_GET['pi']) : 1;
$minionTypes['quilboar']   = isset($_GET['qu']) ? intval($_GET['qu']) : 1;

//var_dump($minionTypes);

StopWatch::start();

$tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_active.json'));
//var_dump($tempMinions->data);

//var_dump($_SERVER["REQUEST_URI"]);

$minions = [];
foreach ($tempMinions->data as $key => $object) {
    if ($object->tier === 1 && $object->isToken === false &&
        (
            ($object->pool === 'Beast' && $minionTypes['beasts']) ||
            ($object->pool === 'Demon' && $minionTypes['demons']) ||
            ($object->pool === 'Dragon' && $minionTypes['dragons']) ||
            ($object->pool === 'Elemental' && $minionTypes['elementals']) ||
            ($object->pool === 'Mech' && $minionTypes['mechs']) ||
            ($object->pool === 'Murloc' && $minionTypes['murlocs']) ||
            ($object->pool === 'Naga' && $minionTypes['nagas']) ||
            ($object->pool === 'Pirate' && $minionTypes['pirates']) ||
            ($object->pool === 'Quilboar' && $minionTypes['quilboar'])
        )
    ) {
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
    Click any of these icons below to deactivate the banned minion types of your tavern.
</p>
<br>
<div class="typeFilter">
    <a href="<?= getLink('be', $minionTypes['beasts']); ?>"><img class="<?= ($minionTypes['beasts'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_beasts.png" title="Beasts"></a>
    <a href="<?= getLink('de', $minionTypes['demons']); ?>"><img class="<?= ($minionTypes['demons'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_demons.png" title="Demons"></a>
    <a href="<?= getLink('dr', $minionTypes['dragons']); ?>"><img class="<?= ($minionTypes['dragons'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_dragons.png" title="Dragons"></a>
    <a href="<?= getLink('el', $minionTypes['elementals']); ?>"><img class="<?= ($minionTypes['elementals'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_elementals.png" title="Elementals"></a>
    <a href="<?= getLink('me', $minionTypes['mechs']); ?>"><img class="<?= ($minionTypes['mechs'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_mechs.png" title="Mechs"></a>
    <a href="<?= getLink('mu', $minionTypes['murlocs']); ?>"><img class="<?= ($minionTypes['murlocs'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_murlocs.png" title="Murlocs"></a>
    <a href="<?= getLink('na', $minionTypes['nagas']); ?>"><img class="<?= ($minionTypes['nagas'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_naga.png" title="Nagas"></a>
    <a href="<?= getLink('pi', $minionTypes['pirates']); ?>"><img class="<?= ($minionTypes['pirates'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_pirates.png" title="Pirates"></a>
    <a href="<?= getLink('qu', $minionTypes['quilboar']); ?>"><img class="<?= ($minionTypes['quilboar'] ? 'active' : 'inactive') ?>" src="<?= PICTURE_LOCAL ?>misc/pool_quilboar.png" title="Quilboar"></a>
</div>

<br><br>

<div class="matrix">
    <?php
    $minionsCount                  = count($minions);
    $GLOBALS['player1TotalDamage'] = 0;
    // (14 + 2) * 42 = 672 + 157 = 829 + 221 = 1050 (min)
    $dividerWidth = 1050 - (157 + ($minionsCount + 2) * 42);
    $dividerWidth = max($dividerWidth, 0);

    //    var_dump($dividerWidth);
    //    exit;

    echo "<div class='matrix-row' style='visibility: hidden;'>X</div>";
    foreach ($minions as $minion_top) {
        echo "<div class='matrix-column'>$minion_top->nameShort</div>";
    }
    if ($minionsCount > 0) {
        echo "<div class='matrix-column' style='background-color: white !important;'>Losses</div>";
        echo "<div class='matrix-column' style='background-color: white !important;'>Avg Dmg</div>";
        echo "<div class='column_divider cf' style='width: " . $dividerWidth . "px;'>&nbsp;</div>";
    }
    foreach ($minions as $minion_left) {
        $minion_left->combatLosses     = 0;
        $GLOBALS['player1TotalDamage'] = 0;
        echo "<div class='matrix-row'>$minion_left->name</div>";
        foreach ($minions as $minion_top) {
            $combatResult              = getCombatResult($minion_left->id, $minion_top->id);
            $minion_left->combatLosses = ($combatResult < 0) ? $minion_left->combatLosses + 1 : $minion_left->combatLosses + 0;
            echo "<div class='" . getCellColor($combatResult) . "'>" . $combatResult . "</div>";
        }
        echo "<div style='font-size: 14px; line-height: 15px;'>" . str_pad($minion_left->combatLosses, 2, '0', STR_PAD_LEFT) . "/" . $minionsCount . "</div>";
        echo "<div>" . number_format($GLOBALS['player1TotalDamage'] / $minionsCount, 2) . "</div>";
        echo "<div class='row_divider cf' style='width: " . $dividerWidth . "px;'>&nbsp;</div>";
        echo "<br><br>";
    }
    echo "<br><br>";
    if ($minionsCount > 0) {
        echo "<span style='font-style: italic; font-size: 12px;'>Simulated in: " . number_format(StopWatch::elapsed(), 4) . " seconds.</span>";
    }
    ?>
</div>

<?php
function getLink($type, $currentValue): string
{
    // first-load handling (so a call to index.php is valid)
    if (strstr($_SERVER["REQUEST_URI"], '?') === false) {
        $newLink = $_SERVER["REQUEST_URI"] . '?be=1&de=1&dr=1&el=1&me=1&mu=1&na=1&pi=1&qu=1';
    } else {
        $newLink = $_SERVER["REQUEST_URI"];
    }
    $newValue = ($currentValue === 0 ? '1' : '0');
    $newLink  = str_ireplace($type . '=' . $currentValue, $type . '=' . $newValue, $newLink);

    return $newLink;
}

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
    if ($combatResult > 0) {
        return 'win';
    } else if ($combatResult < 0) {
        return 'loss';
    } else {
        return 'draw';
    }
}
?>

<?php
include_once('../footer.php');
?>
