<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Murlocs</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=murloc"><i class="bi bi-box-arrow-up-right"></i> All available Murlocs and Murloc-associated minions</a>
    <br><br>
    <!-- general info about Murlocs -->
</p>
<div class="comp_wrapper">
    <h3 id="starter">Murloc Starter Kit Composition <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Striker', 'Prince', 'Prince', 'Cliffdiver', 'Gillmother', 'Gillmother', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is basically a composition to start out Murlocs before you start switching the cards into more endgame like the two builds below.
    </p>

    <h3 id="battlecry">Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Neon Agent', 'Neon Agent', 'Primalfin', 'Murk-Eye', 'Primalfin', 'Bubble Gunner', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You're going to gain a lot of Battlecries with this build. Eventually, you're going to replace the Primalfin with King Bagurgle or Murky to gain more stat buffs. 
    </p>

    <h3 id="keyword">Keyword Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Adaptive Ancestor', 'Belcher', 'Fountain Chiller', 'Murk-Eye', 'Hackerfin', 'Bubble Gunner', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Try to get as many extra keywords as you can on your minions. Even if that includes taunt. This will give you more buffs from Fountain Chiller and Hackerfin. I would also try to get Bubble Gunner to have extra keywords through Murk-Eye to gain more buffs too.
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
