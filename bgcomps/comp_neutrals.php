<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Neutrals</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
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
</div>

<br><br>
<hr>
<br>
<p>
    <?php include_once('outro.php'); ?>
</p>
<br><br>

<?php include_once('../footer.php'); ?>
