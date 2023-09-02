<?php
include_once('../header.php');
?>

<h2 class="page_title">Standard Compositions: Nagas</h2>
<p>
    <?= getCompositionText(); ?>
</p>
<br>
<div class="comp_wrapper">
    <h3 id="deepblues">Deep Blues Tier 4 Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Seaborn', 'Wrangler', 'Shaker', 'Shaker', 'Deep Blue', 'Deep Blue', 'Lurker'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Stay on tier 4 to get as many Shakers and Crooners as possible (after you get a golden Crooner Shakers are more valuable) to constantly increase the size of your Deep Blues spellcrafts. Lurker is the best option to make the biggest stats gain permanent each round. Searborn Summoner will also help to get the Nagas you are missing and Wrangler can be discovered by your triples to strengthen your usually small other minions for the endgame.
    </p>
    <h3 id="athissa">Athissa Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Thrasher', 'Myrmidon', 'Athissa', 'Athissa', 'Orgozoa', 'Orgozoa', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        An early Orgozoa can help you discover Glowscale or Athissa herself and later provide gold or further spellcrafts to buff your Naga on the board.
    </p>
    <h3 id="wrangler">Wrangler Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Thrasher', '*Blade Collector', 'Myrmidon', 'Wrangler', 'Wrangler', 'Glowscale', 'Glowscale'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The Wranglers enable the possibility to scale non-Naga minions. Therefore, this comp improves by the availability of Pirates or Mechs, because they both offer a cleave minion (Blade Collector and <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=133">Reaper</a>).
    </p>
    <br>
</div>

<?php
include_once('../footer.php');
?>
