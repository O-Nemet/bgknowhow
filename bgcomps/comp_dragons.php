<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Dragons</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=dragon"><i class="bi bi-box-arrow-up-right"></i> All available Dragons and Dragon-associated minions</a>
    <br><br>
    <!-- general info about Dragons -->
</p>
<div class="comp_wrapper">
    <h3 id="kaly">Kalecgos Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Warpwing', 'Kaly', 'Kaly', 'Amber Guardian', 'Hunter', 'Brann', 'Smolderer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        After securing the key minions <strong>Kalecgos</strong> and <strong>Brann</strong>, focus on getting as many battlecries as you can. When you do activate battlecries, especially ones that give stats, put them on <strong>Hunter of Gatherers</strong> so he can give stats to everyone on the board.
        <br><br>
        Instead of the Smolderer it is also possible to combine <a class='hoverimage' href='/bgstrategy/spell/?id=263'>General Drakkisath</a> with either <a class="hoverimage" href="/bgstrategy/minion/?id=319">Rylak Metalhead</a> (when Beasts are available) or <a class='hoverimage' href='/bgstrategy/minion/?id=209'>Young Murk-Eye</a> (when Murlocs are available).
        <br><br>
        Other important cards: <a class='hoverimage' href='/bgstrategy/spell/?id=23'>Brann's Blessing</a>, <a class='hoverimage' href='/bgstrategy/spell/?id=27'>Hired Headhunter</a> and <a class='hoverimage' href='/bgstrategy/spell/?id=32'>Dreamer's Embrace</a> will help your build.
    </p>

    <h3 id="sandstone">Sandstone Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Sandstone', 'Sandstone', 'Smuggler', 'Smuggler', 'Master', 'Master', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Needs the availability of Elementals. Do not triple <strong>Sandstone Drake</strong> or <strong>Master Realities</strong>, they become less effective when put together. <strong>Drakkari Enchanter</strong> accelerates your comp strength into the endgame.</a>.
    </p>

    <!--    <h3 id="drakkari">End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    --><?php
    //    $board   = ['Razorgore', 'Smolderer', 'Ignition Specialist', 'Drake', 'Smuggler', 'Hunter', 'Enchanter'];
    //    $minions = getMinionsForBoard($board);
    //    drawBoard($minions);
    //    ?>
    <!--    <p>-->
    <!--        This build may be a bit slow at first, but can really get going once you have <strong>Drakkari Enchanter</strong> or the spell <a class='hoverimage' href='/bgstrategy/spell/?id=25'>Primal Staff</a> (they do not stack, though). Just make sure that you leave a free space, so you can use the Smolderwings you gain from Outback Smolderer. If you do triple everything and still got free space, <a class='hoverimage' href='/bgstrategy/minion/?id=454'>Ignition Specialist</a> can work very well.-->
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
