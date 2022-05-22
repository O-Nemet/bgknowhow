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
    $board   = ['Leeroy', 'Myrmidon', '*Eventide Brute', 'Athissa', 'Athissa', 'Wrangler', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Big Stats Comp:</p>
    <?php
    $board   = ['Athissa', 'Siren', 'Wrangler', 'Orgozoa', 'Orgozoa', 'Glowscale', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
