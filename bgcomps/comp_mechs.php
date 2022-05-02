<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Mechs</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Mecherel', 'Pupbot', '*Harvest Golem', 'Mummy', 'Mecherel'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <?php
    $board   = ['Buster', 'Buster', 'Reaper', 'Deflecto', 'Kangor\'s', 'Kangor\'s', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <?php
    $board   = ['Macaw', 'Macaw', 'Reaper', 'Deflecto', 'Buster', 'Buster', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
