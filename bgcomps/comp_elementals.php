<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Elementals</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=elemental"><i class="bi bi-box-arrow-up-right"></i> All available Elementals and Elemental-associated minions</a>
    <br><br>
    All Elemental builds can be improved by temporarily utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=356">Elemental of Surprise</a> to triple and apply Divine Shield to as many minions as possible while building up your endgame composition.
</p>
<div class="comp_wrapper">
    <h3 id="rockrock">RockRock Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Wildfire', 'Wraith', 'Magmaloc', 'Magmaloc', 'Djinni', 'Rock Rock', 'Rock Rock'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        <a class="hoverimage" href="/bgstrategy/minion/?id=384">Emergent Flame</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=125">Tavern Tempest</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=398">Transmuted Bramblewitch</a> are other good cards to help.
    </p>

    <h3 id="spells">Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Wildfire', 'Lubber', 'Lubber', 'Azerite', 'Fiery', 'Shelly', 'Matriarch'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

</div>

<br><br>
<hr>
<br>
<p>
    <?php include_once('outro.php'); ?>
</p>
<br><br>

<?php include_once('../footer.php'); ?>
