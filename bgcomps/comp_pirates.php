<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Pirates</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3 id="apm">Infinite gold aka APM Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['*Blade Collector', 'Dealer', 'Dealer', 'Tethys', 'Tethys', '*Peggy Sturdybone', '*Record Smuggler'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="battlecry">Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['*Blade Collector', 'Dealer', 'Brann', 'Courier', 'Courier', '*Peggy Sturdybone', 'Phalanx'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>
    <h3 id="attack">Attack Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Eliza', 'Eliza', '*Blade Collector', '*Blade Collector', 'Anchor', 'Anchor', 'Phalanx'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>

    <br>
</div>

<?php
include_once('../footer.php');
?>
