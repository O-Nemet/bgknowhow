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
    These are builds where neutral minions without any or with all minion types are the core. Those minions will be available in every game, no matter which 5 of the 10 minion types are banned, and therefore can be aimed for quite often. To play them you need to understand the special mechanic of the neutral cards and be flexible enough to replace any missing minions with the types available.
</p>
<div class="comp_wrapper">
    <h3 id="nalaa">Nalaa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lasso', 'Lubber', 'Seafarer', 'Lubber', 'Nalaa', 'Nalaa', 'Arid'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When playing this <strong>Nalaa</strong> based composition you will go all-in and buy as many cheap spells as possible each turn. During the mid-game try to secure the best minions supporting this end game build, like the examples shown here, depending on the available minion types.
        <br><br>
        Goldenizer Supply, Holy Mallet, Alliance Keychain, Peacebloom Candle, Bronze Timepiece, Exquisite Dishware, are all ideal trinkets.
    </p>

    <h3 id="lightfang">Menagerie Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Reaper', 'Blade Collector', 'Warpwing', 'Trickster', 'Arid', 'Lightfang', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The combination of <strong>Lightfang Enforcer</strong> and <strong>Enchanter</strong> make this tempo comp (based on Tier 5 minions) possible. The other minions can basically be a best-of of the available minion types, just don't play more than one minion per type.
    </p>

    <h3 id="scam">Scam Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bramblewitch', 'Bramblewitch', 'Leeroy', 'Leeroy', 'Thrasher', 'Thrasher', 'Belcher'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a build used if you just cannot find an actual build that scales. This won't win against every build, but it is very effective if your opponent only has 7 strong minions without Deathrattles, Reborns, Divine Shields, or Cleaves.
        <br><br>
        If neither Elementals nor Quilboars are available, the Undead minion <a class='hoverimage' href='/bgstrategy/minion/?id=515'>Hateful Hag</a> can work as an alternative by providing Reborn to Leeroy or Venomous minions.
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
