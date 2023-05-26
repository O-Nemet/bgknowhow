<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Dragons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Tarec/Promo Big Stats Comp:</h3>
    <?php
    $board   = ['Rester', 'Rester', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Promo-Drake', 'Nadina'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Don't taunt the Nadina, because your Tarecgosas will start with a shield and are your only heavy hitters.
    </p>
    <h3>Kalecgos Battlecry Comp:</h3>
    <?php
    $board   = ['Nadina', 'Stormbringer', 'Drakkisath', 'Murk-Eye', 'Kaly', 'Kaly', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Try to taunt the Nadina. The Murk-Eye is a bonus if Murlocs are available and can be replaced by <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=319">Rylak Metalhead</a> or used as a flex spot to play <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=339">Disco Shuffler</a>.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
