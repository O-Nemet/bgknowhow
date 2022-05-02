<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Beasts</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Macaw', 'Macaw', 'Hydra', 'Hydra', 'Goldrinn', 'Goldrinn', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Leaper', 'Macaw', '*Sewer Rat', '*Sewer Rat', '*Rat Pack', '*Rat Pack', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
