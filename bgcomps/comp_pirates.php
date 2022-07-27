<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Pirates</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats aka APM Comp:</h3>
    <?php
    $board   = ['Selfless', '*Salty Looter', 'Hoggarr', 'Hoggarr', 'Peggy', 'Peggy', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Scallywag Deathrattle Comp:</h3>
    <?php
    $board   = ['Scally', 'Scally', 'Eliza', 'Eliza', 'Khadgar', 'Khadgar', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
