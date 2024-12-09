<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Pirates</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=pirate"><i class="bi bi-box-arrow-up-right"></i> All available Pirates and Pirate-associated minions</a>
    <br><br>
    The main mechanic of Pirates is spending or gaining Gold. <a class='hoverimage' href='/bgstrategy/minion/?id=98'>Ripsnarl Captain</a> and <a class='hoverimage' href='/bgstrategy/minion/?id=322'>Gunpowder Courier</a> are very good early game boosts, but kinda lock yourself into a full Pirate board. They also feature the cheapest Cleave minion in the form of <a class='hoverimage' href='/bgstrategy/minion/?id=327'>Blade Collector</a>.
    <br><br>
    Pirates are the original APM (meaning high-speed buying/cycling of cards) minion type.
</p>
<div class="comp_wrapper">
    <h3 id="apm">Infinite gold aka APM Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blade Collector', 'Doubloon Grifter', 'Doubloon Grifter', 'Dual-Wield Corsair', 'Dual-Wild Corsair', 'Spacefarer', 'Gunpowder Courier'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You need to focus on buying cards that gives you Pirates such as Patient Scout, Boundless Potential, Hired Headhunter, Contracted Corpse, and Gritty Headhunter. This is going to start slow, especially when you don't have cards to give you the buffs to scale your minions. Do not focus on just buying Pirates, or else you will be wasting money on no stats.
    </p>

    <!--    <h3 id="spells">Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Blade Collector', 'Blade Collector', 'Peggy Sturdybone', 'Peggy Sturdybone', 'Lubber', 'Tethys', 'Greymane\'s Champion'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        You want to focus on getting as many even Tier minions or spells to get scaling from this build. Replacing Lubber with another <strong>Tethys</strong> will definitely help, as you will get a better chance of receiving even Tier minions from his effect. Once you find another <strong>Greymane's Champion</strong> I would start to replace Peggy Sturdybone with it, unless you already tripled for that card.-->
    <!--    </p>-->

    <h3 id="deathrattle">Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Controller', 'Flagbearer', 'Flagbearer', 'Recruiter', 'Eliza', 'Prime Mate', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The idea here is that we will scale by having as many attacks as we can. The biggest issue with this build is the awkward way to build this composition. We want to have Scallywag attack first, but <strong>Rapscallion Recruiter</strong> must also attack next. The moment <strong>Eliza</strong> or even <strong>Titus</strong> goes down, the whole build falls apart. Cards like <a class="hoverimage" href="/bgstrategy/minion/?id=203">Glowscale</a> and even <a class="hoverimage" href="/bgstrategy/minion/?id=428">Phaerix</a> can be great cards to help support this build. <a class="hoverimage" href="/bgstrategy/minion/?id=539">Prime Mate</a> and <a class="hoverimage" href="/bgstrategy/minion/?id=540">Ghoul-acabra</a> would really help out in this build.    
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
