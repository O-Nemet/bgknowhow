<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Pirates</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Selfless', '*Salty Looter', 'Hoggarr', 'Hoggarr', 'Peggy', 'Peggy', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Scally', 'Scally', 'Eliza', 'Eliza', 'Khadgar', 'Khadgar', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
