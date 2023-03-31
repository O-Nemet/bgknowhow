<?php
include_once('../header.php');
?>
<h2 class="page_title">Triple Stats</h2>
<div>
    Triples generate a golden version of the minion. The golden version always has double the base stats of a single non-golden version.
    Buffs and debuffs are transfered to the golden minion, but the golden minions stats can not go below base stats.
    Attack and Health will be evaluated individually.
    <br><br>
    The description and examples below are based on a <a href="https://twitter.com/dcalkosz/status/1389586356079366145" target="_blank">tweet chain</a> provided by Dom (<a href="https://twitter.com/dcalkosz/" target="_blank">@DCalkosz</a>).
    <br>
    For simplicity the examples 1-4 will assume that the third copy will be added to our hand as a plain copy, i.e. just base stats, without any buffs or debuffs.
</div>

<h3>Example 1: Base stats</h3>
<div>
    Unaltered stats will result in a golden minion with its base stats. The golden version of <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=14">Sellemental</a> (2/2) will have base stats of (4/4).
    <br><br>
    <img class="image_centered" src="<?= PICTURE_LOCAL ?>misc/triple_stats/triple_base_stats.webp" alt="two (2/2) Sellementals => (4/4) golden version">
</div>

<h3>Example 2: Buffs</h3>
<div>
    In this example we have two buffed <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=4">Icky Imp</a>s.
    The first one has a buff of (+2/+1). The second one has a buff of (+1/+4). The total of buffs is (+3/+5). The base stats of the golden version are (2/2), thus resulting in a (5/7) triple.
    <br><br>
    <img class="image_centered" src="<?= PICTURE_LOCAL ?>misc/triple_stats/triple_buffs.webp" alt="a (3/2) and a (2/5) Icky Imp => (5/7) golden version">
</div>

<h3>Example 3: Debuffs</h3>
<div>
    In this example we have two <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=219">Tavern Tipper</a>s with a (-1/-1) debuff each. The resulting (-2/-2) would lead to the golden version (4/4) being reduced to a (2/2). But triples will never be reduced below base stats, resulting in a (4/4) golden minion.
    <br><br>
    <img class="image_centered" src="<?= PICTURE_LOCAL ?>misc/triple_stats/triple_debuffs.webp" alt="two (1/1) Tavern Tippers => (4/4) golden version">
</div>

<h3>Example 4: Mixed scenario</h3>
<div>
    In this example we have two <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=273">Rot Hide Gnoll</a>s with (+1/-3) (de-)buffs each, or (+2/-6) in total. Base stats of the golden version are (2/8).
    <br><br>
    The triple will now be created in the following way:
    <ol>
        <li>The applied attack buff (2+2=4) is taken over to the golden minion.</li>
        <li>The health debuff (8-6=2) will not be taken into consideration, because, again, golden minions will at least have base stats.</li>
        <li>The resulting golden version therefore will not be a (4/2), but a (4/8).</li>
    </ol>
    <br>
    <img class="image_centered" src="<?= PICTURE_LOCAL ?>misc/triple_stats/triple_mixed.webp" alt="two (2/1) Rot Hide Gnolls => (4/8) golden version">
</div>

<h3>Example 5: Three buffed minions</h3>
<div>
    When we have three buffed minions, all buffs will simply be added. Examples of ways to buff minions in shop are <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=121">Nomi</a>, <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=79">Dazzling Lightspawn</a>, <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=259">Felemental</a>, <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=237">Legion Overseer</a>, <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=227">Uther</a> or <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/hero/?id=75">Vol'jin</a>. Additionally, you can get buffed minions from
    <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/hero/?id=43">Mr. Bigglesworth</a>'s hero power.
    <br><br>
    As example for a scenario with three buffed minions we have three <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=48">Bristleback Brute</a>s.
    Their buffs are (+27/+30), (+12/+15) and (+2/+2), resulting in a total of (+41/+47). When adding the buffs to the (6/6) base stats of the golden version, a (47/53) golden minion will be the result.
    <br><br>
    <img class="image_centered" src="<?= PICTURE_LOCAL ?>misc/triple_stats/triple_three_buffs.webp" alt="a (30/33), a (15/18) and a (5/5) Bristleback Brute => (47/53) golden version">
</div>

<h3>Example 6: Auras and effects</h3>
<div>
    Auras and effects, like the attack buff from <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=275">Nerubian Deathswarmer</a> or the +1/+1 effect from <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=274">Eternal Knight</a>, will not be added together, but reapplied to the golden version (with golden Eternal Knight having a +2/+2 effect).
    <br><br>
    As the example we have three <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/minion/?id=6">Micro Mummy</a>s.
    The two Mummies in our warband have a (+3/0) and a (+2/0) attack buff from buffing each other. Additionally, they and the Mummies in shop each have a (+1/0) buff from Deathswarmer's battlecry aura. Resulting in (+8/0) buff on three Mummies.
    <br><br>
    The golden version, with base stats (2/4), will only apply the Mummy buffs (+5/0) through tripling. Resulting in a (7/4). The Deathswarmer buff (+1/0) will be applied only once on top of that and make our minion a (8/4).
    <br><br>
    <img class="image_centered" src="<?= PICTURE_LOCAL ?>misc/triple_stats/triple_aura.webp" alt="a (5/2), a (4/2) and a (2/2) Micro Mummy, including (+1/0) Deathswarmer buff => (8/4) golden Mummy">
</div>
<br><br>

<?php
include_once('../footer.php');
?>
