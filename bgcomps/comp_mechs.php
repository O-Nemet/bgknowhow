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
    <!--    <br><br>-->
    <!--    Mechs also got a new mechanic added through the 6 Zilliax cards available on Tier 2. Cards such as <a class="hoverimage" href="/bgstrategy/minion/?id=504">Zilliax: Defense Module</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=503">Zilliax: Crystal Module</a>, and <a class="hoverimage" href="/bgstrategy/minion/?id=506">Zilliax: Whirring Module</a> can add incredibly strong keywords to other Mechs. However, you need to triple them with <a class="hoverimage" href="/bgstrategy/minion/?id=353">Zilliax: Bonding Module</a> to make sure you can put it on other Mechs.-->
</p>
<div class="comp_wrapper">
    <h3 id="deflecto">Deflecto Reset Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Automaton', 'Automaton', 'Kangor\'s', 'Kangor\'s', 'Greasebot'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When going for the <strong>Deflect-o-Bot</strong> mech strategy, the important aspect is to have your other mechs get destroyed so <strong>Deflect-o-Bot</strong> can regain its Divine Shield. This allows your Deflectos to deliver free hits without taking damage, a unique strategy that only Mechs and Quilboars have. The overall strength of your comp will improve by how much you will be able to buff your <strong>Deflect-o-Bots</strong> by utilizing magnetic minions, gems or similar means, during the tavern phase. Which units you pick for the resets is of secondary importance. Eventually you will want to transition into one of the following compositions.
    </p>

    <h3 id="magnetize">Magnetization Beatboxer Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Scraper', 'Drone', 'Beatboxer', 'Beatboxer', 'Jaraxxus', 'Rylak'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Buy as many magnetic minions as you can to profit of your <strong>Beatboxers</strong> and put it on any Mech you plan to keep until the end game. All of them are decent, so don't be picky. The spell <a class="hoverimage" href="/bgstrategy/spell/?id=38">Perfect Vision</a> can buff magnetic minions in the Tavern.
        <br><br>
        Magnetization can be given even on full boards. Also, in the past it was possible to run out of Magnetize minions because the Scrapers pulled minions from the shared minion pool. But this was changed in a July 2023 update, now magnetized minions will return to the pool upon usage.
    </p>

    <h3 id="shield">Shield Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lasso', 'Lasso', 'Deflecto', 'Deflecto', 'Czarina', 'Czarina', 'Greasebot'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The key with this comp is obviously to buy the cheapest spells you can. Land Lubber can help with that, but <strong>Lasso</strong> definitely makes it much easier. If you are missing any of these cards, <a class="hoverimage" href="/bgstrategy/minion/?id=133">Reaper</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=353">Beatboxer</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=481">Untameabull</a> can all be good cards as long as you can apply Divine Shield on them. I would not recommend tripling any of these cards other than <strong>Charging Czarina</strong>.
    </p>

    <h3 id="shield">Kaboom Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Kaboom', 'Kaboom', 'Kangor\'s', 'Kangor\'s', 'Titus', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This build NEEDS you to have the <a class="hoverimage" href="/bgstrategy/trinket/?id=21">Kaboom Bot Portrait</a> trinket.
    </p>

    <h3 id="shield">Ancestral Automaton Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Leeroy', 'Automaton', 'Automaton', 'Kangor\'s', 'Kangor\'s', 'Titus', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Think of this build similarly to Eternal Summoner and Eternal Knights, except they get stronger for the amount of times they get summoned. So cards like Mecha Jaraxxus, Baltharak and Prosthetic Hand helps resummon them. Fortunately, the returning Kangor's Apprentice also resummons a board full with a combination of Titus. Leeroy can be any card, but preferably a card that isn't a Mech so Kangor's can't resummon it.
        <br><br>
        Trinkets that would go well with this include <a class="hoverimage" href="/bgstrategy/trinket/?id=22">Automaton Portrait</a>, <a class="hoverimage" href="/bgstrategy/trinket/?id=69">Rivendare Portrait</a>, <a class="hoverimage" href="/bgstrategy/trinket/?id=66">Twin Sky Lanterns</a>, <a class="hoverimage" href="/bgstrategy/trinket/?id=83">Boom Controller</a>, <a class="hoverimage" href="/bgstrategy/trinket/?id=82">Mechagon Adaptor</a>, and <a class="hoverimage" href="/bgstrategy/trinket/?id=109">Karazhan Chess Set</a>.
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
