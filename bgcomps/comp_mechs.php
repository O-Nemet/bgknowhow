<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Mechs</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <p>Deflecto Reset Comp:</p>
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Mecherel', 'Pupbot', '*Harvest Golem', 'Mummy', 'Mecherel'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Buster/Kangor Deathrattle Comp:</p>
    <?php
    $board   = ['Buster', 'Buster', 'Reaper', 'Deflecto', 'Kangor\'s', 'Kangor\'s', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>Macaw/Buster Deathrattle Comp:</p>
    <?php
    $board   = ['Macaw', 'Macaw', 'Reaper', 'Deflecto', 'Buster', 'Buster', 'Baron'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
