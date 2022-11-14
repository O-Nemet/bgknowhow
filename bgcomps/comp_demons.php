<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Demons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats Comp:</h3>
    <?php
    $board   = ['Selfless', 'Ball', 'Ur\'zul', '*Legion Overseer', '*Imp Mama', 'Felbat', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Macaw/Trickster Deathrattle Comp:</h3>
    <?php
    $board   = ['Macaw', 'Trickster', '*Imp Mama', 'Felbat', '*Legion Overseer', '*Imp Mama', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Maximum Juggler Comp:</h3>
    <?php
    $board   = ['*Ring Matron', '*Ring Matron', 'Voidlord', 'Voidlord', 'Infernal', 'Juggler', 'Juggler'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    //    $board   = ['Selfless', 'Ur\'zul', 'Dong', 'Dong', '*Imp Mama', 'Felbat', 'Baron'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
