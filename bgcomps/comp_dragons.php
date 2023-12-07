<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Dragons</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<div class="comp_wrapper">
    <!--    <h3 id="tarec">Tarec/Promo Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Rester', 'Rester', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Promo-Drake', 'Nadina'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Don't taunt the Nadina, because your Tarecgosas will start with a shield and are your only heavy hitters.-->
    <!--    </p>-->
    <h3 id="kaly">Kalecgos Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Warpwing', 'Kaly', 'Kaly', 'Amber Guardian', 'Hunter of Gatherers', 'Brann', 'Outback Smolderer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        After securing the key minions <strong>Kalecgos</strong> and <strong>Brann</strong>, focus on getting as many battlecries as you can. When you do activate battlecries, especially ones that give stats, put them on <strong>Hunter of Gatherers</strong> so he can give stats to everyone on the board.
        <br><br>
        Other important cards: <strong>Brann's Blessing</strong>, <strong>Hired Headhunter</strong>, <strong>Dreamer's Embrace</strong> will help your build
    </p>
    <h3 id="drakkari">End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Razorgore', 'Outback Smolderer', 'Nether Drake', 'Nether Drake', 'Whelp Smuggler', 'Hunter of Gatherers', 'Drakkari Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This build may be a bit slow at first, but can really get going once you have <strong>Drakkari Enchanter</strong> or the spell <strong>Primal Staff</strong>. Just make sure that you leave a free space, so you can use the Smolderwing's you gain from Outback Smolderer. If you do triple everything and still got free space, <a class='hoverimage' href='/bgstrategy/minion/?id=454'>Ignition Specialist</a> can work very well.
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

<?php
include_once('../footer.php');
?>
