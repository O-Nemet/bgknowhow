<?php
include_once('../header.php');
?>

<h2 class="page_title">Endgame Composition: Mechs</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Buster', 'Reaper', 'Mecherel', 'Deflecto', 'Buster', 'Kangor\'s', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
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
