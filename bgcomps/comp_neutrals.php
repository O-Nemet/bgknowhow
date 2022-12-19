<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Neutrals</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats Comp:</h3>
    <?php
    $board   = ['Hydra', 'Knight', 'Ball', 'Warden', 'Theo', 'Theo', 'Ball'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);

    ?>
    <h3>Big Stats Taunt Comp:</h3>
    <?php
    $board   = ['Queen', 'Voidlord', 'Queen', 'Glowscale', 'Fort', 'Fort', 'Ball'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
