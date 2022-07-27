<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Beasts</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Macaw/Goldrinn/Baron Deathrattle Comp:</h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Hydra', 'Hydra', 'Goldrinn', 'Goldrinn', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Mama Bear Deathrattle Comp:</h3>
    <?php
    $board   = ['Hydra', 'Highmane', 'Krush', '*Rat Pack', '*Rat Pack', 'Croc', '*Mama Bear'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Leaper Deathrattle Comp:</h3>
    <?php
    $board   = ['Leaper', 'Macaw', 'Macaw', '*Sewer Rat', '*Sewer Rat', '*Rat Pack', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
