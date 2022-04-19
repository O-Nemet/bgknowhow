<?php
include_once('../header.php');
?>

<?php
$board = ['Nadina', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Razorgore', 'Promo-Drake', 'Prestor'];

include_once('functions.php');
?>

<h2 class="page_title">Endgame Composition: Dragons</h2>

<div class="card_wrapper">
    <?php
    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
