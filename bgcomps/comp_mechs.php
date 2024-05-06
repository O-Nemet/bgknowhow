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
    In general, Mechs have the upside of having numerous <a href="/bgbasics/#shield">Divine Shield</a> minions, the ability to resummon Mechs, and small token units. This gives them an advantage against venom/scam compositions and builds with low stats. Except for <a class="hoverimage" href="/bgstrategy/minion/?id=353">Beatboxer</a> magnetization composition, this makes them weak against high stat builds like Demons, Elementals, and Naga. Mechs now have a new mechanic added through the Ziliax cards. Cards such as Ziliax: Defense Module, Ziliax: Crystal Module, and Ziliax: Smoke Module can add incredibly strong keywords to other Mechs. However, you need to triple them with Ziliax: Bonding Module to make sure you can put it on other Mechs.
</p>
<div class="comp_wrapper">
    <h3 id="deflecto">Deflecto Reset Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Deflecto', 'Puller', 'Puller', 'Horse', 'Horse', 'Laborer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        When going for the <strong>Deflect-o-Bot</strong> mech strategy, the important aspect is to have your other mechs get destroyed so <strong>Deflect-o-Bot</strong> can regain its Divine Shield. This allows your Deflectos to deliver free hits without taking damage, a unique strategy that only Mechs and Quilbaors have. The overall strength of your comp will improve by how much you will be able to buff your <strong>Deflect-o-Bots</strong> by utilizing magnetic minions, gems or similar means, during the tavern phase. Which units you pick for the resets is of secondary importance.
        <br><br>
        Eventually you want to get cards like <a class="hoverimage" href="/bgstrategy/minion/?id=62">Replicating Menace</a> so minions that do not have Deathrattle or Reborn such as Augmented Laborer can also provide a reset. <a class="hoverimage" href="/bgstrategy/minion/?id=73">Annoy-o-Module</a> is also important so <strong>Deflect-o-Bot</strong> can be protected by redirecting their attacks to the minions you want. Having Tier-6 minions is not that important as you can find multiple minions to reset <strong>Deflect-o-Bot</strong>. But you are offset by the lack of scaling in this build. Eventually you will want to transition into one of the following compositions.
    </p>

    <h3 id="magnetize">Magnetization Beatboxer Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Deflecto', 'Scraper', 'Drone', 'Beatboxer', 'Beatboxer', 'Mk II', 'Laborer'];
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
    $board   = ['Lasso', 'Lasso', 'Deflecto', 'Deflecto', 'Puller', 'Czarina', 'Czarina'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>The key is obviously to buy the cheapest spells you can. Land Lubber can help with that, but Lasso definitely makes it much easier. If you are missing any of these cards, Foe Reaper, Polarizing Beatboxer, Untameabull can all be good cards as long as you can apply Divine Shield on them. I would not recommend tripling any of these cards other than Charging Czarina.
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
