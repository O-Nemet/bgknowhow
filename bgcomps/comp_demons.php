<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Demons</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Selfless', 'Ur\'zul', 'Dong', 'Dong', 'Mama', 'Felbat', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Macaw', 'Trickster', 'Trickster', 'Dong', 'Felbat', 'Felbat', 'Mama'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['*Ring Matron', '*Ring Matron', 'Voidlord', 'Voidlord', 'Infernal', 'Juggler', 'Juggler'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
