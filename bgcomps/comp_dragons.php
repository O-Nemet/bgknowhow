<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Dragons</h2>
<p>
    <?= getCompositionText(); ?>
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
    $board   = ['Warpwing', 'Stormbringer', '*Hunter of Gatherers', '*Hunter of Gatherers', 'Kaly', 'Kaly', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        <!--        The Murk-Eye is a bonus if Murlocs are available and can be replaced by <a class="hoverimage" href="/bgstrategy/minion/?id=319">Rylak Metalhead</a> or used as a flex spot to play <a class="hoverimage" href="/bgstrategy/minion/?id=339">Disco Shuffler</a>.-->
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
