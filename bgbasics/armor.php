<?php
include_once('../header.php');

if (!empty($_GET['mode'])) {
    $mode = $_GET['mode'];
} else {
    $mode = 'gfx';
}
?>

<h2 class="page_title">Hero Armor</h2>
<p>
    This is a list of all active heroes ordered by their current armor. Notice that the pictures display the armor value for high MMR (~6000 or more), you can check the armor value for low MMR (~6000 or lower) and Duos mode by hovering over or by clicking on a hero portrait:
</p>
<br><br>
<div id="hero_armor_tiers">
    <?php
    usort($tempHeroes->data, fn($a, $b) => ($b->armorHighMMR ?? $b->armor) <=> ($a->armorHighMMR ?? $a->armor));

    foreach ($tempHeroes->data as $key => $hero) {
        if ($hero->isActive) {
            if ($mode === 'txt') {
                echo "<div><a class='hoverimage' href='" . $hero->websites->bgknowhow . "'>" . $hero->name . "</a></div>";
            } else {
                echo "<div><a href='" . $hero->websites->bgknowhow . "'><img src='" . $hero->picturePortrait . "' title='" . htmlspecialchars($hero->name, ENT_QUOTES, 'utf-8') . " has " . ($hero->armorHighMMR ?? $hero->armor) . " armor (high MMR), " . ($hero->armor ?? $hero->armorHighMMR) . " armor (low MMR) or  " . $hero->armorDuos . " armor (Duos)' alt='" . htmlspecialchars($hero->name, ENT_QUOTES, 'utf-8') . " has " . ($hero->armorHighMMR ?? $hero->armor) . " armor (high MMR), " . ($hero->armor ?? $hero->armorHighMMR) . " armor (low MMR) or " . $hero->armorDuos . " armor (Duos) ' ></img></a></div>";
            }
        }
    }
    ?>
</div>

<br><br>

<?php
include_once('../footer.php');
?>

