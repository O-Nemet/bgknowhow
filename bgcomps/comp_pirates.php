<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Pirates</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=pirate"><i class="bi bi-box-arrow-up-right"></i> All available Pirates and Pirate-associated minions</a>
    <br><br>
    <!-- general info about Pirates -->
</p>
<div class="comp_wrapper">
    <h3 id="apm">Infinite gold aka APM Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Underhanded Dealer', 'Peggy', 'Peggy', 'Record Smuggler', 'Tethys', 'Tethys', 'Brann'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        Peggy Sturdybone gets some diminishing returns if you have a wide board of Pirates. So when she stops being effective buffing your <strong>Blade Collector</strong>, you can replace her with <a class='hoverimage' href='/bgstrategy/minion/?id=109'>Brann</a> and use battlecries like <a class='hoverimage' href='/bgstrategy/minion/?id=325'>Lovesick Balladist</a> and <a class='hoverimage' href='/bgstrategy/minion/?id=361'>Bloodsail Cannoneer</a>. <strong>Tethys</strong> is your endgame minion to really go infinite.
    </p>

    <h3 id="spells">Spell Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Blade Collector', 'Blade Collector', 'Peggy', 'Peggy', 'Lubber', 'Tethys', 'Greymane'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

    <h3 id="buffs">Buff Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board = ['Blade Collector', 'Blade Collector', 'Courier', 'Shipwright', 'Shipwright', 'Hooktail', 'Lubber'];;
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
    </p>

    <h3 id="deathrattle">Eliza Deathrattle Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Scallywag', 'Scallywag', 'Recruiter', 'Recruiter', 'Eliza', 'Eliza', 'Titus'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        The idea here is that we will scale by having as many attacks as we can. The biggest issue with this build is the awkward way to build this composition. We want to have Scallywag attack first, but <strong>Rapscallion Recruiter</strong> must also attack next. The moment <strong>Eliza</strong> or even <strong>Titus</strong> goes down, the whole build falls apart. Cards like <a class="hoverimage" href="/bgstrategy/minion/?id=203">Glowscale</a> and even <a class="hoverimage" href="/bgstrategy/minion/?id=428">Phaerix</a> can be great cards to help support this build.
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
