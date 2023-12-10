<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Nagas</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br><br>
<div class="comp_wrapper">
    <h3 id="deepblues">Deep Blues Tier 4 Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Myrmidon', 'Lurker', 'Shaker', 'Shaker', 'Deep Blue', 'Deep Blue', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Stay on tier 4 to get as many <strong>Shakers</strong> and <strong>Crooners</strong> as possible (after you get a golden Crooner, Shakers are more valuable) to constantly increase the size of your Deep Blue spellcrafts. Use them on the Zesty Shakers to get extra copies. Lava Lurker is the best option to make the biggest stats gain permanent each round. Wrangler can be discovered by your triples or be replaced with Blade Collector, if Pirates are available.
    </p>
    <h3 id="deepblues">Lord of Gains Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Slitherspear', 'Daggerspine Thrasher', 'Daggerspine Thrasher', 'The Glad-iator', 'Silivaz', 'Silivaz', 'Drakkari Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        There are plenty of cards you want to look for that could definitely help out this build. Ensorcelled Fungus, Magnus Manastorm (from the Buddy Up spell), Saloon's Finest, Ignition Specialist, Glowscale, and Land Lubber are some of these cards.
    </p>
    <!--    <h3 id="athissa">Athissa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Thrasher', 'Myrmidon', 'Athissa', 'Athissa', 'Orgozoa', 'Orgozoa', 'Glowscale'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        An early Orgozoa can help you discover Glowscale or Athissa herself and later provide gold or further spellcrafts to buff your Naga on the board.-->
    <!--    </p>-->
    <h3 id="wrangler">Wrangler Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Thrasher', 'Blade Collector', 'Myrmidon', 'Wrangler', 'Wrangler', 'Glowscale', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The <strong>Wrangler</strong>s enable the possibility to permanently scale non-Naga minions. Therefore, this comp improves by the availability of Pirates or Mechs, because they both offer a cleave minion (Blade Collector and <a class="hoverimage" href="/bgstrategy/minion/?id=133">Reaper</a>).
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
