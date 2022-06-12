<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Murlocs</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats Comp:</h3>
    <?php
    $board   = ['*Nightmare Amalgam', 'Swolefin', 'Swolefin', 'Striker', 'Brann', 'Sefin', '*Nightmare Amalgam'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    //    $board   = ['Dong', 'Swolefin', 'Swolefin', 'Striker', 'Dong', 'Brann', 'Sefin'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    ?>
    <h3>Selfless/Baron Shield Comp:</h3>
    <?php
    $board   = ['Selfless', 'Baron', 'Swolefin', 'Striker', '*Nightmare Amalgam', 'Honcho', 'Sefin'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    //    $board   = ['Selfless', 'Baron', 'Swolefin', 'Striker', 'Dong', 'Honcho', 'Sefin'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
