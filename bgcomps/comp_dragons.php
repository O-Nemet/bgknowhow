<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Dragons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <p>Tarec/Promo Big Stats Comp:</p>
    <?php
    $board   = ['Nadina', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Promo-Drake', 'Razorgore', 'Prestor'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Kalegcos Battlecry Comp:</p>
    <?php
    $board   = ['Bronze Warden', 'Nadina', '*Nightmare Amalgam', 'Kaly', 'Kaly', 'Brann', 'Prestor'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
