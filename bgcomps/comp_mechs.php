<?php
include_once('../header.php');
?>

<?php
$board = ['Buster', 'Reaper', 'Mecherel', 'Deflecto', 'Buster', 'Kangor\'s', 'Baron'];

include_once('functions.php');
?>

<h2 class="page_title">Endgame Composition: Mechs</h2>

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
