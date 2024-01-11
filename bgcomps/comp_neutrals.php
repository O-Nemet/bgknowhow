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
    <h3 id="fort">Fort/Taunt Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Phalanx', 'Glowscale', 'Fort', 'Fort', 'Enchanter', 'Matador', 'Barricade'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        These are just an example of minions that make use of the stats given from <strong>Walking Fort</strong> and synergize with one another. You can always make the taunted minions be minions with special abilities like Divine Shield or Cleave. <a class="hoverimage" href="/bgstrategy/minion/?id=455">Wayward Grimscale</a>, <a class='hoverimage' href='/bgstrategy/minion/?id=5'>Impulsive Trickster</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=133">Foe Reaper 4000</a> are just some of the options.
        <br><br>
        There are plenty of options to buff any minion with Taunt, therefore if you need the tempo early on it can be a good idea to taunt
    </p>

    <h3 id="nalaa">Nalaa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Nalaa', 'Fungus', 'Nalaa', 'Silivaz', 'Sporebat', 'Specialist', 'Seafarer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When playing this <strong>Nalaa</strong> based composition you will go all-in and buy as many cheap spells as possible each turn. During the mid-game try to secure the best minions supporting this end game build, like the examples shown here, depending on the available minion types.
        <br><br>
        Other good alternate cards are <a class='hoverimage' href='/bgstrategy/minion/?id=437'>Bazaar Dealer</a> and <a class='hoverimage' href='/bgstrategy/minion/?id=457'>Trembling Trolley</a>. You don't necessarily need Ensorcelled Fungus, but it does scale quite fast. Try to focus on spells that are cheap, give you access to economy, or find more spells.
    </p>

    <h3 id="scam">Scam Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bramblewitch', 'Bramblewitch', 'Thrasher', 'Thrasher', 'Matador', 'Matador', 'Murghoul'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a build used if you just cannot find an actual build that scales. This won't win against every build, but it is very effective if your opponent only has 7 strong minions without Deathrattles, Reborns, Divine Shields, or Cleaves.
    </p>

    <h3 id="deathrattle">Deathrattle Menagerie Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Phalanx', 'Kel', 'Belcher', 'Kangor\'s', 'S\'thara', 'Hawkstrider', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        If you don't have Archlich Kel'Thuzad, be sure to use <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> to give it Reborn. If you can't find Kangor's Apprentice or Cultist S'thara, you can still replace them with cards of other minion types.
        <br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.
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
