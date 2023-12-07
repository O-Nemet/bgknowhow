<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<p>
    Quilboars have a special mechanic in the form of Blood Gems, which in their base form are +1/+1 buffs that are stored as spells in your hand (the maximum hand size is 10). Gems should be scaled by using <a class="hoverimage" href="/bgstrategy/minion/?id=328">Prickly Piper</a> and <a class="hoverimage" href="/bgstrategy/minion/?id=321">Moon-Bacon Jazzer</a> as much as possible/reasonable while leveling up.
    <br><br>
    Due to the gems they have synergies with Mechs and Naga.
    <!--    Quilboar also enable the so called 'Menagerie' builds via <a class="hoverimage" href="/bgstrategy/minion/?id=105">Aggem Thorncurse</a> where you try to pick the best minions of each type.-->
</p>
<div class="comp_wrapper">
    <!--    <h3 id="aggem">Aggem Menagerie Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Reaper', 'Thrasher', 'Trickster', 'Spearhide', 'Aggem', 'Charly', 'Phalanx'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Very flexible comp where you basically combine Aggem with the best minions available of each type. Also, less dependent on buffing the size of your gems beforehand.-->
    <!--    </p>-->
    <h3 id="bristlebach">Bristlebach Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    //    $board   = ['Tusk', 'Spearhide', 'Spearhide', 'Bristleback Knight', 'Bristleback Knight', 'Bristlebach', 'Tusk'];
    $board   = ['Tough Tusk', 'Tough Tusk', 'Prickly Piper', 'Withered Spearhide', 'Withered Spearhide', 'Geomagus Roogug', 'Bristlebach'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is supposed to use <strong>Bristlebach</strong>'s ability to refresh the Divine Shield of the <strong>Tough Tusks</strong>. One Tough Tusk should be taunted and placed on the right side as any minion death will reset their Divine Shields during combat. The Spearhides can basically be any minion which summons another minion via Deathrattle or Reborn.
        <br><br>
        The stat gains from <strong>Bristlebach</strong>'s Avenge ability are only temporary buffs during the combat phase. Make sure your Tusks have Divine Shield prior to battle!
    </p>
    <h3 id="bristlebachshields">Bristlebach Infinite Shield Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Sly Raptor', 'Ghastcoiler', 'Mechanized Gift Horse', 'Eternal Summoner', 'Bristlebach', 'Tough Tusk', 'Tough Tusk'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The idea is to have your opponent hit your taunted <strong>Tough Tusk</strong> and attack their Divine Shield, but your minions keep dying, so they will regain their Divine Shield afterward. This is best with Undeads, but Beasts and Mechs provide options, too.
        <br><br>
        The stat gains from <strong>Bristlebach</strong>'s Avenge ability are only temporary buffs during the combat phase. Make sure your Tusks have Divine Shield prior to battle!
    </p>
    <h3 id="charly">End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bristleback Knight', 'Bristleback Knight', 'Charlga', 'Bongo Bopper', 'Charlga', 'Geomagus Roogug', 'Drakkari Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The key minions for this build are <strong>Charlga</strong> and <strong>Drakkari Enchanter</strong>. Heavily depends on buffing the size of your gems before concluding on this board. You can use Titus Rivendare with Prickly Piper, and buy multiple Moon-Bacon Jazzers to help with the scaling.
    </p>
    <!--    <h3 id="flattusk">Tusk/Pirate Gem Comp: <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Bristleback Knight', 'Blade Collector', 'Flat Tusk', 'Flat Tusk', 'Tethys', 'Tethys', 'Underhanded Dealer'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Needs the availability of Pirates. Heavily depends on buffing the size of your gems before concluding on this board.-->
    <!--    </p>-->
    <h3 id="deathrattle">Scaling Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Prickly Piper', 'Charlga', 'Moon-Bacon Jazzer', 'Rylak Metalhead', 'Moon-Bacon Jazzer', 'Brann Bronzebeard', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. This is a usual setup for you to scale your Blood Gems to high stats. Sadly, this build is quite weak until you get Blood Gems so be sure to know how to find ways to generate them, after you have done enough scaling via <strong>Jazzer</strong> and/or <strong>Piper</strong>.
        <br><br>
        Once you get a Charlga or Bongo Popper, you can scale the entire build and replace one of these cards with Drakkari Enchanter. If you can only get individual Blood Gems, put them onto strong minions with Divine Shield or Cleave. <strong>Rylak Metalhead</strong> can be replaced by <a class='hoverimage' href='/bgstrategy/minion/?id=209'>Young Murk-Eye</a> but isn't as effective.
    </p>
    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Piper', 'Bopper', 'Jazzer', 'Rylak', 'Jazzer', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. <a class="hoverimage" href="/bgstrategy/minion/?id=130">Charlga</a> can usually replace any of the non gem-buffing minions. Heavily improves by reborning the <strong>Rylak</strong> by using <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a>.
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
