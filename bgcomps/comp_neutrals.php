<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Neutrals</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <!--    <h3 id="fanatic">Fireworks Fanatic Tier 4 Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board = ['*Blade Collector', '*Bristleback Knight', 'Blanchy', 'Blanchy', 'Warden', 'Fanatic', 'Fanatic'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Stay on tier 4 to limit the minion pool and try to discover Blanchy by tripling your minions.-->
    <!--    </p>-->
    <h3 id="fort">Fort/Taunt Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Leeroy', 'Glowscale', 'Fort', 'Fort', 'Enchanter', 'Barricade', 'Barricade'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Very flexible in chosing the minions which will be buffed, because it is very easy to buff any minion with Taunt.
    </p>
    <h3 id="mythrax">Mythrax Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Reaper', 'Mythrax', 'Mythrax', 'Phalanx', 'Phalanx', 'Enchanter', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The Reaper can also be a <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> when Pirates are available.
    </p>
    <h3 id="boogie">Boogie Monster Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Leeroy', 'Reaper', 'Boogie', 'Boogie', 'Murghoul', 'Glowscale', 'Leeroy'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The Reaper can also be a <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> when Pirates are available.
    </p>
    <h3 id="braggart">Braggart KekWait Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Braggart', 'Braggart', 'Braggart', 'Braggart', 'Braggart', 'Braggart', 'Braggart'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Only possible with the anomalies <a href="/bgstrategy/anomaly/?id=13">A Faire Reward</a> and <a href="/bgstrategy/anomaly/?id=8">Secrets of Norgannon</a>. ;-)
    </p>
    <!--    <h3 id="lightfang">Lightfang Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Reaper', '?Collector', 'Phalanx', 'Glowscale', 'Lightfang', 'Lightfang', 'Enchanter'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        The Reaper can also be a <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> when Pirates are available.-->
    <!--    </p>-->
    <br>
</div>

<?php
include_once('../footer.php');
?>
