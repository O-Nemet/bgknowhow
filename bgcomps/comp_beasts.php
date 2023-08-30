<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Beasts</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<p>
    In general Beast compositions utilize the many deathrattle effects available for this minion type and/or different ways of buffing your units during the combat phase. They are pretty self-reliant (do not need another minion type to shine) and neither have a special strength nor weakness against other minion types. All Beast builds can be improved by temporarily utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible while building up your endgame composition.
</p>
<div class="comp_wrapper">
    <h3 id="slamma">Slamma Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Raptor', 'Raptor', 'Krush', '*Mama Bear', '*Mama Bear', 'Slamma', 'Slamma'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This composition is very much dependend on having at least two different Slammas since they scale multipliable. That means two basic ones would multiply the stats of a Beast summoned during combat by 2 x 2 = 4, whereas a golden would just triple their stats. This can heavily scale with other Slammas as long as you have board space (2 x 2 x 3 = 12 for a golden and a regular one). The multiplication by the Slammas is the last effect that goes into the equation, meaning the Sly Raptors will first spawn as 7/7, then the Mama Bears will add their +4/+4 buffs (15/15), followed by the Slammas (resulting in 60/60 for the example lineup shown).
        <br><br>
        <!--        Blanchy is a great unit to have in this build due to its high base stats being set when it is reborn. If Murlocs are available this can be made even better by having a <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=332">Bassgill</a> summon the Blanchy from your hand since that way gets the buffs off of Mama Bear and the Slammas an extra time, which the reborned version will multiply again, to produce a lot more overall combat value. That is also the reason why a minion like <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=61">Rat Pack</a> is not a great fit for this comp, due to the tokens only having a low base stat of 1/1.-->
        <!--        <br><br>-->
        Having Taunt (usually on the Raptors) to protect your Slammas and Mamas alive is also absolutely neccessary, since your boards power gets at least halved per Slamma that gets killed off. Utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> is great for this combo to make the Slamma's reborn, since that keeps up the pressure through their pressence, while having them being pretty large if you have a lot of them. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Octosari</a> is also a great unit to combine with Slamma, if you can get it early on and add a Titus to your board, you can get multiple big summons off of it.
        <br><br>
        Picking up and keeping in hand two <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=372">Free-Flying Feathermane</a> will further increase your composition. The counters to this comp you should watch out for, are <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=144">Zapp</a>, <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=226">Blaster</a>, <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=225">Sin'dorei</a> and some Venomous setups, since you could end up only having 3-4 really strong units over the fight.
    </p>
    <h3 id="stomper">Stomper Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Raptor', 'Coiler', 'Coiler', 'Octosari', 'Octosari', 'Stomper', 'Stomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Less reliant on Raptor, more suited for Coiler but essentially any reborn or deathrattle summoning minion will do, to trigger the Felstompers. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.
    </p>
    <h3 id="stomperundead">Stomper Undead Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Handless', 'Horse', 'Summoner', 'Summoner', 'Coiler', 'Coiler', 'Stomper'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Undead. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.
    </p>
    <!--    <h3 id="leaper">Leaper Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Leaper', 'Macaw', 'Macaw', 'Rat', 'Rat', '*Rat Pack', 'Titus'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        Very important to taunt the Leaper. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.-->
    <!--    </p>-->
    <h3 id="rylak">Rylak Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Macaw', 'Piper', 'Jazzer', 'Rylak', 'Jazzer', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Quilboar. Very important to not play other Deathrattle or Taunt minions. Heavily improves by utilizing <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=95">Reanimating Rattler</a> to Reborn as many Beasts as possible.
        <!--        <br><br>-->
        <!--        Improves by the availability of Mechs, because Magnetize is the best option to profit from a heavily buffed tavern. Tricky to play, because your board will be rather weak until you triple minions. <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=132">Felbat</a> is also an option to buff your board. The Felementals can be replaced by <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=106">Annihilan Battlemaster</a> after your HP is low enough or by <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=260">Mecha-Jaraxxus</a> in the late game.-->
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
