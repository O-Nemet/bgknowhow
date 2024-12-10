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
    <h3 id="nomi">Nomi Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Barnstormer', 'Djinni', 'Djinni', 'Felemental', 'Rag', 'Rag', 'Nomi'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You are going to want to recycle and replay as many Elementals as you possibly can. The best way to do this is by using cards like Gentle Djinni and Windfall Tornado. While the main goal is to buff the Elementals in the shop, the second goal is triple the Elementals that are being buffed. This way, all the stats you accumulated, are being combined into one strong unit. Ideally, one of the cards is Elemental of Surprise to add Divine Shields to your minions.
    </p>

    <h3 id="apm">APM Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Ultraviolet Ascendant', 'Rag', 'Fire Baller', 'Snow Baller', 'Windfall Tornado', 'Brann', 'Djinni'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Keep this in mind. No, you are not keeping the Baller cards or Windfall Tornado in your build. These cards and Sellemental, are used to replay Elementals so Ultraviolet Ascendant can buff your board at the start of combat. Eventually you're going to want cards like Twilight Primordium, Meteorite Crasher, and One-Amalgam Tour Group in your build to make more use of the Elementals being recycled.
    </p>

    <h3 id="eot">End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Ultraviolet Ascendant', 'Twilight Primordium', 'Murk-Eye', 'Djinni', 'Enchanter', 'Rag', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is like the above build except focuses more on Battlecries being replayed by Murk-Eye.
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
