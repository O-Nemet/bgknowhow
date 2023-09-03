<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Murlocs</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3 id="battlecry">Battlecry Hand Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bassgill', 'Bassgill', 'Skyfin', 'Murky', 'Murk-Eye', 'Primalfin', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buffs the board but can also support one or two <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a> by playing/cycling lots of Murlocs. The Bassgill is also useful for summoning <a class="hoverimage" href="/bgstrategy/minion/?id=208">Leeroy</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=399">Relentless Mur'ghoul</a>.
    </p>
    <h3 id="venomous">Venomous Hand Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Belcher', 'Belcher', 'Bassgill', 'Bassgill', 'Choral', 'Choral', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Heavily depends on growing two <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a> in your hand or your venom carrying you to victory (don't play this against Undead). The Bassgill is also useful for summoning <a class="hoverimage" href="/bgstrategy/minion/?id=208">Leeroy</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=399">Relentless Mur'ghoul</a>.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
