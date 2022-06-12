<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats Comp:</h3>
    <?php
    $board   = ['Bonker', 'Knight', '*Bristleback Brute', 'Pumba', 'Shaker', 'Elder', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Aggem Menagerie Comp:</h3>
    <?php
    $board   = ['Hydra', 'Reaper', 'Trickster', 'Warden', 'Aggem', 'Elder', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
