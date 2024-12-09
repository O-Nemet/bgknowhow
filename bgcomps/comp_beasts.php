<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Beasts</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=beast"><i class="bi bi-box-arrow-up-right"></i> All available Beasts and Beast-associated minions</a>
    <br><br>
    All Beast builds can be improved by utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> to Reborn as many Beasts as possible while building up your endgame composition.
</p>
<div class="comp_wrapper">
    <h3 id="selfdamage">Beast Starter Kit <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Raptor', 'Forest Rover', 'Vermin', 'Manasaber', 'Manasaber', 'Humming Bird', 'Bird Buddy'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Think of this as what a beast build will look like around the early to mid game. This is not an end game composition, but will help lead you to better builds down the line.
    </p>

    <h3 id="deathrattle">Goldrinn Beasts <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Goldrinn', 'Horse', 'Horse', 'Manasaber', 'Mount', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Please understand that Monstrous Macaw's effect the leftmost card on your board, not necessarily to it. It will always land on <strong>Goldrinn</strong>, as long as you position it to be the leftmost deathrattle card in comparison to the other deathrattle cards. Ghoul-acabra is not necessary for the build, but it can be another way to gain strength if you cannot find another Goldrinn. Other deathrattle cards from the beast pool like <a class="hoverimage" href="/bgstrategy/minion/?id=297">Sly Raptor</a> and <a class="hoverimage" href="/bgstrategy/minion/?id=305">Manasaber</a> can also fit in the build.
        <br><br>
    </p>

    <h3 id="beatles">Beatle Beasts <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Skitterer', 'Buzzing Vermin', 'Mount', 'Nest Swarmer', 'Runed Progenitor', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is the newest build for Beasts. Your goal is to buff Beatles as much as you can, then summon an overwhelming amount during combat. The biggest problem is that you really need to know how to order your build so that you can summon as much beatles as you possible can during combat. <br><br>
    </p>

    <h3 id="rylakbeatles">Rylak Beatles Beast<a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Rylak', 'Forest Rover', 'Nest Swarmer', 'Nest Swarmer', 'Brann', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This can be the starter kit for Beatle Beast as this focusing a lot more on scaling than the previous build. However, it still can summon plenty of Beatles for combat. Just be sure to know when to stop scaling and focus on just improving your build for the final fights in your lobby. <br><br>
    </p>
</div>

<br><br>
<hr>
<br>
<p>
    <?php include_once('outro.php'); ?>
</p>
<br><br>

<?php include_once('../footer.php'); ?>
