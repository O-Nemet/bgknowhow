<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Neutrals</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats Tea Master/Menagerie Comp:</h3>
    <?php
    $board   = ['Hydra', '*Bristleback Knight', 'Blanchy', 'Warden', 'Theo', 'Theo', 'Queen'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Big Stats Fort/Taunt Comp:</h3>
    <?php
    $board   = ['Queen', 'Blanchy', 'Queen', 'Glowscale', 'Fort', 'Fort', 'Ball'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
