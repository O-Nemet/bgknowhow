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
    <h3 id="selfdamage">Self-Damage Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Rampager', 'Untameabull', 'Horse', 'Trigore', 'Skyblazer', 'Skyblazer', 'Savior'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The latest build for Beasts. This relies heavily on <strong>Irisdescent Skyblazer</strong> being the main way for your minions to gain stats. In the early and mid-game, this build becomes quite strong. However, as the game progresses, if you do not have an early Skyblazer then you may have an issue outscaling other builds. You can include cards such as <a class="hoverimage" href="/bgstrategy/minion/?id=256">Titus Rivendare</a> to combine itself with the effects of Silithid Burrower, <a class="hoverimage" href="/bgstrategy/minion/?id=60">Monstrous Macaw</a>, and Fire Dancer.
    </p>

    <h3 id="deathrattle">Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Goldrinn', 'Horse', 'Horse', 'Octosari', 'Deadstomper', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Please understand that Monstrous Macaw's effect the leftmost card on your board, not necessarily to it. It will always land on <strong>Goldrinn</strong>, as long as you position it to be the leftmost deathrattle card in comparison to the other deathrattle cards. Deadstomper is not necessary for the build, but it can be another way to gain strength if you cannot find another Goldrinn. Other deathrattle cards from the beast pool like Sly Raptor and Ghastcoiler can also fit in the build.
    </p>

    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Piper', 'Piper', 'Titus', 'Jazzer', 'Rylak'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Quilboars. Very important to not play other Deathrattle (due to <strong>Macaw</strong>) or Taunt (due to <strong>Rylak</strong>) minions. Heavily improves by utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> to Reborn <strong>Rylak</strong> followed by the Macaw.
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
