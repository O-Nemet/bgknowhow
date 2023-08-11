<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Demons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3 id="tichondrius">Tichondrius Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Felbat', 'Malchezaar', 'Malchezaar', 'Rewinder', 'Rewinder', 'Tichondrius', 'Tichondrius'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs an early Soul Rewinder and Malchezaar to trigger damage to yourself. Continously buffs your whole board.
    </p>
    <h3 id="urzul">Ur'zul Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Malchezaar', 'Weaver', 'Weaver', 'Rewinder', 'Felbat', 'Ur\'zul', 'Ur\'zul'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs an early Soul Rewinder and Wrath Weaver to trigger damage to yourself. Two Insatiable Ur'zul are usually better than a golden one. Don't forget to utilize <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> for double Ur'zul triggers and magnetic buffs. Gets weaker if opponents are playing <a class='hoverimage' href='https://bgknowhow.com/bgstrategy/minion/?id=208'>Leeroy</a>s.
    </p>
    <h3 id="stomper">Stomper Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Felbat', 'Handless', 'Handless', 'Matron', 'Matron', 'Felstomper', 'Felstomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Very 6-drop dependent. The Handless Forsaken can basically be any minion which summons another minion via Deathrattle or Reborn.
    </p>
    <h3 id="trickster">Macaw/Trickster Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Trickster', 'Felbat', 'Felbat', 'Titus', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. Needs a heavily buffed and golden Impulsive Trickster.
    </p>
    <br>
    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Felbat', 'Felbat', 'Battlemaster', 'Felemental', 'Rylak', 'Felemental', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn the Rylak.
        <br><br>
        Improves by playing two Felbat instead of only one or a golden one. That way both will buff each other.
        <br><br>
        The Felementals can be replaced by <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=106">Annihilan Battlemaster</a> after your HP is low enough or by <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> in the late game.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
