<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Elementals</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=elemental"><i class="bi bi-box-arrow-up-right"></i> All available Elementals and Elemental-associated minions</a>
    <br><br>
    All Elemental builds can be improved by temporarily utilizing <a class="hoverimage" href="/bgstrategy/minion/?id=356">Elemental of Surprise</a> to triple and apply Divine Shield to as many minions as possible while building up your endgame composition.
</p>
<div class="comp_wrapper">
    <h3 id="rockrock">RockRock Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Frostling', 'Wraith', 'Moss', 'Bedrock', 'Rag', 'Rock Rock', 'Rock Rock'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Remember, this build does not necessarily need to be completely Elementals. <strong>Rock Rock</strong> buffs regardless, so if you want to have a cleave minion such as <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a> or <a class="hoverimage" href="/bgstrategy/minion/?id=133">Foe Reaper 4000</a> then you very well can.
        <br><br>
        Lava Lamp, Primordial Terrarium, Kodo Leather Pouch, Jarred Frostling, Essence of Dreams, Shaman Prayer Beads, Karazhan Chest Set are ideal trinkets.
    </p>

    <h3 id="spells">Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Fiery', 'Lubber', 'Lubber', 'Azerite', 'Azerite', 'Glass', 'Glass'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The way for this build to scale high is to create triples. Once you make huge stats with <strong>Living Azerite</strong> and the spells used, you need to start replacing weaker minions with the stronger ones in the shop. Then you need to triple the cards so that you have a card with three times the amount of scaling you provided through Living Azerite. You got to pay attention when it's time to start throwing away like <strong>Living Azerite</strong> or <strong>Land Lubber</strong> because over time they start to feel weaker due to lack of onboard scaling.
        <br><br>
        This is a build that does not need you to be at Tier 5, but there are plenty of Tier 5 minions that help the build. <a class="hoverimage" href="/bgstrategy/minion/?id=476">Slimy Felblood</a> also is quite useful to use.
        <br><br>
        Demonblood Gourd, Darnassus Pie, Dalaran Cheese Wheel, Felblood Portrait, Nomi Sticker, Azerite Portrait, Alliance Keychain, Karazhan Chess Set, Devourer Sticker, Training Certificate, are ideal trinkets.
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
