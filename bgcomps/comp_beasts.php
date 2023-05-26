<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Beasts</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3>Slamma Deathrattle Comp:</h3>
    <?php
    $board   = ['Raptor', 'Raptor', 'Blanchy', '*Mama Bear', '*Mama Bear', 'Slamma', 'Slamma'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.
    </p>
    <h3>Stomper Deathrattle Comp:</h3>
    <?php
    $board   = ['Rat', 'Raptor', 'Coiler', 'Blanchy', 'Octosari', 'Stomper', 'Stomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Less reliant on Raptor, more suited for Coiler but essentially any reborn or deathrattle summoning minion will do, to trigger the Felstompers. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.
    </p>
    <h3>Leaper Deathrattle Comp:</h3>
    <?php
    $board   = ['Leaper', 'Macaw', 'Macaw', 'Rat', 'Rat', '*Rat Pack', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Very important to taunt the Leaper. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.
    </p>
    <h3>Rylak Battlecry Comp:</h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Deflecto', 'Felemental', 'Rylak', 'Felemental', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Demons or Elementals. Very important to not play other Deathrattle or Taunt minions. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.
        <br><br>
        Improves by the availability of Mechs, because Magnetize is the best option to profit from a heavily buffed tavern. Tricky to play, because your board will be rather weak until you triple minions.
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
