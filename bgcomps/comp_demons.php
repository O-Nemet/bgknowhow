<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Demons</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=demon"><i class="bi bi-box-arrow-up-right"></i> All available Demons and Demon-associated minions</a>
    <br><br>
    In general Demon compositions utilize their many self-damaging effects available for this minion type and their general stat scaling to build huge minions. They are pretty self-reliant (do not need another minion type to shine) but without picking up an early <a class="hoverimage" href="/bgstrategy/minion/?id=310">Soul Rewinder</a> you will usually take too much damage.
</p>
<div class="comp_wrapper">
    <h3 id="tichondrius">Self-Damage Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Weaver', 'Rewinder', 'Igniter', 'Rylak', 'Percussionist', 'Malchezaar', 'Tichondrius'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs an early <strong>Soul Rewinder</strong> and <strong>Weaver</strong> or <strong>Malchezaar</strong> to trigger damage to yourself. Continously buffs your whole board.
        <br><br>
        Your build becomes stronger, the more self damage you do. Having more than one Wrath Weaver is good, but do not be afraid to triple it if you really need to find your <strong>Tichondrius</strong>. While Tichondrius is great to buff something like Impulsive Trickster, be wary of the board space as you may not have enough room to recycle a card and keep these other demons.

        <br><br>
        For the very late game <a class="hoverimage" href="/bgstrategy/minion/?id=426">Cultist S'thera</a> with <a class="hoverimage" href="/bgstrategy/minion/?id=256">Titus Rivendare</a> is also good if you have a big demon you want to resummon, but it does get countered by <a class="hoverimage" href="/bgstrategy/minion/?id=398">Transmuted Bramblewitch</a>.
    </p>

    <h3 id="felbatdr">Starter Felbat Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Trickster', 'Trickster', 'Implicator', 'Felbat', 'Rylak', 'Felemental', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is what Felbat build should normally look like as you start, but you can always change the cards depending on your situation. Demons are interchangeable, but these are more ideal than others. <a class="hoverimage" href="/bgstrategy/minion/?id=476">Slimy Felblood</a> and <a class="hoverimage" href="/bgstrategy/minion/?id=557">Mirage Conjurer</a> are cards I would recycle, so you can keep finding cards that buff the shop.
        <br><br>
    </p>
    <h3 id="felbateot">Felbat End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Felemental', 'Young Murk-Eye', 'Felemental', 'Felbat', 'Drakkari Enchanter', 'Leroy', 'Leroy'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Some players end up finding two Felbats. What they don't realize is, having multiple Felbats mean you need less demons. You're going to eat at least 4 minions just by having two of them. So you only need one more demon. If you triple the Felbat, then start getting other Demons and <a class="hoverimage" href="/bgstrategy/minion/?id=345">Drakkari Enchanter</a>.
        <br><br>

    </p>
    <h3 id="felbateot">Spell Felbat Comp<a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Big Brother', 'Big Brother', 'Batty Terrorguard', 'Batty Terrorguard', 'Archimonde', 'Felbat', 'Malchezaar'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        More emphasis on using spells and having them buff the shop for bigger Felbat stat gain. Be sure to aim for cheap spells.
    </p>
     <h3 id="felbateot">Spell Self Damage Comp<a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Weaver', 'Archimonde', 'Malchezaar', 'Batty Terrorguard', 'Batty Terrorguard', 'Tichondrius', 'Big Brother'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Two different forms of scaling put into one demon build that uses both self damage and shop buffing mechanics.
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
