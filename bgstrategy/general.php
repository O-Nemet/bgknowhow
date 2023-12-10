<?php
include_once('../header.php');
?>
    <h2 class="page_title">General Strategy</h2>

    <h3 id="taverntiers">Tavern Tiers and upgrading <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        The cost to upgrade to the next tavern tier will reduce by 1 gold at the beginning of each of your turns. For example if you have upgraded to tavern tier 2 the cost to upgrade to tier 3 will be 7 gold. After you enter the next fight and then reenter the tavern shop the cost to upgrade will be reduced to 6 gold.
        <br><br>
        When upgrading to tier 2, tier 4 and tier 6 the number of minions offered per roll in the tavern will increase by 1.
        <br><br>
        The higher the tier, the fewer copies of each minion will be available in the minion pool shared by all players. For example each tier 6 minion is only available 7 times. So if you fight someone who has a golden tier 6 minion, there will only be a maximum of 4 copies left for pickup in the tavern. This includes most ways of discoveries, but not the hero powers of <a class="hoverimage" href="/bgstrategy/heroes/?id=66">Tess</a> and <a class="hoverimage" href="/bgstrategy/heroes/?id=57">Scabbs</a> who will generate additional minions. Minions sold during the game will be readded to the shared pool (golden minions will be reverted to three normal ones).
        <br><br>
        Since August 2023 (patch 27.2.0) Tavern Tier 7 has been added to the game, but will only be accessible in games affected by the anomaly <a href="/bgstrategy/anomaly/?id=8">Secrets of Norgannon</a>. One minion per minion type as well as three neutral minions were newly created and the all types unit <a class="hoverimage" href="/bgstrategy/heroes/?id=128">Amalgadon</a> returned upgraded from Tier 6.
    </p>
    <br>
    <table class="tier-table">
        <thead>
        <tr>
            <th>Tavern Tier</th>
            <th>Upgrade base cost</th>
            <th>Minions in tavern</th>
            <th>Copies of each minion</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>-</td>
            <td>3</td>
            <td>15</td>
        </tr>
        <tr>
            <td>2</td>
            <td>5</td>
            <td>4</td>
            <td>15</td>
        </tr>
        <tr>
            <td>3</td>
            <td>7</td>
            <td>4</td>
            <td>13</td>
        </tr>
        <tr>
            <td>4</td>
            <td>8</td>
            <td>5</td>
            <td>11</td>
        </tr>
        <tr>
            <td>5</td>
            <td>11</td>
            <td>5</td>
            <td>9</td>
        </tr>
        <tr>
            <td>6</td>
            <td>10</td>
            <td>6</td>
            <td>7</td>
        </tr>
        <tr>
            <td>7</td>
            <td>10</td>
            <td>6</td>
            <td>5</td>
        </tr>
        </tbody>
    </table>

<?php
// loops over all active non-token minions, identifies the type and increases the count for the type and the pool
foreach ($tempMinions->data as $key => $object) {
    if ($object->isActive === true && $object->isToken !== true) {
        $type  = ((is_null($object->type) || $object->type == 'All') && $object->pool === 'All' && $object->name !== 'Ball of Minions') ? 'None' : $object->type;
        $type2 = !isset($object->types[1]) ? null : $object->types[1];
        @$minion_count[$type][$object->tier] = @$minion_count[$type][$object->tier] + 1;
        @$minion_count[$type][8] = @$minion_count[$type][8] + 1;
        @$minion_pool[$object->pool][$object->tier] = @$minion_pool[$object->pool][$object->tier] + 1;
        @$minion_pool[$object->pool][8] = @$minion_pool[$object->pool][8] + 1;
        if ($type2) {
            @$minion_count[$type2][$object->tier] = @$minion_count[$type2][$object->tier] + 1;
            @$minion_count[$type2][8] = @$minion_count[$type2][8] + 1;
            @$minion_pool[$object->pools[1]][$object->tier] = @$minion_pool[$object->pools[1]][$object->tier] + 1;
            @$minion_pool[$object->pools[1]][8] = @$minion_pool[$object->pools[1]][8] + 1;
        }
        @$minion_count['Total'][$object->tier] = @$minion_count['Total'][$object->tier] + 1;
        @$minion_count['Total'][8] = @$minion_count['Total'][8] + 1;
    }
}
?>
    <h3 id="miniontypes">Minion types and distribution <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        The different minion types are not equally distributed across the six tavern tiers. For example Nagas have only two tier 4 minions. <!--Even on tier 1, where each type used to have two minions, Elementals have access to three minions, since the addition of <a class="hoverimage" href='/bgstrategy/minion/?id=216'>Bubblette</a>. -->Also notice the neutral minion <a class="hoverimage" href='/bgstrategy/minion/?id=17'>Wrath Weaver</a>, which is the third minion in the Demon pool on tier 1.
        <!--        <br><br>-->
        <!--        On tier 5 there is one special case regarding the minion <a class="hoverimage" href='/bgstrategy/minion/?id=104'>Agamaggan, the Great Boar</a>, which is of type Beast but will only show up in lobbies featuring Quilboar. This leads to the curious effect of <a class="hoverimage" href='/bgstrategy/minion/?id=212'>Reef Explorer</a> providing you with a guaranteed Agamaggan, when you already control a minion of each type.-->
        <br><br>
        The table below is automatically generated and therefore always up to date and accurate. Click on the different types or tiers to display all minions for that selection.
    </p>
    <br>

    <table class="tier-table">
        <thead>
        <tr>
            <th colspan="13">Minion type count per tier</th>
        </tr>
        <tr>
            <th>Tier</th>
            <th><a href="/bgstrategy/?show=minions&type=beast">Beasts</a></th>
            <th><a href="/bgstrategy/?show=minions&type=demon">Demons</a></th>
            <th><a href="/bgstrategy/?show=minions&type=dragon">Dragons</a></th>
            <th><a href="/bgstrategy/?show=minions&type=elemental">Elementals</a></th>
            <th><a href="/bgstrategy/?show=minions&type=mech">Mechs</a></th>
            <th><a href="/bgstrategy/?show=minions&type=murloc">Murlocs</a></th>
            <th><a href="/bgstrategy/?show=minions&type=naga">Naga</a></th>
            <th><a href="/bgstrategy/?show=minions&type=pirate">Pirates</a></th>
            <th><a href="/bgstrategy/?show=minions&type=quilboar">Quilboars</a></th>
            <th><a href="/bgstrategy/?show=minions&type=undead">Undeads</a></th>
            <th><a href="/bgstrategy/?show=minions&type=none">None</a></th>
            <th><a href="/bgstrategy/?show=minions">Total</a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            echo "    <td>" . ($i == 8 ? '<a href="/bgstrategy/?show=minions">Total</a>' : '<a href="/bgstrategy/?show=minions&tier=' . $i . '">' . $i . '</a>') . "</td>";
            echo "    <td>" . $minion_count['Beast'][$i] . " (" . ($minion_pool['Beast'][$i] - $minion_count['Beast'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Demon'][$i] . " (" . ($minion_pool['Demon'][$i] - $minion_count['Demon'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Dragon'][$i] . " (" . ($minion_pool['Dragon'][$i] - @$minion_count['Dragon'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Elemental'][$i] . " (" . ($minion_pool['Elemental'][$i] - $minion_count['Elemental'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Mech'][$i] . " (" . ($minion_pool['Mech'][$i] - $minion_count['Mech'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Murloc'][$i] . " (" . ($minion_pool['Murloc'][$i] - @$minion_count['Murloc'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Naga'][$i] . " (" . ($minion_pool['Naga'][$i] - $minion_count['Naga'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Pirate'][$i] . " (" . ($minion_pool['Pirate'][$i] - $minion_count['Pirate'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Quilboar'][$i] . " (" . ($minion_pool['Quilboar'][$i] - $minion_count['Quilboar'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Undead'][$i] . " (" . ($minion_pool['Undead'][$i] - $minion_count['Undead'][$i]) . ")</td>";
//            echo "    <td>" . $minion_count['None'][$i] . "</td>";
            echo "    <td>" . (($i == 1) ? 0 : $minion_count['None'][$i]) . "</td>";
            echo "    <td>" . $minion_count['Total'][$i] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <h3 id="spelltiers">Spell Tiers and distribution <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Whenever a spell is bought/generated, it immediately returns to the pool. There is a specific number of copies of each spell in the pool, but it's kind of like appearance rate since they get replaced immediately.
    </p>
    <br>
    <table class="tier-table">
        <thead>
        <tr>
            <th>Tavern Tier</th>
            <th>Number of different spells</th>
            <th>Copies of each spell</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>7</td>
            <td>5</td>
        </tr>
        <tr>
            <td>2</td>
            <td>7</td>
            <td>7</td>
        </tr>
        <tr>
            <td>3</td>
            <td>7</td>
            <td>9</td>
        </tr>
        <tr>
            <td>4</td>
            <td>9</td>
            <td>11</td>
        </tr>
        <tr>
            <td>5</td>
            <td>7</td>
            <td>7</td>
        </tr>
        <tr>
            <td>6</td>
            <td>5</td>
            <td>5</td>
        </tr>
        </tbody>
    </table>

    <h3 id="3on3">Tier 2 minions influencing your decision to go 3on3 <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        While some heroes like <a class="hoverimage" href='/bgstrategy/hero/?id=13'>Cookie</a> and <a class="hoverimage" href='/bgstrategy/hero/?id=24'>Galewing</a> demand to play a 3on3 curve nearly 100% of the time, there are others where the decision to go for tier 3 on turn 3 will heavily depend on the tier 2 minions offered in the tavern. Below you will find a tier list of sorts, for the tempo value of all the tier 2 minions available, if you have decided to level on turn two. Notice that you will usually sell the minion bought on turn 1 in order to buy two better minions, unless you got a 'token' like <a class="hoverimage" href='/bgstrategy/minion/?id=14'>Sellemental</a> or <a class="hoverimage" href='/bgstrategy/hero/?id=193'>Shell Collector</a>. Therefore, make sure that those two minions are worth it (don't buy tier 1 minions, for example).
    </p>
    <br>
    <p>
        Abort 3on3 plan, go for the minions:
    </p>
    <div class="comp_wrapper cf">
        <?php
        $board   = ['Gambler', 'Eternal Knight'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        ?>
    </div>
    <p>
        Heavily think about switching up your 3on3 plan:
    </p>
    <div class="comp_wrapper cf">
        <?php
        $board   = ['Rat', 'Ripsnarl', 'Angler', 'Bookie', 'Rewinder', 'Sandspewer', 'Gobbler', 'Lubber'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        ?>
    </div>
    <p>
        Middle of the pack, decide based on hero, synergy and/or lobby composition:
    </p>
    <div class="comp_wrapper cf">
        <?php
        $board   = ['Snapjaw', 'Tusk', 'Lurker', 'Riffer', 'Snail', 'Copter', 'Lulla', 'Trickster', 'Muck', 'Skyfin', 'Refiner', 'Deathswarmer', 'Murcules', 'Duelist'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        ?>
    </div>
    <p>
        Not really worth it, better go 3on3:
    </p>
    <div class="comp_wrapper cf">
        <?php
        $board   = ['Emissary', 'Tad', 'Barnstormer', 'Smuggler', 'Scout'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        ?>
    </div>
    <p>
        Definitely not worth it, absolutely go 3on3:
    </p>
    <div class="comp_wrapper cf">
        <?php
        $board   = ['Bird', 'Mug', 'Oozeling'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        ?>
    </div>

    <h3 id="keyminions">Key minions guiding your strategy <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <p>
        Transitioning from mid-game to a viable end-game composition is an important step you should master in order to improve your game. Often times your first discovery of a 5 or 6 drop minion after a triple, will guide you in a specific direction. Here are the key minions for each minion type strategy:
    </p>
    <div class="comp_wrapper cf">
        <?php
        $board   = ['Rylak', 'Slamma', 'Hawkstrider', 'Goldrinn'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Rewinder', 'Tichondrius', 'Ur\'zul', 'Felbat'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Razorgore', '*Hunter of Gatherers', 'Kaly'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Master', 'Rock Rock'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Deflecto', 'Scraper', 'Beatboxer'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Counter', 'Bassgill', 'Belcher', 'Choral'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Lava Lurker', 'Deep Blue', 'Wrangler', 'Slitherspear'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Peggy Sturdybone', 'Underhanded Dealer', 'Eliza', 'Tethys'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Piper', 'Roggug', 'Charly', 'Bristlebach'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Anub', '*Champion of the Primus', 'Summoner', 'Kel'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        echo "<br>";
        $board   = ['Brann', 'Enchanter', 'Titus', 'Fort', 'Nalaa', 'Phalanx'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        ?>
    </div>

<?php
// Ghastcoiler minions
$i = 0;
foreach ($tempMinions->data as $key => $object) {
    if ($object->isActive && !$object->isToken && $object->abilities->hasDeathrattle && $object->tier <= 6 && $object->name !== 'Ghastcoiler') {
        $board[] = $object->name;
        $i++;
    }
}
?>
    <h3 id="coiler">Ghastcoiler odds <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <div style="margin-top: -30px;">
        <a href="/bgstrategy/minion/?id=135"><img width="200" src="/images/minions/BGS_008_render_80.webp" style="float: left; margin-left: 40px; margin-right: 30px;" alt="The minion Ghastcoiler"></a>
        <p style="width: 920px; padding-top: 40px; text-align: justify;">
            This beast is a potent lategame minion. Therefore, it is advisable to know the odds of getting an <a class="hoverimage" href='/bgstrategy/minion/?id=343'>Operatic Belcher</a>, a <a class="hoverimage" href='/bgstrategy/minion/?id=425'>Phalanx</a> or any of the other possible Deathrattle minions.
            <br><br>
            There are currently <?= $i + 1 ?> Deathrattle minions in the game (not counting Tier 7), but the Ghastcoiler can not spawn itself. Therefore, the odds for a specific summon from Coiler are <?= number_format(1 / ($i) * 100, 2) ?>%. You get two chances independent of each other, so for example the odds of getting exactly one Leeroy from one Coiler is <?= number_format(1 / ($i) * 100 * 2, 2) ?>%. Whereas the odds of getting two Leeroys is as low as <?= number_format((1 / ($i) * 2) * (1 / ($i) * 2) * 100, 2) ?>%.
            <br><br>
            <em>(These numbers are currently not filtered for banned minion types. So roughly multiply by 2, depending on your actual lobby composition.)</em>
        </p>
    </div>
    <div class="comp_wrapper cf">
        <?php
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>

    <h3 id="queen">Mantid Queen odds <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>
    <div style="margin-top: -30px;">
        <a href="/bgstrategy/minion/?id=211"><img width="200" src="/images/minions/BG22_402_render_80.webp" style="float: left; margin-left: 40px; margin-right: 30px;" alt="The minion Mantid Queen"></a>
        <p style="width: 920px; padding-top: 20px; text-align: justify;">
            This endgame minion will always have Venomous, but what will take it from a good investment to a great one is the combination with Reborn, enabling it to take out two of your opponents biggest minions while only needing one slot on your board. If you are playing this on a board with only minions from one type or neutral ones, the odds of getting the elusive ability are a measly 25% (as there are 4 random buffs to choose from).
            <br><br>
            In order to increase the odds you can either place more different minions types on your board (not always an option, depending on your general strategy) or buff the Queen with Taunt and/or Windfury (because if it has either of those at the beginning of combat that option will be ignored for the random roll). All but the +5/+5 buff can only be applied once, therefore the maximum chance for getting Reborn with only one minion type will be 50%, for a fully buffed Queen. Whereas adding a second minion type will bring the odds of an unbuffed Queen to nearly 48%, and adding a third to nearly 68%.
        </p>
    </div>

    <table class="tier-table">
        <thead>
        <tr>
            <th>Number of minion types</th>
            <th>Unbuffed</th>
            <th>Taunt OR Windfury</th>
            <th>Taunt AND Windfury</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>25.00%</td>
            <td>33.33%</td>
            <td>50.00%</td>
        </tr>
        <tr>
            <td>2</td>
            <td>47.92%</td>
            <td>61.11%</td>
            <td>75.00%</td>
        </tr>
        <tr>
            <td>3</td>
            <td>67.53%</td>
            <td>78.70%</td>
            <td>87.50%</td>
        </tr>
        <tr>
            <td>4</td>
            <td>81.24%</td>
            <td>88.73%</td>
            <td>93.75%</td>
        </tr>
        <tr>
            <td>5</td>
            <td>89.68%</td>
            <td>94.16%</td>
            <td>96.88%</td>
        </tr>
        </tbody>
    </table>

    <!--    <h3 id="buddycurves" class="cf">Buying Buddies <a tabindex="0" onclick="CopyLink(this);" title="Copy the link to this section to your clipboard"><i class="bi bi-link-45deg"></i></a></h3>-->
    <!--    <p>-->
    <!--        Each hero has a Buddy button, which you can press during your shop turn to buy the buddy. The Buddy button's initial cost is based on your Buddy's Tavern Tier, and is reduced by 3 Gold each time you win or tie a combat, or reduced by 2 Gold each time you lose a combat.-->
    <!--        <br><br>-->
    <!--        The first time you press the button, you'll get one copy of your Buddy; the second time you press the button, you'll get two copies. The cost to press the button resets and is slightly increased after you press it the first time.-->
    <!--    </p>-->
    <!--    <br>-->
    <!---->
    <!--    <table class="tier-table">-->
    <!--        <thead>-->
    <!--        <tr>-->
    <!--            <th>Tier</th>-->
    <!--            <th>Initial Cost</th>-->
    <!--            <th>Reset Cost</th>-->
    <!--        </tr>-->
    <!--        </thead>-->
    <!--        <tbody>-->
    <!--        <tr>-->
    <!--            <td>1</td>-->
    <!--            <td>11</td>-->
    <!--            <td>13</td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--            <td>2</td>-->
    <!--            <td>13</td>-->
    <!--            <td>15</td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--            <td>3</td>-->
    <!--            <td>15</td>-->
    <!--            <td>17</td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--            <td>4</td>-->
    <!--            <td>17</td>-->
    <!--            <td>19</td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--            <td>5</td>-->
    <!--            <td>19</td>-->
    <!--            <td>21</td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--            <td>6</td>-->
    <!--            <td>21</td>-->
    <!--            <td>23</td>-->
    <!--        </tr>-->
    <!--        </tbody>-->
    <!--    </table>-->

    <br><br>

<?php
include_once('../footer.php');
?>