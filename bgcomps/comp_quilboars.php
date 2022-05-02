<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>

<div class="comp_wrapper">
    <?php
    $board = ['Bonker', 'Dong', 'Brute', 'Pumba', 'Shaker', 'Flat Tusk', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    $board = ['Hydra', 'Trickster', 'Dong', 'Warden', 'Aggem', 'Flat Tusk', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
