<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=quilboar"><i class="bi bi-box-arrow-up-right"></i> All available Quilboars and Quilboar-associated minions</a>
    <br><br>
    Quilboars have a special mechanic in the form of Blood Gems, which in their base form are +1/+1 buffs that are stored as spells in your hand (the maximum hand size is 10). Gems should be scaled by using <a class="hoverimage" href="/bgstrategy/minion/?id=328">Prickly Piper</a> and <a class="hoverimage" href="/bgstrategy/minion/?id=321">Moon-Bacon Jazzer</a> as much as possible/reasonable while leveling up.
    <br><br>
    Due to the gems they have synergies with Mechs and Naga.
    <!--    Quilboar also enable the so called 'Menagerie' builds via <a class="hoverimage" href="/bgstrategy/minion/?id=105">Aggem Thorncurse</a> where you try to pick the best minions of each type.-->
</p>
<div class="comp_wrapper">
    <h3 id="roogug">Roogug Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Piper', 'Roogug', 'Pokey', 'Bandit', 'Bandit', 'Bopper', 'Charlga'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Any Quilboar that generates Blood Gems is good, so don't think this is the only way to build this comp. You can also have a <a class="hoverimage" href="/bgstrategy/minion/?id=319">Rylak Metalhead</a> be paired next to <a class="hoverimage" href="/bgstrategy/minion/?id=321">Moon-Bacon Jazzer</a> and a golden <a class="hoverimage" href="/bgstrategy/minion/?id=8">Razorfen Geomancer</a>. You can have <a class="hoverimage" href="/bgstrategy/minion/?id=376">Briarback Bookie</a> or use <a class="hoverimage" href="/bgstrategy/minion/?id=45">Bannerboar</a> as well. Reminder, Pokey Thornmantle does NOT get stronger from Drakkari Enchanter's effect. Feel free to replace this card with something else after he has buffed your Blood Gems to a desirable number.
        <br><br>
        Either way, you want to put as many Blood Gems onto <strong>Geomagus Roogug</strong> as you can. The only issue with this build is, that the other targets for his gem procs are suboptimal. So do try to move your gems over to a minion with Cleave or Divine Shield by using <a class="hoverimage" href="/bgstrategy/minion/?id=90">Necrolyte</a>.
    </p>

    <h3 id="bristlebach">Bristlebach Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Tusk', 'Tusk', 'Three', 'Horse', 'Horse', 'Roogug', 'Bristlebach'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is supposed to use <strong>Bristlebach</strong>'s ability to refresh the Divine Shield of the <strong>Tough Tusks</strong>. The Horses can basically be any minion which summons another minion via Deathrattle or Reborn.
        <br><br>
        The stat gains from <strong>Bristlebach</strong>'s Avenge ability are only temporary buffs during the combat phase. Make sure your <strong>Tusks</strong> have Divine Shield prior to battle!
    </p>

    <h3 id="charly">End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Pokey', 'Pokey', 'Charlga', 'Charlga', 'Bopper', 'Roogug', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The key minions for this build are <strong>Charlga</strong> and <strong>Drakkari Enchanter</strong>. Heavily depends on buffing the size of your gems before concluding on this board. You can use Titus Rivendare with Prickly Piper, and buy multiple Moon-Bacon Jazzers to help with the scaling.
    </p>

    <h3 id="deathrattle">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Piper', 'Piper', 'Charlga', 'Brann', 'Titus', 'Jazzer', 'Rylak'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. This is a usual setup for you to scale your Blood Gems to high stats. Sadly, this build is quite weak until you actually get Blood Gems. So be sure to know how to find ways to generate them, after you have done enough scaling via <strong>Jazzer</strong> and/or <strong>Piper</strong>. Heavily improves by reborning the <strong>Rylak</strong> by using <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a>.
        <br><br>
        Instead of Brann you can also play a <a class="hoverimage" href="/bgstrategy/minion/?id=60">Monstrous Macaw</a> (on position #1 of course).
        <br><br>
        Once you get a Charlga or <a class='hoverimage' href='/bgstrategy/minion/?id=348'>Bongo Bopper</a>, you can scale the entire build and replace one of these cards with Drakkari Enchanter. If you can only get individual Blood Gems, put them onto strong minions with Divine Shield or Cleave. <strong>Rylak Metalhead</strong> can be replaced by <a class='hoverimage' href='/bgstrategy/minion/?id=209'>Young Murk-Eye</a> (if Murlocs are available) but isn't as effective. Once you have the Blood Gems buffed, you can use <a class='hoverimage' href='/bgstrategy/minion/?id=545'>Three Lil' Quilboar</a> with Titus Rivendare for big stats on your Quilboar.
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
