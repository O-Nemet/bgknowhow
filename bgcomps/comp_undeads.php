<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Undeads</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Anub/Titus Deathrattle Comp:</h3>
    <?php
    $board   = ['Anub', 'Anub', 'Summoner', 'Summoner', 'Splitter', 'Splitter', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Reborn Comp:</h3>
    <?php
    $board   = ['Colossus', 'Blanchy', 'Splitter', 'Splitter', 'Deathwhisper', 'Deathwhisper', 'Ball'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Eternal Knight Comp:</h3>
    <?php
    $board   = ['*Eternal Knight', '*Eternal Knight', 'Summoner', 'Summoner', 'Splitter', 'Splitter', 'Deathwhisper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <h3>Exodia Deathrattle Comp:</h3>
    <?php
    $board   = ['Blaster', 'Selfless', 'Anub', 'Anub', 'Summoner', 'Summoner', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
</div>

<?php
include_once('../footer.php');
?>
