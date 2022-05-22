<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Elementals</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <p>Standard Nomi Big Stats Comp:</p>
    <!--    <p>You start by picking up Crackling Cyclone and try to discover a Nomi. Then utilize Recycling Wraith to filter through Elementals to grow the Elementals in the tavern. A Brann can greatly help by improving the effect of Smogger and Tempest. Later Cyclone and Wildfire will be tripled.</p>-->
    <?php
    $board   = ['Cyclone', 'Cyclone', 'Wildfire', 'Wildfire', 'Wraith', 'Brann', 'Nomi'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Rag + Domo Buff Comp:</p>
    <?php
    $board   = ['Cyclone', 'Wildfire', 'Rag', 'Rag', 'Wraith', 'Domo', 'Master'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Elemental Demon Comp:</p>
    <?php
    $board   = ['Cyclone', 'Wildfire', '*Nightmare Amalgam', '*Nightmare Amalgam', 'Felbat', '*Imp Mama', 'Nomi'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    //    $board   = ['Cyclone', 'Wildfire', 'Dong', 'Dong', 'Felbat', '*Imp Mama', 'Nomi'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
