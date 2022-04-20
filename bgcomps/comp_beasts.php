<?php
include_once('../header.php');
?>

<?php
include_once('../functions.php');
?>

<h2 class="page_title">Endgame Composition: Beasts</h2>

<div class="card_wrapper">
    <?php
    $board = ['Macaw', 'Macaw', 'Goldrinn', 'Goldrinn', '*Rat Pack', '*Mama Bear', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
    <?php
    $board = ['Leaper', 'Leaper', 'Macaw', 'Macaw', '*Sewer Rat', '*Rat Pack', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
    echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
