<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Nagas</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats Athissa Comp:</h3>
    <?php
    $board   = ['Waverider', 'Myrmidon', '*Eventide Brute', 'Shoal Commander', 'Athissa', 'Orgozoa', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Spellcraft Comp:</h3>
    <?php
    $board   = ['Waverider', 'Myrmidon', 'Wrangler', 'Wrangler', 'Shoal Commander', 'Glowscale', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Menagerie Comp:</h3>
    <?php
    $board   = ['*Nightmare Amalgam', '*Nightmare Amalgam', 'Athissa', 'Aggem', 'Sefin', 'Gemsplitter', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
