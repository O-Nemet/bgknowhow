<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Bonker', 'Knight', '*Bristleback Brute', 'Pumba', 'Shaker', 'Elder', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board   = ['Hydra', 'Reaper', 'Trickster', 'Warden', 'Aggem', 'Elder', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
