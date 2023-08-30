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
    $board   = ['Reaper', 'Blade Collector', 'Trickster', 'Warden', 'Aggem', 'Charly', 'Amalgam'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="bristlebach">Bristlebach Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Tusk', 'Spearhide', 'Spearhide', '*Bristleback Knight', '*Bristleback Knight', 'Bristlebach', 'Tusk'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        One Tough Tusk should be taunted and placed on the right side. The Spearhides can basically be any minion which summons another minion via Deathrattle or Reborn.
    </p>
    <h3 id="charly">Charly Gem Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['*Bristleback Knight', 'Blade Collector', 'Charly', 'Charly', 'Enchanter', 'Duo', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', '*Bristleback Knight', 'Bopper', 'Jazzer', 'Rylak', 'Jazzer', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
