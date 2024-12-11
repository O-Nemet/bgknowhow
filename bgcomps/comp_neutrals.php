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
    <h3 id="saloon">Saloon Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Silivaz', 'Silivaz', 'Marquee Ticker', 'Marquee Ticker', 'Enchanter', 'Saloon Dancer', 'Saloon Dancer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When playing this <strong>Saloon</strong> based composition you will go all-in and buy as many cheap spells as possible each turn. Unfortunately, there's only two minions in the game that give you guarenteed spells each turn. Eventually, when you triple them, you should replace them with better minions that have Cleave, Divine Shield or any other special abilities.
    
    </p>

    <h3 id="lightfang">Menagerie Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Warpwing', 'Blade Collector', 'Wildfire', 'Trickster', 'Atrocity', 'Lightfang', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The combination of <strong>Lightfang Enforcer</strong> and <strong>Enchanter</strong> make this tempo comp (based on Tier 5 minions) possible. The other minions can basically be a best-of of the available minion types, just don't play more than one minion per type.
    </p>

    <h3 id="scam">Scam Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Belcher', 'Belcher', 'Leeroy', 'Leeroy', 'Thrasher', 'Thrasher', 'Prince'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a build used if you just cannot find an actual build that scales. This won't win against every build, but it is very effective if your opponent only has 7 strong minions without Deathrattles, Reborns, Divine Shields, or Cleaves. Also, I would taunt Loc Prince. The idea is Belcher attacks, Loc Prince gains venom, your opponent hits Loc Prince, then your 2nd Belcher attacks, giving Loc Prince venom once more.
       
    </p>

    <h3 id="theotar">Theotar Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Warpwing', 'Blade Collector', 'Wildfire', 'Theo', 'Theo', 'Elise', 'Elise'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Focus on getting neutral minions such as the Golden Monkeys. Eventually you will want to triple <strong>Theotar</strong> or Elise, be sure to replace them with <a class="hoverimage" href="/bgstrategy/minion/?id=208">Leeroy</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=111">Deadly Spore</a>.
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
