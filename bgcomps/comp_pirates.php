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
    $board   = ['Selfless', 'Titus', '*Salty Looter', 'Hoggarr', 'Hoggarr', '*Peggy Sturdybone', 'Greta'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Big Stats Attack Comp:</h3>
    <?php
    $board   = ['Vanessa', 'Vanessa', 'Ball', 'Greta', 'Greta', 'Eliza', 'Ball'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <!--    <h3>Scallywag Deathrattle Comp:</h3>-->
    <?php
    //    $board   = ['Scally', 'Scally', 'Eliza', 'Eliza', 'Khadgar', 'Khadgar', 'Titus'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
