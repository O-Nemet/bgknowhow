<?php
include_once('../header.php');
?>

<h2 class="page_title">Endgame Composition: Demons</h2>

<div class="comp_wrapper">
    <?php
    $board = ['Selfless', 'Ur\'zul', 'Dong', 'Dong', 'Mama', 'Felbat', 'Baron'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
        echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
    <?php
    $board = ['Macaw', 'Trickster', 'Trickster', 'Dong', 'Felbat', 'Felbat', 'Mama'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
    echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
    <br>
    <?php
    $board = ['*Ring Matron', '*Ring Matron', 'Voidlord', 'Voidlord', 'Infernal', 'Juggler', 'Juggler'];
    $minions = getMinionsForBoard($board);

    foreach ($minions as $minion) {
    echo '<img src="' . $minion['picture'] . '" alt="' . $minion['name'] . '" title="">';
    }
    ?>
</div>

<?php
include_once('../footer.php');
?>
