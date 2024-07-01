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
    Dragons have two major mechanics this season. Battlecries as always, and Start of Combat effects. With cards like <a class='hoverimage' href='/bgstrategy/minion/?id=497'>Persistent Poet</a>, you want to try and make every dragon gain Divine Shield permanently from Amber Guardian.
</p>
<div class="comp_wrapper">
    <h3 id="kaly">Kalecgos Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Kaly', 'Kaly', 'Hunter', 'Hunter', 'Brann', 'Drakkisath', 'Rylak'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        After securing the key minions <strong>Kalecgos</strong> and <strong>Brann</strong>, focus on getting as many battlecries as you can. <strong>Rylak</strong> can also be replaced with <a class='hoverimage' href='/bgstrategy/minion/?id=209'>Young Murk-Eye</a> (when Murlocs are available).
        <br><br>
        Other important cards: <a class='hoverimage' href='/bgstrategy/spell/?id=27'>Hired Headhunter</a> and <a class='hoverimage' href='/bgstrategy/spell/?id=32'>Dreamer's Embrace</a> will help your build.
    </p>

    <h3 id="persistent">Persistent Buff Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Nightbane', 'Poet', 'Poet', 'Promo-Drake', 'Promo-Drake', 'Amber Guardian', 'Rallier'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        <a class='hoverimage' href='/bgstrategy/minion/?id=101'>Tarecgosa</a> also can be used but isn't completely necessary. Once <strong>Amber Guardian</strong> permanently gives minions Divine Shield, you can start replacing it with other cards. Persistent Poet is not a card I would want to triple either. You want to make sure you can give as many minions as possible the permanent stats. Lastly, it's never bad to have more than one <strong>Nightbane</strong>, so go for that if you're done with Amber Guardian or want to replace Roaring Rallier.
        <br><br>
        Also consider <a class='hoverimage' href='/bgstrategy/minion/?id=515'>Hateful Hag</a>, if Undead are available, and you could need a permanent Reborn to win against Scam boards.
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
