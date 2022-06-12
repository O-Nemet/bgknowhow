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
    $board   = ['Nadina', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Promo-Drake', 'Razorgore', 'Prestor'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Kalegcos Battlecry Comp:</h3>
    <?php
    $board   = ['Bronze Warden', 'Nadina', '*Nightmare Amalgam', 'Kaly', 'Kaly', 'Brann', 'Prestor'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
