<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Demons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Maximum Juggler Comp:</h3>
    <?php
    $board   = ['*Ring Matron', '*Ring Matron', 'Voidlord', 'Voidlord', 'Infernal', 'Juggler', 'Stomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Big Stats Comp:</h3>
    <?php
    $board   = ['Selfless', 'Ball', 'Ball', 'Ur\'zul', '*Legion Overseer', 'Felbat', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Macaw/Trickster Comp:</h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Trickster', 'Queen', 'Queen', 'Felbat', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
