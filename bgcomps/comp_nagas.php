<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Nagas</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Athissa', 'Athissa', 'Siren', '*Nightmare Amalgam', 'Wrangler', 'Glowscale', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    ?>
</div>

<?php
include_once('../footer.php');
?>
