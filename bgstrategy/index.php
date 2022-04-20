<?php
include_once('../header.php');
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('log_errors', 'On');

$tempHeroes  = json_decode(file_get_contents('../bgjson/output/bg_heroes_all.json'));
$tempBuddies = json_decode(file_get_contents('../bgjson/output/bg_buddies_all.json'));
$tempMinions = json_decode(file_get_contents('../bgjson/output/bg_minions_all.json'));

foreach ($tempHeroes->data as $key => $object) {
    $heroes[] = $object;
}

foreach ($tempBuddies->data as $key => $object) {
    $buddies[] = $object;
}

foreach ($tempMinions->data as $key => $object) {
    $minions[] = $object;
}

//echo "<pre>";
//print_r($minions);
//echo "</pre>";
?>

<h2 class="page_title">Battlegrounds Strategy</h2>

<table class="strategy-table">
    <thead>
    <tr>
        <th colspan="5">Heroes</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Health</th>
        <th>Armor</th>
        <th>Text</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($heroes as $hero) {
        echo "<tr style='cursor: pointer;' onclick='window.location=" . $hero->websites->bgknowhow . "'>";
        echo "<td><a href='" . $hero->websites->bgknowhow . "'>$hero->name</a></td>";
        echo "<td>$hero->health</td>";
        echo "<td>$hero->armor</td>";
        echo "<td class='text'>$hero->heroPowerText</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<br><br>

<table class="strategy-table">
    <thead>
    <tr>
        <th colspan="5">Buddies</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Tier</th>
        <th>Attack</th>
        <th>Health</th>
        <th>Text</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($buddies as $buddy) {
        echo "<tr style='cursor: pointer;' onclick='window.location=" . $buddy->websites->bgknowhow . "'>";
        echo "<td><a href='" . $buddy->websites->bgknowhow . "'>$buddy->name</a></td>";
        echo "<td>$buddy->tier</td>";
        echo "<td>$buddy->attack</td>";
        echo "<td>$buddy->health</td>";
        echo "<td class='text'>$buddy->text</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<br><br>

<table class="strategy-table">
    <thead>
    <tr>
        <th colspan="5">Minions</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Tier</th>
        <th>Attack</th>
        <th>Health</th>
        <th>Text</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($minions as $minion) {
        echo "<tr style='cursor: pointer;' onclick='window.location=" . $minion->websites->bgknowhow . "'>";
        echo "<td><a href='" . $minion->websites->bgknowhow . "'>$minion->name</a></td>";
        echo "<td>$minion->tier</td>";
        echo "<td>$minion->attack</td>";
        echo "<td>$minion->health</td>";
        echo "<td class='text'>$minion->text</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<br><br>

<?php
function getArmor($armorTier): string
{
    switch ($armorTier) {
        case 1:
            return "0";
        case 2:
            return "2-5";
        case 3:
            return "3-6";
        case 4:
            return "4-7";
        case 5:
            return "5-8";
        case 6:
            return "6-9";
        case 7:
            return "7-10";
        default:
            return "???";
    }
}

?>

<?php
include_once('../footer.php');
?>
