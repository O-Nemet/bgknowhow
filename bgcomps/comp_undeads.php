<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Undeads</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=undead"><i class="bi bi-box-arrow-up-right"></i> All available Undeads and Undead-associated minions</a>
    <br><br>
    Undead shine with many Reborn and Deathrattle effects, usually providing you more minions than your opponents. They are able to buff the attack of every Undead permanently and the minion <a class="hoverimage" href="/bgstrategy/minion/?id=444">Disguised Graverobber</a> provides a unique way to alter and buff your warband. <a class="hoverimage" href="/bgstrategy/minion/?id=539">Prime Mate</a> also helps in almost all of the builds.
</p>
<div class="comp_wrapper">
    <h3 id="deathrattle">Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Anub', 'Mummifier', 'Caretaker', 'Handless Forsaken', 'Acabra', 'Crasher', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        For this build you are trying to try do a few things. First, build attack from Anub'arak. Second, summon as much minions as you can to activate Catacomb Crasher's ability. And third, once you gain all the stats you can from Ghoul-acabra, replace him with other cards that will help summon a lot of minions. You could have Monsterous Macaw replace Anub'arak to summon a lot of cards from Caretaker to activate Catacomb Crasher's effect. Or you can use Deathly Striker to summon more minions.
    </p>

    <h3 id="swarm">Swarm Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Anub', 'Caretaker', 'Caretaker', 'Deathly Striker', 'Wandering Wight', 'Titus', 'Crasher'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This build is trying to take advantage of Deathly Striker and Wandering Wight's synergy. You are trying to summon as much minions as you can for Deathly Striker's avenge, and with the attack gained from Anub'arak, they should also have a lot of health from Wandering Wight's ability. The tough part really is hoping attacks go right during combat. Just make sure you know who to taunt, and how to order the cards properly.
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
