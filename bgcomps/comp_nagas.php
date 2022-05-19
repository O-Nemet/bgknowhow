<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Nagas</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Athissa', 'Siren', 'Wrangler', 'Orgozoa', 'Orgozoa', 'Glowscale', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Myrmidon', '*Eventide Brute', 'Athissa', 'Athissa', 'Siren', 'Wrangler', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
