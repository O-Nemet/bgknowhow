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

    </p>

    <h3 id="deathrattle">Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Goldrinn', 'Macaw', 'Horse', 'Horse', 'Octosari', 'Deadstomper', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>

    </p>

    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Piper', 'Jazzer', 'Rylak', 'Jazzer', 'Titus'];
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
