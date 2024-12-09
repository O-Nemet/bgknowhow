<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Nagas</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=naga"><i class="bi bi-box-arrow-up-right"></i> All available Naga and Naga-associated minions</a>
    <br><br>
    Many Naga feature the <a href="https://bgknowhow.com/bgbasics/#spellcraft">spellcraft ability</a>, generating temporary spells when played and again at the beginning of each turn. Using these they can buff themselves to huge sizes but seldomly have access to more than seven minions during combat, which can make them weak to scam tactics.
</p>
<div class="comp_wrapper">
    <h3 id="deepblues">Deathrattle Spell Naga Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Macaw', 'Showy Cyclist', 'Arcane Cannoneer', 'Thaumaturgist', 'Zesty Shaker', 'Silivaz', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You need to play as much spells as you can. Ideally, try to play cards that give a lot of spells like various Quilboar cards such as Crystal Infuser and Fearless Foodie. This build is heavily focused on Showy Cyclist giving the buffs you need to make the rest of your Naga's strong. Sadly, the power of this build does go down without Beasts or Quilboar's in the lobby, so be wary of this.
    </p>

    <h3 id="athissa">Groundbreaker Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Groundbreaker', 'Groundbreaker', 'Silivaz', 'Darkcrest Strategist', 'Darkcrest Strategist', 'Thaumaturgist', 'Saloon Dancer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Groundbreaker selfishly is going to be the only card mainly getting buffed here through playing Naga's. Luckily, Saloon Dancer is here to give a buff to the rest of your Naga's. Again, focus on Quilboar cards like Crystal Infuser and Fearless Foodie to get as many Spells as you can, but also focus on getting Tavern spells for Saloon Dancer buffs.
    </p>

    <!--    <h3 id="lord">Lord of Gains Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Daggerspine Thrasher', 'Slitherspear', 'Slitherspear', 'The Glad-iator', 'Silivaz', 'Silivaz', 'Drakkari Enchanter'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        There are plenty of cards you want to look for that could definitely help out this build. <a class="hoverimage" href="/bgstrategy/minion/?id=431">Ensorcelled Fungus</a>, <a class="hoverimage" href="/bgstrategy/buddy/?id=44">Magnus Manastorm</a> (from the Buddy Up spell), <a class="hoverimage" href="/bgstrategy/spell/?id=39">Saloon's Finest</a>, <a class='hoverimage' href='/bgstrategy/minion/?id=454'>Ignition Specialist</a>, <a class="hoverimage" href="/bgstrategy/minion/?id=203">Glowscale</a>, and <a class='hoverimage' href='/bgstrategy/minion/?id=434'>Land Lubber</a> are some of these cards.-->
    <!--    </p>-->
</div>

<br><br>
<hr>
<br>
<p>
    <?php include_once('outro.php'); ?>
</p>
<br><br>

<?php include_once('../footer.php'); ?>
