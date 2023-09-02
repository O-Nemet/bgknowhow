<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Elementals</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<p>
    All Elemental builds can be improved by temporarily utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=356">Elemental of Surprise</a> to triple and apply Divine Shield to as many minions as possible while building up your endgame composition.
</p>
<div class="comp_wrapper">
    <h3 id="nomi">Nomi/Trumpeter Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <!--    <p>You start by picking up Crackling Cyclone and try to discover a Nomi. Then utilize Recycling Wraith to filter through Elementals to grow the Elementals in the tavern. A Brann can greatly help by improving the effect of Smogger and Tempest. Later Cyclone and Wildfire will be tripled.</p>-->
    <?php
    $board   = ['Bramblewitch', 'Wildfire', 'Wraith', 'Trumpeter', 'Trumpeter', 'Nomi', 'Nomi'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buffs the tavern.
    </p>
    <!--    <h3 id="magma">Brann + Magma Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Brann', 'Magma', 'Magma', 'Wraith', 'Rock Rock', 'Rock Rock', 'Upstart'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Buffs the board. Better with Murlocs available, mostly due to <a class="hoverimage" href="/bgstrategy/minion/?id=93">Primalfin Lookout</a>. Upstart should be tripled, or it is usually not worth it.-->
    <!--    </p>-->
    <h3 id="rockrock">Brann + Carbonic Copy Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Wraith', 'CC', 'Party', 'Rock Rock', 'Rock Rock', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buffs the board. Plays only 6 minions due to the copy of Carbonic Copy (5 when the CC is golden).
    </p>
    <h3>Barnstormer Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Barnstormer', 'Barnstormer', 'Amalgam', 'Amalgam', 'Felbat', 'Titus'];
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
