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
    $board   = ['Deathscale', 'Yu\'lon', 'Kaly', 'Drakkisath', 'Rylak', 'Drakkisath', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        After securing the key minions <strong>Kalecgos</strong> and <strong>Brann</strong>, focus on getting as many battlecries as you can.
        <br><br>
        <strong>Rylak</strong> can also be replaced with <a class='hoverimage' href='/bgstrategy/minion/?id=209'>Young Murk-Eye</a> (when Murlocs are available).
        <br><br>
        Other important cards: <a class='hoverimage' href='/bgstrategy/spell/?id=27'>Hired Headhunter</a> and <a class='hoverimage' href='/bgstrategy/spell/?id=32'>Dreamer's Embrace</a> will help your build.
    </p>

    <h3 id="poet"">Attack Dragon Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Nightbane', 'Amber Guardian', 'Hooktail', 'Poet', 'Hooktail', 'Lubber', 'Smuggler'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

    <h3 id="tarecgosa">Tarecgosa Buff Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Tarecgosa', 'Tarecgosa', 'Promo-Drake', 'Promo-Drake', 'Amber Guardian', 'Poet', 'Rallier'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
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
