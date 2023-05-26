<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Elementals</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Nomi Big Stats Comp:</h3>
    <!--    <p>You start by picking up Crackling Cyclone and try to discover a Nomi. Then utilize Recycling Wraith to filter through Elementals to grow the Elementals in the tavern. A Brann can greatly help by improving the effect of Smogger and Tempest. Later Cyclone and Wildfire will be tripled.</p>-->
    <?php
    $board   = ['Cyclone', 'Wildfire', 'Wraith', 'Trumpeter', 'Trumpeter', 'Nomi', 'Nomi'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buffs the tavern. Can be played on tier 4, because the Elementals in the tavern will get quite big, especially if tripled.
    </p>
    <h3>Brann + Magma Buff Comp:</h3>
    <?php
    $board   = ['Brann', 'Magma', 'Magma', 'Wraith', 'Rock Rock', 'Rock Rock', 'Upstart'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buffs the board. Better with Murlocs available, mostly due to <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=93">Primalfin Lookout</a>. Upstart should be tripled, or it is usually not worth it.
    </p>
    <h3>Barnstormer Deathrattle Comp:</h3>
    <?php
    $board   = ['Macaw', 'Barnstormer', 'Barnstormer', 'Mistake', 'Mistake', 'Felbat', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Demons. Improves by the availability of Beasts.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
