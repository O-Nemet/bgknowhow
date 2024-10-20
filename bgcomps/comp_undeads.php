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
    Undead shine with many Reborn and Deathrattle effects, usually providing you more minions than your opponents. They are able to buff the attack of every Undead permanently and the minion <a class="hoverimage" href="/bgstrategy/minion/?id=444">Disguised Graverobber</a> provides a unique way to alter and buff your warband. <a class="hoverimage" href="/bgstrategy/minion/?id=539">Prime Mate</a> also helps in almost all of the builds.
</p>
<div class="comp_wrapper">
    <h3 id="knights">Deathrattle Knight Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Anub', 'Handless', 'Handless', 'Summoner', 'Summoner', 'Acabra', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Ideally, you want to have Reborn already on Anub'arak through the use of <a class="hoverimage" href="/bgstrategy/minion/?id=442">Mummifier</a> triggered by <a class="hoverimage" href="/bgstrategy/minion/?id=444">Disguised Graverobber</a>. Ghoul-acabra is in here to make sure your minions have enough health to not die from indirect damage. Afterward, you can replace it with <a class="hoverimage" href="/bgstrategy/minion/?id=442">Mummifier</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=390">Champion of Primus</a>.
        <br><br>
        Windrunner Necklace, Artisanal Urn, Eternal Portrait, Comfy Coffin, Staff of the Scourge, Ceremonial Sword, Horde Keychain, Fishy Sticker, Butcher's Sickle, Mug of the Sire, and Goldenlizer Supply are the ideal trinkets.
    </p>

    <h3 id="moroes">Deathrattle Moroes Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Moroes', 'Kel', 'Mummifier', 'Summoner', 'Summoner', 'Titus', 'Acabra'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This build is about generating as many golden <strong>Moroes</strong> as possible via <strong>Kel'Thuzad</strong>, which is why you will usually end your turn with only 6 minions on the board. In contrast to the other Undead builds this one does not depend on <a class="hoverimage" href="/bgstrategy/minion/?id=286">Eternal Summoner</a> or playing early <a class="hoverimage" href="/bgstrategy/minion/?id=274">Eternal Knight</a>s, but can be started with those two key cards only and any other Undead minions available. Taunt the Moroes. Alternatively, you can replace Moroes with Nightbane to gain a lot of attack instead of health.
        <br><br>
        Windrunner Necklace, Artisanal Urn, Eternal Portrait, Comfy Coffin, Staff of the Scourge, Ceremonial Sword, Horde Keychain, Fishy Sticker, Butcher's Sickle, Mug of the Sire, and Goldenlizer Supply are the ideal trinkets.
    </p>

    <h3 id="deathrattle">Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Caretaker', 'Caretaker', 'Summoner', 'Summoner', 'Crasher', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a build you want to complete as soon as possible as you have cards like <strong>Eternal Summoner</strong> and <strong>Champion of the Primus</strong> that can only scale during combat. You are not going to do that well if you build this in the late game.
        <br><br>
        Windrunner Necklace, Artisanal Urn, Eternal Portrait, Comfy Coffin, Staff of the Scourge, Ceremonial Sword, Horde Keychain, Fishy Sticker, Butcher's Sickle, Mug of the Sire, and Goldenlizer Supply are the ideal trinkets.
    </p>

    <h3 id="exodia">Exodia Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blaster', 'Phaerix', 'Anub', 'Anub', 'Summoner', 'Summoner', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        <strong>Blaster</strong> and <strong>Titus</strong> are the cornerstones of this build. Don't buff the health of your minions too much, so that Blaster will always kill them.
        <br><br>
        Windrunner Necklace, Artisanal Urn, Eternal Portrait, Comfy Coffin, Staff of the Scourge, Ceremonial Sword, Horde Keychain, Fishy Sticker, Butcher's Sickle, Mug of the Sire, and Goldenlizer Supply are the ideal trinkets.
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
