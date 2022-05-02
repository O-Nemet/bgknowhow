<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>

<div class="comp_wrapper">
    <?php
    $board = ['Bonker', 'Dong', 'Brute', 'Pumba', 'Shaker', 'Flat Tusk', 'Duo'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
    <?php
    $board = ['Hydra', 'Trickster', 'Dong', 'Warden', 'Aggem', 'Flat Tusk', 'Duo'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
    echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
