<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Nagas</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <p>Spellcraft Comp:</p>
    <?php
    $board   = ['Waverider', 'Myrmidon', '*Eventide Brute', 'Athissa', 'Athissa', 'Orgozoa', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Big Stats Comp:</p>
    <?php
    $board   = ['Athissa', 'Wrangler', 'Wrangler', 'Shoal Commander', 'Shoal Commander', 'Glowscale', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
