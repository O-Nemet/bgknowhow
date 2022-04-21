<?php
include_once('../header.php');
?>

<?php
include_once('../functions.php');
?>

<h2 class="page_title">Endgame Composition: Pirates</h2>

<div class="card_wrapper">
    <?php
    $board   = ['Dong', 'Looter*Salty Looter', 'Hoggarr', 'Hoggarr', 'Peggy', 'Peggy', 'Eliza'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }

    $board   = ['Scally', 'Scally', 'Dong', 'Eliza', 'Eliza', 'Khadgar', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
