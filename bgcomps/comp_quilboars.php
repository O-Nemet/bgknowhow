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
    $board   = ['Charly', 'Knight', '*Bristleback Brute', 'Pumba', 'Shaker', 'Elder', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Aggem Menagerie Comp:</h3>
    <?php
    $board   = ['Hydra', 'Reaper', 'Trickster', 'Warden', 'Aggem', 'Elder', '*Nightmare Amalgam'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Groundshaker Shield Comp:</h3>
    <?php
    $board   = ['Warden', 'Mecherel', 'Mecherel', 'Warden', 'Groundshaker', 'Gemsplitter', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Elder/Hoggarr Gem Comp:</h3>
    <?php
    $board   = ['Knight', 'Hoggarr', 'Hoggarr', 'Elder', 'Elder', 'Tusk', 'Duo'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
