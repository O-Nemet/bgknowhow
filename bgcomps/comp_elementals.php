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
    $board   = ['Wildfire', 'Wraith', 'Magmaloc', 'Magmaloc', 'Djinni', 'Rock Rock', 'Rock Rock'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        An alternate way for you to scale in combination with Rock Rock is to use Greymane's Champion. This way when you purchase cards such as Sellemental, Tavern Tempest, and Patient Scout. This however means you need to replace cards like Wildfire Elemental and Gentle Djinni with Tier-2, Tier-4, or Tier-6 Elementals. Remember, this build does not necessarily need to be completely Elementals. RockRock buffs regardless, so if you want to have a cleave such as Blade Collector or Foe Reaper then you very well can.
    </p>

    <h3 id="spells">Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Fiery', 'Lubber', 'Lubber', 'Azerite', 'Azerite', 'Shelly', 'Matriarch'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>The way for this build to scale high is to create triples. Once you make huge stats with Living Azerite and the spells used, you need to start replacing weaker cards with the stronger cards in the shop. Then you need to triple the cards so that you have a card with three times the amount of scaling you provided through Living Azerite. You got to pay attention when it's time to start throwing away like Living Azerite or Land Lubber because over time they start to feel weaker due to lack of onboard scaling. This is a build that does not need you to be at Tier-5, but there are plenty of Tier-5 minions that help the build. Slimy Felblood also is quite useful to use. 
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
