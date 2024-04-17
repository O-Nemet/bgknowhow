<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Undeads</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=undead"><i class="bi bi-box-arrow-up-right"></i> All available Undeads and Undead-associated minions</a>
    <br><br>
    Undead shine with many Reborn and Deathrattle effects, usually providing you more minions than your opponents. They are able to buff the attack of every Undead permanently and the minion <a class="hoverimage" href="/bgstrategy/minion/?id=444">Disguised Graverobber</a> provides a unique way to alter and buff your warband.
</p>
<div class="comp_wrapper">
    <h3 id="knights">Deathrattle Knight Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Guest', 'Anub', 'Handless', 'Handless', 'Summoner', 'Summoner', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Taunt Anub'arak.
    </p>

    <h3 id="moroes">Deathrattle Moroes Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Moroes', 'Kel', 'Mummifier', 'Summoner', 'Summoner', 'Titus', 'Stomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This build is about generating as many golden <strong>Moroes</strong> as possible via <strong>Kel'Thuzad</strong>, which is why you will usually end your turn with only 6 minions on the board. In contrast to the other Undead builds this one does not depend on <a class="hoverimage" href="/bgstrategy/minion/?id=286">Eternal Summoner</a> or playing early <a class="hoverimage" href="/bgstrategy/minion/?id=274">Eternal Knight</a>s, but can be started with those two key cards only and any other Undead minions available. Taunt the Moroes.
    </p>

    <h3 id="deathrattle">Deathrattle Stomper Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Guest', 'Handless', 'Handless', 'Summoner', 'Summoner', 'Primus', 'Stomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

    <h3 id="exodia">Exodia Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blaster', 'Phaerix', 'Anub', 'Anub', 'Summoner', 'Summoner', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        <strong>Blaster</strong> and <strong>Titus</strong> are the cornerstones of this build. Don't buff the health of your minions too much, so that Blaster will always kill them.
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
