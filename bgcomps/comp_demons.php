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
    $board   = ['Weaver', 'Watcher', 'Watcher', 'Rewinder', 'Malchezaar', 'Malchezaar', 'Tichondrius'];
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

    <h3 id="felbatdr">Felbat Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Trickster', 'Fiery', 'Aranasi', 'Felbat', 'S\'thara', 'Titus', 'Ur\'zul'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Taunt the <strong>Impulsive Trickster</strong> to profit from the Cultist and <strong>Titus</strong>. Improve the Tavern's health by playing multiple <a class="hoverimage" href="/bgstrategy/minion/?id=476">Slimy Felblood</a> early on.
    </p>
    <h3 id="felbateot">Felbat End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Fiery', 'Felbat', 'Felbat', 'Leeroy', 'Bramblewitch', 'S\'thara', 'S\'thara'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a build if you manage to get double <strong>Famished Felbat</strong>. By having two Felbats and one other Demon, it will eat the entire shop. Tier-6 is required so that you can eat 6 minions instead of 5. If you triple the Felbat, then start getting other Demons and <a class="hoverimage" href="/bgstrategy/minion/?id=345">Drakkari Enchanter</a>.
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
