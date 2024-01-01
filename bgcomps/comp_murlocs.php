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
    <h3 id="battlecry">Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Murky', 'Murk-Eye', 'Murky', 'Murk-Eye', 'Primalfin', 'Grimscale', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buffs the board but can also support one or two <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a> by playing/cycling lots of Murlocs. Keep Young Murk-Eye between two battlecries. Ideally, you want to have the 'handloc' package of Bassgill, Choral Mrrrglr, and Bream Counter.
    </p>
    <h3 id="hand">Handloc Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Belcher', 'Belcher', 'Bassgill', 'Bassgill', 'Choral', 'Choral', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Heavily depends on growing one or two <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a> in your hand or your venom carrying you to victory (don't play this against Undead). Diremuck Forager is a good alternative to Bassgil. Constantly recycle Murlocs so Bream Counter gets buffed.
        <br><br>
        The Bassgill is also useful for summoning <a class="hoverimage" href="/bgstrategy/minion/?id=455">Wayward Grimscale</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=399">Relentless Mur'ghoul</a>. Also <strong>Titus Rivendare</strong> is very good for synergy with Operatic Belcher, Bassgill, and Scourfin.
    </p>
    <h3 id="beast">Beast Math Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Scourfin', 'Scourfin', 'Diremuck Forager', 'Titus', 'Slamma', 'Slamma'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. Any beast in your hand will do, but ones with Deathrattle like Sly Raptor or Ghastcoiler are the best. Once you feel that Scourfin has buffed the beast in your hands enough, throw it away for another <strong>Diremuck Forager</strong>. Do not triple Diremuck Forager. Later on replace <strong>Titus</strong> with another effective card.
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
