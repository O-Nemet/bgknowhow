<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Neutrals</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=none"><i class="bi bi-box-arrow-up-right"></i> All available Neutral and Neutral-associated minions</a>
    <br><br>
    <!-- general info about Neutrals -->
</p>
<div class="comp_wrapper">
    <h3 id="odd">Odd Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bramblewitch', 'Myrmidon', 'Matriarch', 'Seafarer', 'Mooneater\'s Champion', 'Mooneater\'s Champion', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

    <h3 id="even">Even Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lasso', 'Deathscale', 'Lubber', 'Greymane\'s Champion', 'Greymane\'s Champion', 'Rylak', 'Tempest'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

    <h3 id="evenspell">Even Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lasso', 'Trickster', 'Blade Collector', 'Lubber', 'Chimera', 'Chimera', 'Greymane\'s Champion'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

    <h3 id="nalaa">Nalaa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Nalaa', 'Fungus', 'Nalaa', 'Silivaz', 'Matriarch', 'Hooktail', 'Seafarer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When playing this <strong>Nalaa</strong> based composition you will go all-in and buy as many cheap spells as possible each turn. During the mid-game try to secure the best minions supporting this end game build, like the examples shown here, depending on the available minion types.
        <br><br>
        Other good alternate cards are <a class='hoverimage' href='/bgstrategy/minion/?id=466'>Whirling Lass-o-Matic</a>, <a class='hoverimage' href='/bgstrategy/minion/?id=437'>Bazaar Dealer</a> and <a class='hoverimage' href='/bgstrategy/minion/?id=457'>Trembling Trolley</a>. You don't necessarily need Ensorcelled Fungus, but it does scale quite fast. Try to focus on spells that are cheap, give you access to economy, or find more spells.
    </p>

    <h3 id="scam">Scam Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bramblewitch', 'Bramblewitch', 'Leeroy', 'Leeroy', 'Thrasher', 'Thrasher', 'Belcher'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a build used if you just cannot find an actual build that scales. This won't win against every build, but it is very effective if your opponent only has 7 strong minions without Deathrattles, Reborns, Divine Shields, or Cleaves.
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
