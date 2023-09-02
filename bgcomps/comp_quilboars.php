<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<p>
    Quilboars have a special mechanic in the form of Blood Gems, which in their base form are +1/+1 buffs which are stored as spells in your hand (the maximum hand size is 10). Gems should be scaled by using <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=328">Pricky Piper</a> and <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=321">Moon-Bacon Jazzer</a> as much as possible/reasonable while leveling up.
    <br><br>
    Due to the gems they have synergie with Mechs and Naga. Quilboar also enable the so called 'Menagerie' builds via <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=105">Aggem Thorncurse</a> where you try to pick the best minions of each type.
</p>
<div class="comp_wrapper">
    <h3 id="aggem">Aggem Menagerie Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Reaper', 'Thrasher', 'Trickster', 'Spearhide', 'Aggem', 'Charly', 'Amalgam'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Very flexible comp where you basically combine Aggem with the best minions available of each type. Also less dependent on buffing the size of your gems beforehand.
    </p>
    <h3 id="bristlebach">Bristlebach Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Tusk', 'Spearhide', 'Spearhide', '*Bristleback Knight', '*Bristleback Knight', 'Bristlebach', 'Tusk'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        One Tough Tusk should be taunted and placed on the right side as any minion death will reset their Divine Shields during combat. The Spearhides can basically be any minion which summons another minion via Deathrattle or Reborn. The stats gains from Bristlebach are only temporary buffs for the combat.
    </p>
    <h3 id="charly">Charly Gem Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['*Bristleback Knight', '*Bristleback Knight', 'Bopper', 'Bopper', 'Charly', 'Charly', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Heavily depends on buffing the size of your gems before concluding on this board.
    </p>
    <h3 id="tusk">Tusk/Pirate Gem Comp: <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['*Bristleback Knight', 'Blade Collector', 'Flat Tusk', 'Flat Tusk', 'Tethys', 'Tethys', 'Dealer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Pirates. Heavily depends on buffing the size of your gems before concluding on this board.
    </p>
    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Piper', 'Bopper', 'Jazzer', 'Rylak', 'Jazzer', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=130">Charlga</a> can usually replace any of the non gem-buffing minions.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
