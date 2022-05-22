<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Dragons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <?php
    $board   = ['Nadina', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Promo-Drake', 'Razorgore', 'Prestor'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Warden', 'Nadina', '*Nightmare Amalgam', 'Kaly', 'Kaly', 'Brann', 'Prestor'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
