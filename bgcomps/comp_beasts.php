<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Beasts</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Mama Bear Deathrattle Comp:</h3>
    <?php
    $board   = ['Hydra', 'Highmane', '*Rat Pack', '*Rat Pack', 'Coiler', '*Mama Bear', 'Rat'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Macaw/Goldrinn/Titus Deathrattle Comp:</h3>
    <?php
    $board   = ['Macaw', 'Goldrinn', 'Macaw', 'Hydra', 'Blanchy', 'Goldrinn', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Leaper Deathrattle Comp:</h3>
    <?php
    $board   = ['Leaper', 'Macaw', 'Macaw', 'Rat', 'Rat', '*Rat Pack', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
