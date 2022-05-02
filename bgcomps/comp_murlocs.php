<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Murlocs</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Selfless', 'Baron', 'Swolefin', 'Striker', 'Dong', 'Honcho', 'Sefin'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Dong', 'Swolefin', 'Swolefin', 'Striker', 'Dong', 'Brann', 'Sefin'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
