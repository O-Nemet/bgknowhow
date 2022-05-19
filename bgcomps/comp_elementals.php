<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Elementals</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Cyclone', 'Cyclone', 'Wildfire', 'Wildfire', 'Wraith', 'Brann', 'Nomi'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Cyclone', 'Wildfire', 'Rag', 'Rag', 'Domo', 'Domo', 'Master'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Cyclone', 'Wildfire', 'Dong', 'Dong', 'Felbat', '*Imp Mama', 'Nomi'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
