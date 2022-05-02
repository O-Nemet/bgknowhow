<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Elementals</h2>

<div class="comp_wrapper">
    <?php
    $board = ['Cyclone', 'Cyclone', 'Wildfire', 'Wildfire', 'Wraith', 'Brann', 'Nomi'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
    <?php
    $board = ['Cyclone', 'Wildfire', 'Rag', 'Rag', 'Domo', 'Domo', 'Master'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
    echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <?php
    $board = ['Cyclone', 'Wildfire', 'Dong', 'Dong', 'Felbat', 'Mama', 'Nomi'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
