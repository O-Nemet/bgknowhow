<?php
include_once('../header.php');
?>

<h2 class="page_title">Endgame Composition: Beasts</h2>

<div class="comp_wrapper">
    <?php
    $board = ['Macaw', 'Macaw', 'Hydra', 'Hydra', 'Goldrinn', 'Goldrinn', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
    <?php
    $board = ['Leaper', 'Macaw', '*Sewer Rat', '*Sewer Rat', '*Rat Pack', '*Rat Pack', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
    echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
