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
        Buffs the board but can also support one or two <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a> by playing/cycling lots of Murlocs. Keep <strong>Young Murk-Eye</strong> between two battlecries as they stack with <strong>Brann</strong>. Ideally, you want to have the 'handloc' package of <a class="hoverimage" href="/bgstrategy/minion/?id=332">Bassgill</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=354">Choral Mrrrglr</a>, and <a class="hoverimage" href="/bgstrategy/minion/?id=333">Bream Counter</a>.
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
        <br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.
    </p>

    <h3 id="beast">Beast Math Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Scourfin', 'Scourfin', 'Diremuck Forager', 'Titus', 'Slamma', 'Slamma'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. Any beast in your hand will do, but ones with Deathrattle like <a class="hoverimage" href="/bgstrategy/minion/?id=297">Sly Raptor</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=135">Ghastcoiler</a> are the best. Once you feel that <strong>Scourfin</strong> has buffed the beast in your hands enough, throw it away for another <strong>Diremuck Forager</strong>. Do not triple Diremuck Forager. Later on replace <strong>Titus</strong> with another effective card.
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
