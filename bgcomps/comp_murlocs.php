<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Murlocs</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Selfless', 'Baron', 'Swolefin', 'Striker', 'Dong', 'Honcho', 'Sefin'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <?php
    $board   = ['Dong', 'Swolefin', 'Swolefin', 'Striker', 'Dong', 'Brann', 'Sefin'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
