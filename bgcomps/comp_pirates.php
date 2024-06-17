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
    The main mechanic of Pirates is spending or gaining Gold. <a class='hoverimage' href='/bgstrategy/minion/?id=98'>Ripsnarl Captain</a> and <a class='hoverimage' href='/bgstrategy/minion/?id=322'>Gunpowder Courier</a> are very good early game boosts, but kinda lock yourself into a full Pirate board. They feature the cheapest Cleave minion in the form of <a class='hoverimage' href='/bgstrategy/minion/?id=327'>Blade Collector</a>.
    <br><br>
    Pirates are the original APM (meaning high-speed buying/cycling of cards) minion type as the power of <a class='hoverimage' href='/bgstrategy/minion/?id=322'>Fleet Admiral Tethys</a> enables different builds.
</p>
<div class="comp_wrapper">
    <h3 id="buffs">Buff Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blade Collector', 'Blade Collector', 'Sentry', 'Shipwright', 'Shipwright', 'Courier', 'Courier'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        By no means is this a build that gets you first place. It is a decent build to get you Top 4, however. It's a simple build where you buy spells and use as much gold as possible to gain attack on your minions. Sadly, this build will be utterly destroyed by things like Divine Shield, Reborn and Deathrattles.
    </p>

    <h3 id="apm">Infinite gold aka APM Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Underhanded Dealer', 'Peggy Sturdybone', 'Peggy Sturdybone', 'Record Smuggler', 'Tethys', 'Tethys', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Peggy Sturdybone gets some diminishing returns if you have a wide board of Pirates. So when she stops being effective buffing your <strong>Blade Collector</strong>, you can replace her with <a class='hoverimage' href='/bgstrategy/minion/?id=109'>Brann</a> and use battlecries like <a class='hoverimage' href='/bgstrategy/minion/?id=325'>Lovesick Balladist</a> and <a class='hoverimage' href='/bgstrategy/minion/?id=361'>Crow's Nest Sentry</a>. <strong>Tethys</strong> is your endgame minion to really go infinite. To make sure you go infinite and gain a lot of minions from Tethys, you have to buy cards that give you extra gold to spend. Cards such as <a class="hoverimage" href="/bgstrategy/minion/?id=125">Tavern Tempest</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=193">Shell Collector</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=119">Murozond</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=93">Primalfin Lookout</a>, <a class="hoverimage"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     href="/bgstrategy/minion/?id=429">Rodeo
            Performer</a>, and <a class="hoverimage" href="/bgstrategy/minion/?id=263">General Drakkasith</a>.
    </p>

    <h3 id="spells">Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blade Collector', 'Blade Collector', 'Peggy Sturdybone', 'Peggy Sturdybone', 'Lubber', 'Tethys', 'Greymane\'s Champion'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You want to focus on getting as many even Tier minions or spells to get scaling from this build. Replacing Lubber with another <strong>Tethys</strong> will definitely help, as you will get a better chance of receiving even Tier minions from his effect. Once you find another <strong>Greymane's Champion</strong> I would start to replace Peggy Sturdybone with it, unless you already tripled for that card.
    </p>

    <h3 id="deathrattle">Eliza Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Scallywag', 'Scallywag', 'Recruiter', 'Recruiter', 'Eliza', 'Eliza', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The idea here is that we will scale by having as many attacks as we can. The biggest issue with this build is the awkward way to build this composition. We want to have Scallywag attack first, but <strong>Rapscallion Recruiter</strong> must also attack next. The moment <strong>Eliza</strong> or even <strong>Titus</strong> goes down, the whole build falls apart. Cards like <a class="hoverimage" href="/bgstrategy/minion/?id=203">Glowscale</a> and even <a class="hoverimage" href="/bgstrategy/minion/?id=428">Phaerix</a> can be great cards to help support this build. <a class="hoverimage" href="/bgstrategy/minion/?id=539">Prime Mate</A would really help out in this build.
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
