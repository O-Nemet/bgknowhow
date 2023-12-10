<?php include_once('../header.php'); ?>

    <h2 class="page_title">Standard Compositions: Demons</h2>
    <p>
        <?php include_once('intro.php'); ?>
    </p>
    <br>
    <hr>
    <p>
        In general Demon compositions utilize their many self-damaging effects available for this minion type and their general stat scaling to build huge minions. They are pretty self-reliant (do not need another minion type to shine) but without picking up an early <a class="hoverimage" href="/bgstrategy/minion/?id=310">Soul Rewinder</a> you will usually take too much damage.
    </p>
    <div class="comp_wrapper">
        <h3 id="tichondrius">Self Damage Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
        <?php
        $board   = ['Weaver', 'Malchezaar', 'Malchezaar', 'Rewinder', 'Watcher', 'Watcher', 'Tichondrius'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
        <p>
            Needs an early <strong>Soul Rewinder</strong> and <strong>Watcher</strong> to trigger damage to yourself. Continously buffs your whole board.
            <br><br>
            Your build becomes stronger, the more self damage you do. Having more than one Wrath Weaver is good, but do not be afraid to triple it if you really need to find your Tichondrius. While Tichondrius is great to buff something like Impulsive Trickster, be wary of the board space as you may not have enough room to recycle a card and keep these other demons. Cultist S'thera with Titus Rivendare is also good if you have a big demon you want to resummon, but it does get countered by Transmuted Bramblewitch.
        </p>
        <h3 id="felbat">Felbat Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
        <?php
        $board   = ['Trickster', 'Felbat', 'Legion Overseer', 'Legion Overseer', 'Felemental', 'S\'thara', 'Titus'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
        <p>
            Taunt the Impulsive Trickster to profit from the Cultist and Titus. If Beasts are available, having Rylak Metalhead inbetween two Felementals will help the build further. Elemental of Surprise is great to triple the two Felementals as well.
            <br><br>
            Drakkari Enchanter can help, but be wary on how that works with Felemental. You can only have 3 demons, as each demon will eat twice at the end of the turn. Having two Felbats with one Drakkari Enchanter only works if Felbat is your only demon.
        </p>
        <h3 id="urzul">Ur'zul Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
        <?php
        $board   = ['Ur\'zul', 'Weaver', 'Rewinder', 'Felbat', 'Legion Overseer', 'S\'thara', 'Ur\'zul'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
        <p>
            Needs a buildup in order to buff all minions in the Tavern via <a class="hoverimage" href="/bgstrategy/minion/?id=259">Felemental</a> and any other means available. Two Insatiable Ur'zul are usually better than a golden one due to venomous/poison. Don't forget to utilize <a class="hoverimage" href="/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> for double Ur'zul triggers and magnetic buffs. Gets weaker if opponents are playing <a class="hoverimage" href="/bgstrategy/minion/?id=398">Transmuted Bramblewitch</a>.
        </p>
        <h3 id="trickster">Macaw/Trickster Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
        <?php
        $board   = ['Macaw', 'Macaw', 'Trickster', 'Hawkstrider', 'Hawkstrider', 'S\'thara', 'Titus'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
        <p>
            Needs the availability of Beasts. Needs a heavily buffed and optimally golden Impulsive Trickster.
        </p>
        <h3 id="demoneye">Feldrake/Murk-Eye Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
        <?php
        $board   = ['Feldrake', 'Murk-Eye', 'Feldrake', 'S\'thara', 'Legion Overseer', 'Titus', 'Murghoul'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
        <p>
            Needs the availability of Murlocs. Buff the Tavern as much as possible to scale your <strong>Feldrakes</strong> every turn via the <strong>Murk-Eye</strong>.
        </p>
    </div>

    <br>
    <br>
    <hr>
    <br>
    <p>
        <?php include_once('outro.php'); ?>
    </p>
    <br><br>

<?php include_once('../footer.php'); ?>