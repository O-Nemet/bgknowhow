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
    <h3 id="deepblues">Deep Blues Tier 4 Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Lurker', 'Shaker', 'Shaker', 'Deep Blue', 'Deep Blue', 'Myrmidon', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Stay on tier 4 to get as many <strong>Shakers</strong> and <strong>Crooners</strong> as possible (after you get a golden Crooner, Shakers are more valuable) to constantly increase the size of your Deep Blue spellcrafts. Use them on the Zesty Shakers to get extra copies. Lava Lurker is the best option to make the biggest stats gain permanent each round. Wrangler can be discovered by your triples or be replaced with <a class="hoverimage" href="/bgstrategy/minion/?id=327">Blade Collector</a>, if Pirates are available.
        <br><br>
        Shaker Portrait, Glowscale Portrait, Spitescale Sushi Roll, Rustry Trident, Lorewalker Scroll, Demonblood Gourd, Token of the Old Gods, are ideal trinkets.
    </p>

    <h3 id="athissa">Athissa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Thrasher', 'Myrmidon', 'Athissa', 'Athissa', 'Orgozoa', 'Orgozoa', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        An early Orgozoa can help you discover Glowscale or <strong>Athissa</strong> herself, and later provide gold or further spellcrafts to buff your Naga on the board.
        <br><br>
        Glowscale Portrait, Spitescale Sushi Roll, Rustry Trident, Lorewalker Scroll, Demonblood Gourd, Token of the Old Gods, are ideal trinkets.
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
