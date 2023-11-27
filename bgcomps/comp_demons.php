<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Demons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<p>
    In general Demon compositions utilize their many self-damaging effects available for this minion type and their general stat scaling to build huge minions. They are pretty self-reliant (do not need another minion type to shine) but without picking up an early <a class="hoverimage" href="/bgstrategy/minion/?id=310">Soul Rewinder</a> you will take too much damage.
</p>
<div class="comp_wrapper">
    <h3 id="tichondrius">Tichondrius Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Malchezaar', 'Malchezaar', 'Rewinder', 'Rewinder', 'S\'thara', 'Tichondrius', 'Tichondrius'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs an early Soul Rewinder and Malchezaar to trigger damage to yourself. Continously buffs your whole board.
    </p>
    <h3 id="urzul">Ur'zul Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Malchezaar', 'S\'thara', 'Weaver', 'Rewinder', 'Felbat', 'Ur\'zul', 'Ur\'zul'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs an early Soul Rewinder and Wrath Weaver to trigger damage to yourself. Two Insatiable Ur'zul are usually better than a golden one due to venomous/poison. Don't forget to utilize <a class="hoverimage" href="/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> for double Ur'zul triggers and magnetic buffs. Gets weaker if opponents are playing <a class='hoverimage' href='/bgstrategy/minion/?id=208'>Leeroy</a>s.
    </p>
    <h3 id="trickster">Macaw/Trickster Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Trickster', 'Trickster', 'Hawkstrider', 'Hawkstrider', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. Needs a heavily buffed and golden Impulsive Trickster.
    </p>
    <h3 id="demoneye">Feldrake/Murk-Eye Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Leeroy', 'Feldrake', 'Murk-Eye', 'Feldrake', '*Legion Overseer', 'S\'thara', 'Murghoul'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Murlocs.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
