<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Neutrals</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<div class="comp_wrapper">
    <!--    <h3 id="fanatic">Fireworks Fanatic Tier 4 Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board = ['*Blade Collector', '*Bristleback Knight', 'Blanchy', 'Blanchy', 'Warden', 'Fanatic', 'Fanatic'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Stay on tier 4 to limit the minion pool and try to discover Blanchy by tripling your minions.-->
    <!--    </p>-->
    <h3 id="fort">Fort/Taunt Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Phalanx', 'Glowscale', 'Fort', 'Fort', 'Enchanter', 'Matador', 'Barricade'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        These are just an example of minions that make use of the stats given from Walking Fort and synergize with one another. You can always make the taunted minions be minions with special abilities like Divine Shield or Cleave. Wayward Grimscale, Impulsive Trickster or Foe Reaper 4000 are just some of the options.
    </p>
    <h3 id="nalaa">Nalaa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Nalaa', 'Fungus', 'Nalaa', 'Silivaz', 'Sporebat', 'Specialist', 'Seafarer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Other good alternate cards are Bazaar Dealer and Trembling Trolley. You don't necessarily need Ensorcelled Fungus but it does scale quite fast. Try to focus on spells that are cheap, give you access to economy, or find more spells.
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
        If you don't have Archlich Kel'Thuzad, be sure to use Sprightly Scarab or Mecha-Jaraxxus to give it Reborn. If you can't find Kangor's Apprentice or Cultist S'thara, you can still replace them with cards of other minion types.
    </p>
    <!--    <h3 id="mythrax">Mythrax Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Reaper', 'Mythrax', 'Mythrax', 'Phalanx', 'Phalanx', 'Enchanter', 'Glowscale'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        The Reaper can also be a <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> when Pirates are available.-->
    <!--    </p>-->
    <!--    <h3 id="teamaster">Tea Master Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Leeroy', 'Reaper', 'Theo', 'Theo', 'Murghoul', 'Glowscale', 'Phalanx'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        The Reaper can also be a <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> when Pirates are available.-->
    <!--    </p>-->
    <!--    <h3 id="boogie">Boogie Monster Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Leeroy', 'Reaper', 'Boogie', 'Boogie', 'Murghoul', 'Glowscale', 'Leeroy'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        The Reaper can also be a <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> when Pirates are available.-->
    <!--    </p>-->
    <!--    <h3 id="braggart">Braggart KekWait Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Braggart', 'Braggart', 'Braggart', 'Braggart', 'Braggart', 'Braggart', 'Braggart'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Only possible with the anomalies <a href="/bgstrategy/anomaly/?id=13">A Faire Reward</a> and <a href="/bgstrategy/anomaly/?id=8">Secrets of Norgannon</a>. ;-)-->
    <!--    </p>-->
    <!--    <h3 id="lightfang">Lightfang Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Reaper', '?Collector', 'Phalanx', 'Glowscale', 'Lightfang', 'Lightfang', 'Enchanter'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        The Reaper can also be a <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> when Pirates are available.-->
    <!--    </p>-->
    </p>
</div>

<br>
<br>
<hr>
<br>
<p>
    <?php include_once('outro.php'); ?>
</p>
<br><br>

<?php include_once('../footer.php'); ?>
