<?php
include_once('../header.php');
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('log_errors', 'On');

class Battlefield {
    private array $slotsP1 = [[],[],[],[],[],[],[]];
    private array $slotsP2 = [[],[],[],[],[],[],[]];

    public function setSlot($player, $slot, $minion) {
        $slotsP1[$slot] = $minion;
    }

    public function getSlot($player, $slot) {
        return ($player === 1 ? $this->slotsP1[$slot] : $this->slotsP2[$slot]);
    }
}

$player1TotalDamage = 0;
$player2TotalDamage = 0;

//$tempString  = ;
$tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_all.json'));
$needle      = 1;
//var_dump($tempMinions->data);

foreach ($tempMinions->data as $key => $object) {
    if ($object->tier === $needle) {
        $minions[] = $object;
    }
}

//$minions     = array_filter($tempMinions->data, function ($var) use ($needle) {
//    return ($var['tier'] == $needle);
//});
//   var_dump($minions);
?>

<h2 class="page_title">Simulation: 1st Turn</h2>

<div class="matrix">
    <?php
    echo "<div class='matrix-row' style='visibility: hidden;'>X</div>";
    foreach ($minions as $minion_top) {
        echo "<div class='matrix-column'>$minion_top->nameShort</div>";
    }
    echo "<div class='matrix-column' style='background-color: white !important;'>Losses</div>";
    echo "<div class='matrix-column' style='background-color: white !important;'>Buddy Dmg</div>";
    foreach ($minions as $minion_left) {
        $i                         = 0;
        $minion_left->combatLosses = 0;
        $player1TotalDamage        = 0;
//        $minion_left->buddyDmg = 0;
        echo "<div class='matrix-row'>$minion_left->name</div>";
        foreach ($minions as $minion_top) {
            $i++;
            $combatResult              = getCombatResult($minion_left, $minion_top);
            $minion_left->combatLosses = ($combatResult === -1) ? $minion_left->combatLosses + 1 : $minion_left->combatLosses + 0;
            echo "<div class='" . getCellColor($combatResult) . "'>" . $combatResult . "</div>";
        }
//        $minion_left->buddyDmg = $minion_left->buddyDmg + 1;
        echo "<div>" . str_pad($minion_left->combatLosses, 2, '0', STR_PAD_LEFT) . "/" . $i . "</div>";
        echo "<div>" . number_format($player1TotalDamage / $i, 2) . "</div>";
        echo "<br><br>";
    }
    ?>
</div>

<?php
function getCombatResult($minionP1, $minionP2)
{
    global $player1TotalDamage;
    global $player2TotalDamage;

    $minion1 = clone $minionP1;
    $minion2 = clone $minionP2;

//    if ($minion1->name == 'Pupbot') {
//        var_dump($minion1);
//    }

    $resetShield1 = 0;
    $resetShield2 = 0;
    while ($minion1->health > 0 && $minion2->health > 0) {

//        echo $minion1->attack . "/" . $minion1->health . " vs " . $minion2->attack . "/" . $minion2->health . "<br>";

//        var_dump($minion1->abilities);

        if ($minion1->abilities->hasShield == true) {
//            echo $minion1->name;
            $minion1->abilities->hasShield = false;
            $resetShield1                  = 1;
        } else {
//            echo $minion1->health . "*" . $minion2->attack;
            $minion1->health    = $minion1->health - $minion2->attack;
            $player2TotalDamage = $player2TotalDamage + $minion2->attack;
//            var_dump($minion1);
//            echo $minion1->health;
        }

        if ($minion2->abilities->hasShield == true) {
            $minion2->abilities->hasShield = false;
            $resetShield2                  = 1;
//            echo $minion2->name;
        } else {
            $minion2->health    = $minion2->health - $minion1->attack;
            $player1TotalDamage = $player1TotalDamage + $minion1->attack;
        }
//        echo $minion1->attack . "/" . $minion1->health . " vs " . $minion2->attack . "/" . $minion2->health . "<br>";

    }

    if ($resetShield1) $minion1->abilities->hasShield = true;
    if ($resetShield2) $minion2->abilities->hasShield = true;
//    var_dump($minion1);
//    echo "<br>";
//    var_dump($minion2);

    $minion1->health = ($minion1->health < 0) ? 0 : $minion1->health;
    $minion2->health = ($minion2->health < 0) ? 0 : $minion2->health;

    if ($minion1->health > $minion2->health) {
        unset($minion1);
        unset($minion2);
        return 1;
    } else if ($minion1->health < $minion2->health) {
        unset($minion1);
        unset($minion2);
        return -1;
    } else {
        unset($minion1);
        unset($minion2);
        return 0;
    }

}

function getCellColor($combatResult)
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
