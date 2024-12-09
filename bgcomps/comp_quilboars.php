<?php include_once('../header.php'); ?>

<h2 class="page_title">Standard Compositions: Quilboars</h2>
<p>
    <?php include_once('intro.php'); ?>
</p>
<br>
<hr>
<br>
<p>
    <a href="/bgstrategy/?show=minions&type=quilboar"><i class="bi bi-box-arrow-up-right"></i> All available Quilboars and Quilboar-associated minions</a>
    <br><br>
    Quilboars have a special mechanic in the form of Blood Gems, which in their base form are +1/+1 buffs that are stored as spells in your hand (the maximum hand size is 10). Gems should be scaled as much as possible/reasonable while leveling up.
    <br><br>
    Due to the gems they have synergies with Mechs and Naga.
    <!--    Quilboar also enable the so called 'Menagerie' builds via <a class="hoverimage" href="/bgstrategy/minion/?id=105">Aggem Thorncurse</a> where you try to pick the best minions of each type.-->
</p>
<div class="comp_wrapper">
    <h3 id="starter">Starter Quilboar <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Buffoon', 'Bannerboar', 'Gem Rat', 'Crystal Infuser', 'Boar Gamer', 'Thorned Trailblazer', 'Prophet of the Boar'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This is just a build that you start with, to set up and start going towards to the other builds.
    </p>

    <h3 id="chooseone">Choose One Quilboar <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['TLQ', 'Turbo Hogrider', 'Turbo Hogrider', 'Gem Rat', 'Thorned Trailblazer', 'Thorned Trailblazer', 'Boar Gamer'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        This build focuses on two things: Buffing up your Blood Gems as much as you can and also buffing everyone in the board as much as you can. You want to focus on Choose One spells and minions.
    </p>

    <h3 id="charly">End of Turn Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Bopper', 'Bopper', 'Gem Rat', 'Charlga', 'Charlga', 'Salty Hog', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        As opposed to the above build, this will give you a lot of cards in your hand, possibly more than you can hold. This build plays on its own, and only really needs you to just play the Blood Gems and Gem Rat spell from your hand.
    </p>

    <h3 id="battlecry"> Battlecry Comp <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <?php
    $board   = ['Pokey', 'Gem Rat', 'Gem Smuggler', 'Murk-Eye', 'Gem Smuggler', 'Brann', 'Enchanter'];
    $minions = getMinionsForBoard($board);
    drawBoard($minions);
    ?>
    <p>
        You need to have already buffed your Blood Gems to a good number, or else this build is not going to go well. Luckily, Pokey and Gem Rat exist. Focus more on health first, then attack. This build also plays by itself, but do try your best to find Eyes of the Earth Mother to turn <strong>Gem Smuggler</strong> golden.
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
