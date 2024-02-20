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
    $board   = ['Sandstone', 'Wildfire', 'Frostling', 'Wraith', 'Djinni', 'Rock Rock', 'Rock Rock'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        <a class="hoverimage" href="/bgstrategy/minion/?id=256">Titus</a> also helps out with Gentle Djinni. <a class="hoverimage" href="/bgstrategy/minion/?id=384">Emergent Flame</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=125">Tavern Tempest</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=398">Transmuted Bramblewitch</a> are other good cards to help.
    </p>

    <h3 id="master">Master of Realities Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Sandstone', 'Sandstone', 'Smuggler', 'Smuggler', 'Master', 'Master', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Do not triple <strong>Sandstone Drake</strong> or <strong>Master Realities</strong>, they become less effective when put together. <strong>Drakkari Enchanter</strong> accelerates your comp strength into the endgame. If Dragons are available play Whelp Smuggler, otherwise replace them with <a class="hoverimage" href="/bgstrategy/minion/?id=30">Party Elemental</a>.
    </p>

    <h3 id="spells">Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Barnstormer', 'Frostling', 'Sandstone', 'Seafarer', 'Lubber', 'Lubber', 'Azerite'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Cards like <a class="hoverimage" href="/bgstrategy/minion/?id=102">Wildfire Elemental</a> and <strong>Flourish Frostling</strong> are ideal. Felemental, <a class="hoverimage" href="/bgstrategy/minion/?id=118">Master of Realities</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=454">Ignition Specialist</a> (if Dragons are available), <a class="hoverimage" href="/bgstrategy/minion/?id=439">Mystic Sporebat</a> (if Beasts are available), and <a class="hoverimage" href="/bgstrategy/minion/?id=431">Ensorcelled Fungus</a> are all good cards to add to the build.
    </p>

    <h3 id="deathrattle">Barnstormer Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Barnstormer', 'Barnstormer', 'Phalanx', 'Phalanx', 'Felbat', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Demons. Improves by the availability of Beasts.
        <!--<br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.-->
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
