<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3 id="aggem">Aggem Menagerie Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Reaper', 'Blade Collector', 'Trickster', 'Warden', 'Aggem', 'Charly', 'Mistake'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="bristlebach">Bristlebach Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Tusk', 'Handless', 'Handless', 'Puffer', 'Puffer', 'Bristlebach', 'Tusk'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        One Tough Tusk should be taunted. The Handless Forsaken can basically be any minion which summons another minion via Deathrattle or Reborn.
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
    $board   = ['Macaw', '*Bristleback Knight', 'Jazzer', 'Rylak', '*Gem Smuggler', 'Murk-Eye', 'Titus'];
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
