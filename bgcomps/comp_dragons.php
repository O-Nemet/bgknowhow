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
    $board   = ['Atramedes', 'Nadina', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Promo-Drake', 'Razorgore'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Kalecgos Battlecry Comp:</h3>
    <?php
    $board   = ['Bronze Warden', 'Nadina', 'Atramedes', '*Nightmare Amalgam', 'Kaly', 'Kaly', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Amalgam Poison Comp:</h3>
    <?php
    $board   = ['Nadina', '*Nightmare Amalgam', '*Nightmare Amalgam', 'Nadina', 'Mantid', 'Mantid', 'Sefin'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
