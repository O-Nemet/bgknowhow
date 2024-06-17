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
    <h3 id="battlecry">Murloc Starter Kit Composition <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Striker', 'Prince', 'Prince', 'Magmaloc', 'Gillmother', 'Gillmother', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
This is basically a composition to start out Murlocs before you start switching the cards into more endgame like the two builds below. You're going to use Fairy Gillmother as a way to find and search for not only battlecries for Loc Prince, but Bream Counter. Once you find Bream Counter, then you start finding Bassgill or Diremuck Forager. If you don't get Bream Counter then you use the battlecries gained to buff up your other Murlocs. Eventually, if you can't get them strong enough you get <a class="hoverimage" href="/bgstrategy/minion/?id=343">Operatic Belcher</a> to give them venomous.    
    </p>
<div class="comp_wrapper">
    <h3 id="battlecry">Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Choral', 'Choral', 'Bassgill', 'Primalfin', 'Murk-Eye', 'Primalfin', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buffs the board but can also support one or two <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a> by playing/cycling lots of Murlocs. Keep <strong>Young Murk-Eye</strong> between two battlecries as they stack with <strong>Brann</strong>. Ideally, you want to have the 'handloc' package of <a class="hoverimage" href="/bgstrategy/minion/?id=332">Bassgill</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=354">Choral Mrrrglr</a>, and <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a>.
    </p>

    <h3 id="hand">Handloc Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Belcher', 'Belcher', 'Bassgill', 'Bassgill', 'Choral', 'Choral', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Heavily depends on growing one or two <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a> in your hand or your venom carrying you to victory (don't play this against Undead). <a class="hoverimage" href="/bgstrategy/minion/?id=417">Diremuck Forager</a> is a good alternative to Bassgil. Constantly recycle Murlocs so Bream Counter gets buffed.
        <br><br>
        <strong>Titus Rivendare</strong> is very good for synergy with Operatic Belcher and Bassgill.
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
