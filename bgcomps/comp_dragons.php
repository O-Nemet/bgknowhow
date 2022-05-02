<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Dragons</h2>

<div class="comp_wrapper">
    <?php
    $board   = ['Nadina', 'Tarecgosa', 'Promo-Drake', 'Tarecgosa', 'Promo-Drake', 'Razorgore', 'Prestor'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
    <?php
    $board   = ['Nadina', 'Kaly', 'Kaly', 'Dong', 'Warden', 'Brann', 'Prestor'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
