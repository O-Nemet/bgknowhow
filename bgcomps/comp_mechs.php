<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Mechs</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=mech"><i class="bi bi-box-arrow-up-right"></i> All available Mechs and Mech-associated minions</a>
    <br><br>
    In general, Mechs have the upside of having numerous <a href="/bgbasics/#shield">Divine Shield</a> minions, the ability to resummon Mechs, and small token units. This gives them an advantage against venom/scam compositions and builds with low stats. Except for <a class="hoverimage" href="/bgstrategy/minion/?id=353">Beatboxer</a> magnetization composition, this makes them weak against high stat builds like Demons, Elementals, and Naga.
</p>
<div class="comp_wrapper">
    <h3 id="deflecto">Deflecto Reset Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Mummy', 'Horse', 'Horse', 'Trolley', 'Laborer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When going for the <strong>Deflect-o-Bot</strong> mech strategy, the important aspect is to have your other mechs get destroyed so <strong>Deflect-o-Bot</strong> can regain its Divine Shield. This allows your Deflectos to deliver free hits without taking damage, a unique strategy that only Mechs and Quilbaors have. The overall strength of your comp will improve by how much you will be able to buff your <strong>Deflect-o-Bots</strong> by utilizing magnetic minions, gems or similar means, during the tavern phase. Which units you pick for the resets is of secondary importance.
        <br><br>
        Eventually you want to get cards like <a class="hoverimage" href="/bgstrategy/minion/?id=62">Replicating Menace</a> so minions that do not have Deathrattle or Reborn such as <a class="hoverimage" href="/bgstrategy/minion/?id=364">Cogwork Copter</a> can also provide a reset. <a class="hoverimage" href="/bgstrategy/minion/?id=73">Annoy-o-Module</a> is also important so <strong>Deflect-o-Bot</strong> can be protected by redirecting their attacks to the minions you want. <a class="hoverimage" href="/bgstrategy/minion/?id=114">Kangor's Apprentice</a> is a very useful card for the build. Having Tier-6 minions is not that important as you can find multiple minions to reset <strong>Deflect-o-Bot</strong>. But you are offset by the lack of scaling in this build. Eventually you will want to transition into one of the following compositions.
    </p>

    <h3 id="magnetize">Magnetization Beatboxer Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Reaper', 'Deflecto', 'Scraper', 'Enchanter', 'Beatboxer', 'Beatboxer', 'Laborer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buy as many magnetic minions as you can to profit of your <strong>Beatboxers</strong> and put it on any Mech you plan to keep until the end game. All of them are decent, so don't be picky. The spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Perfect Vision</a>, multiple <a class="hoverimage" href="/bgstrategy/minion/?id=259">Felemental</a>s, <a class="hoverimage" href="/bgstrategy/minion/?id=364">Cogwork Copter</a>, and <a class="hoverimage" href="/bgstrategy/minion/?id=315">Scourfin</a> (if Murlocs ara available) all help this build, as they double their effect due to <strong>Beatboxer</strong>.
        <br><br>
        Magnetization can be given even on full boards. Also, in the past it was possible to run out of Magnetize minions because the Scrapers pulled minions from the shared minion pool. But this was changed in a July 2023 update, now magnetized minions will return to the pool upon usage.
    </p>

    <h3 id="deathrattle">Buster/Kangor Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Buster', 'Buster', 'Reaper', 'Deflecto', 'Kangor\'s', 'Kangor\'s', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This comp stands and falls with your ability to get a <strong>Titus</strong> and to make it golden. It is a bit luck based in general, because if your <strong>Titus</strong> gets sniped early your overall value will be heavily reduced, and it is tough to really protect it because taunting more than one minion is not beneficial. On the other hand, due to the Deathrattles your board will almost always be full, reducing the chance that your Titus gets attacked to 14,29%.
        <br><br>
        It is quite important to taunt the second <strong>Buster</strong>, then you have a 50% chance that your first two dead minions will be <strong>Busters</strong>. Without the taunt, what will usually happen is that the token from the first Buster will die as a second minion and be saved in the <strong>Kangors</strong>. Taunting also greatly reduces the chance that your <strong>Titus</strong> or <strong>Kangors</strong> will be sniped before providing sufficient value.
        <br><br>
        The Foe Reaper is the least important part of this comp, but obviously increases your chances against venomous or shield lineups. In addition to the <strong>Titus</strong>, tripling a <strong>Buster</strong> is a big plus, whereas a golden <strong>Kangor's</strong> should be avoided as two regular ones are way more valuable. Watch out for the very useful spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> when running this comp.
    </p>

    <h3 id="deathrattlebeasts">Buster Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Reaper', 'Deflecto', 'Buster', 'Buster', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Beasts. As you can see, this comp is very similar to the one above, replacing the <a class="hoverimage" href="/bgstrategy/minion/?id=114">Kangor's</a> with <strong>Macaws</strong>. If beasts are in the lobby, this offers an even stronger alternative, scaling faster than the Mechs-only comp, especially with a golden <strong>Titus</strong>.
        <br><br>
        Due to the Macaws, you have to be mindful to not apply <a class="hoverimage" href="/bgstrategy/minion/?id=62">Replicating Menace</a> to any of your late-game minions, because you really need to trigger your Busters with every attack. The Macaws themselves should be buffed with Reborn via a <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a>, so that you will get two attacks from each Macaw.
        <br><br>
        Golden <strong>Macaws</strong>, a golden <strong>Titus</strong> and golden <strong>Busters</strong> will make the most impact for this composition. If you only have one Buster, taunting the Deflect-o-Bot or even the Reaper as protection for the essential Titus can sometimes be the right call. But with any Titus comp, winning or losing the attack-first coin flip has a huge impact on the following battle.
        <br><br>
        The Macaws can also be replaced with <a class="hoverimage" href="/bgstrategy/minion/?id=421">Hawkstrider Herald</a>. Watch out for the very useful spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> when running this comp.
    </p>

    <h3 id="exodia">Exodia Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blaster', 'Kangor\'s', 'Kangor\'s', 'Buster', 'Buster', 'Deflecto', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a special case of another Mech Deathrattle variation, for which you will bascially need exactly the pieces displayed here, and they should be positioned in this order. Due to the timing interaction of the different components, what will happen is that the <strong>Blaster</strong> will die first and trigger twice, destroying your whole board but the <strong>Titus</strong>. After that mayhem the <strong>Kangor's</strong> will both spawn fresh <strong>Busters</strong> and your board will be 6 big Busters plus the Titus, and every dying Buster will grow the stats on your board again.
        <br><br>
        This is a very hard to beat comp, especially if you are able to protect your Titus by buffing it.
        <!--<br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.-->
    </p>

    <h3 id="lighter">Lighter Fighter Build <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lighter', 'Lighter', 'Hawkstrider', 'Kangor\'s', 'Kangor\'s', 'Titus', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        <a class="hoverimage" href="/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> is an important pickup for this comp, to find you <a class="hoverimage" href="/bgstrategy/minion/?id=291">Baltharak</a> to give <strong>Lighter Fighter</strong> reborn. Taunting the Fighters is advised, of course.
        <!--<br><br>
        Look out for the spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Titus' Tribute</a> which provides the same effect as one <strong>Titus</strong> without needing the board space, but also stacks with it.-->
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
