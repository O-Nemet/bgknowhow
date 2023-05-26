<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Demons</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Big Stats Comp:</h3>
    <?php
    $board   = ['Tichondrius', 'Weaver', 'Malchezaar', 'Rewinder', 'Felbat', 'Ur\'zul', 'Ur\'zul'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs an early Soul Rewinder. Two Insatiable Ur'zul are usually better than a golden one. Don't forget to utilize <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> for double Ur'zul triggers and magnetic buffs.
    </p>
    <h3>Stomper Deathrattle Comp:</h3>
    <?php
    $board   = ['Felbat', 'Imp', 'Imp', 'Matron', 'Matron', 'Felstomper', 'Felstomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Very 6-drop dependent.
    </p>
    <h3>Macaw/Trickster Comp:</h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Trickster', 'Blanchy', 'Blanchy', 'Felbat', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. Needs a heavily buffed and golden Impulsive Trickster.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
