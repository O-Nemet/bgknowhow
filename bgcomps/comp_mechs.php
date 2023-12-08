<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Mechs</h2>
<p style="text-align: justify">
    <?php include_once('intro.php'); ?>
</p>
<br>
<p>
    In general Mech compositions are strong against Murlocs and venom/scam comps, and fare better when Quilboars are available to increase the size of shielded mechs in the early- and mid-game. They are weaker against big stats comp like Demons, Elementals or Naga.
</p>
<div class="comp_wrapper">
    <h3 id="deflecto">Deflecto Reset Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Mummy', 'Horse', 'Horse', 'Tank', 'Mummy'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When going for the Deflect-o-Bot mech strategy, it is all about the resets for your MVPs, meaning the regaining of your Bots divine shields when another of your minions dies and summons a new mech. The overall strength of your comp will improve by how much you will be able to buff your Deflect-o-Bots by utilizing magnetic minions, gems or similar means, during the tavern phase. Which units you pick for the resets is of secondary importance.
        <br><br>
        That is one of the beauties of this comp, because it features a very natural progression where your good early game picks like Mummy and Golem are still valuable in the very late game. And even a Copter buffed with a <a class="hoverimage" href="/bgstrategy/minion/?id=62">Replicating Menace</a> can be of great use later. Because you don't need any 6-star or golden minions to win games, you can put great tempo pressure on the other players in the lobby, catching them off-guard before they are able to complete their late-game comps.
        <!--        <br><br>-->
        <!--        The Mecherel on the right should be taunted and shielded by an <a class="hoverimage" href="/bgstrategy/minion/?id=73">Annoy-o-Module</a>. That way you can position all your other shielded minions on the left side and the taunted Mecherel will provide perfect value by getting a new shield every time one of your minions attacks. The second Mecherel is optional, but the first one is kinda essential to play for first place.-->
        <!--        <br><br>-->
        <!--        Another little trick: If your opponent is trying to counter your shields via a <a class="hoverimage" href="/bgstrategy/minion/?id=226">Blaster</a>, your Mecherels will instantly regain their shield as long as another minion with a shield was positioned to the right of the Mecherel.-->
    </p>
    <!--    <h3 id="shields">Greasebot Shield Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Deflecto', 'Copter', 'Troupe', 'Cyborg', 'Cyborg', 'Greasebot', 'Greasebot'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        While this comp may look kinda similar, the focus here is less on the resets and more on the constant stat buffing thanks to the <a class="hoverimage" href="/bgstrategy/minion/?id=83">Grease Bot</a>.-->
    <!--        <br><br>-->
    <!--        The Deflect-o-Bot is rather optional in this comp and can be replaced by any shielded minion, even non-mech ones like <a class="hoverimage" href="/bgstrategy/minion/?id=52">Crackling Cyclone</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=214">Bristleback Knight</a>. But of course, with how easy it is to apply a <a class="hoverimage" href="/bgstrategy/minion/?id=62">Replicating Menace</a>, they will always provide extra value in any mech comp and every reset will synergize with Grease Bot.-->
    <!--    </p>-->
    <h3 id="magnetize">Magnetization Beatboxer Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Reaper', 'Drone', 'Enchanter', 'Beatboxer', 'Beatboxer', 'Scraper', 'Scraper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        In the past it was possible to run out of Magnetize minions because the Scrapers pull minions from the shared minion pool. But this was changed in a July 2023 update, now magnetized minions will return to the pool upon usage.
    </p>
    <h3 id="deathrattle">Buster/Kangor Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Buster', 'Buster', 'Reaper', 'Deflecto', 'Kangor\'s', 'Kangor\'s', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This comp stands and falls with your ability to get a Titus and to make it golden. It is a bit luck based in general, because if your Titus gets sniped early your overall value will be heavily reduced, and it is tough to really protect the Titus because taunting more than one minion is not beneficial. On the other hand, due to the Deathrattles your board will almost always be full, reducing the chance that your Titus gets attacked to 14,29%.
        <br><br>
        It is quite important to taunt the second Buster via <a class="hoverimage" href="/bgstrategy/minion/?id=221">Sparring Partner</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=250">Vigilant Stoneborn</a>. Then you have a 50% chance that your first two dead minions will be Busters. Without the taunt, what will usually happen is that the token from the first Buster will die as a second minion and be saved in the Kangors. Taunting also greatly reduces the chance that your Titus or Kangors will be sniped before providing sufficient value.
        <br><br>
        The Foe Reaper is the least important part of this comp, but obviously increases your chances against venomous or shield lineups. In addition to the Titus, tripling a Buster is a big plus, whereas a golden Kangor's should be avoided as two regular ones are way more valuable.
    </p>
    <h3 id="exodia">Macaw/Buster Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Reaper', 'Deflecto', 'Buster', 'Buster', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        As you can see, this comp is very similar to the one above, replacing the <a class="hoverimage" href="/bgstrategy/minion/?id=114">Kangor's</a> with Macaws. If beasts are in the lobby, this offers an even stronger alternative, scaling faster than the Mechs-only comp, especially with a golden Titus.
        Needs the availability of Beasts.
        <br><br>
        Due to the Macaws, you have to be mindful to not apply <a class="hoverimage" href="/bgstrategy/minion/?id=62">Replicating Menace</a> to any of your late-game minions, because you really need to trigger your Busters with every attack. The Macaws themselves should be buffed with Reborn via a <a class="hoverimage" href="/bgstrategy/minion/?id=420">Sprightly Scarab</a>, so that you will get two attacks from each Macaw.
        <br><br>
        Golden Macaws, a golden Titus and golden Busters will make the most impact for this composition. If you only have one Buster, taunting the Deflect-o-Bot or even the Reaper as protection for the essential Titus can sometimes be the right call. But with any Titus comp, winning or losing the attack-first coin flip has a huge impact on the following battle.
    </p>
    <h3 id="exodia2">Exodia Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blaster', 'Selfless', 'Kangor\'s', 'Kangor\'s', 'Buster', 'Buster', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is a special case of another Mech Deathrattle variation, for which you will bascially need exactly the pieces displayed here (the Selfless Hero is mostly optional, though) and they should be positioned in this order. Due to the timing interaction of the different components, what will happen is that the Blaster will die first and trigger twice, destroying your whole board but the Titus. After that mayhem the Kangor's will both spawn fresh Busters and your board will be 6 big Busters plus the Titus, and every dying Buster will grow the stats on your board again.
        <br><br>
        This is a very hard to beat comp, especially if you are able to protect your Titus from <a class="hoverimage" href="/bgstrategy/minion/?id=144">Zapp</a> by buffing it with <a class="hoverimage" href="/bgstrategy/minion/?id=227">Uther</a> or Blood Gems.
    </p>
    <h3 id="lighter">Lighter Fighter Build <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lighter Fighter', 'Lighter Fighter', 'Kangor\s', 'Kangor\s', 'Titus', 'Titus', 'Mecha Jaraxxus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Mecha Jaraxxus is only important to find you Baltharak to give Lighter Fighter reborn. Alternately you can use Tunnel Blaster just like the Exodia OmegaBuster build to summon a bunch of Lighter Fighters. So that would look like
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
