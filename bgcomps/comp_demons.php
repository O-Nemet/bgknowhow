<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Demons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <p>Big Stats Comp:</p>
    <?php
    $board   = ['Selfless', '*Nightmare Amalgam', 'Ur\'zul', 'Ur\'zul', '*Imp Mama', 'Felbat', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Macaw/Trickster Deathrattle Comp:</p>
    <?php
    $board   = ['Macaw', 'Trickster', 'Trickster', '*Imp Mama', 'Felbat', 'Felbat', '*Imp Mama'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Maximum Juggler Comp:</p>
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
