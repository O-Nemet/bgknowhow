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
    <h3 id="odd">Odd Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bramblewitch', 'Myrmidon', 'Matriarch', 'Seafarer', 'Felboar', 'Mooneater\'s Champion', 'Mooneater\'s Champion'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The goal is to get as many Tier 1, Tier 3, or Tier 5 spells as possible to buff up your minions. You could always buy minions of those Tiers, but you would need to free up a slot to play them. There are not many economy, odd Tier cards either to make it worth your gold, other than the cards <a class='hoverimage' href='/bgstrategy/minion/?id=247'>Patient Scout</a> and <a class="hoverimage" href="/bgstrategy/minion/?id=14">Sellemental</a> give when you sell them.
    </p>

    <h3 id="even">Even Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Nightbane', 'Collector', 'Lubber', 'Greymane\'s Champion', 'Greymane\'s Champion', 'Tempest', 'Rylak'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a minion focused method to pull off this <strong>Greyman's Champion</strong> based build, with some Spell support added in. Ideally, the Pirate alternative is much more efficient, using two <a class='hoverimage' href='/bgstrategy/minion/?id=322'>Tethys</a> to gain lots of minions. But if you want to do a menagerie build then this works too. The build below is a better way to play this strategy, as spells are much cheaper and do not require you to create board space.
    </p>

    <h3 id="evenspell">Even Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lasso', 'Lasso', 'Blade Collector', 'Lubber', 'Silivaz', 'Greymane\'s Champion', 'Greymane\'s Champion'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        If you cannot find another <strong>Greymane's Champion</strong>, you can use <a class='hoverimage' href='/bgstrategy/minion/?id=432'>Nalaa the Redeemer</a> instead. But the best thing to do here is focus on purchasing and playing spells rather than minions. Having a golden <strong>Land Lubber</strong> or Silivaz definitely improves your build.
    </p>

    <h3 id="nalaa">Nalaa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lasso', 'Lubber', 'Seafarer', 'Lubber', 'Naala', 'Nalaa', 'Arid'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When playing this <strong>Nalaa</strong> based composition you will go all-in and buy as many cheap spells as possible each turn. During the mid-game try to secure the best minions supporting this end game build, like the examples shown here, depending on the available minion types.

        Goldenlizer Supply, Holy Mallet, Alliance Keychain, Peacebloom Candle, Bronze Timepiece, Exquisite Dishware, are all ideal trinkets.
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

<h3 id="nalaa">Lightfang Menagerie <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Reaper', 'Collector', 'Warpwing', 'Trickster', 'Arid', 'Lightfang', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When playing this <strong>Nalaa</strong> based composition you will go all-in and buy as many cheap spells as possible each turn. During the mid-game try to secure the best minions supporting this end game build, like the examples shown here, depending on the available minion types.

        Goldenlizer Supply, Holy Mallet, Alliance Keychain, Peacebloom Candle, Bronze Timepiece, Exquisite Dishware, Enforcer Portrait are all ideal trinkets.
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
