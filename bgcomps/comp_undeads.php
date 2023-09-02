<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Undeads</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3 id="deathrattle">Anub/Titus Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Anub', 'Anub', 'Splitter', 'Splitter', 'Summoner', 'Summoner', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="reborn">Reborn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Splitter', 'Handless', 'Handless', 'Summoner', 'Summoner', 'Deathwhisper', '*Champion of the Primus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="tier7">Tier 7 Nightmare Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Nightmare', 'Nightmare', 'Handless', 'Handless', 'Summoner', 'Summoner', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is the very endgame, after some scaling with <a class="hoverimage" href="/bgstrategy/minion/?id=283">Anub</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=390">Champion of the Primus</a>.
    </p>
    <h3 id="knight">Eternal Knight Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['*Eternal Knight', '*Eternal Knight', 'Splitter', 'Splitter', 'Summoner', 'Summoner', '*Champion of the Primus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="exodia">Exodia Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blaster', 'Selfless', 'Anub', 'Anub', 'Summoner', 'Summoner', 'Titus'];
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
