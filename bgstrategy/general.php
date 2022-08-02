<?php
include_once('../header.php');
?>
    <h2 class="page_title">General strategy</h2>

    <h3 id="tiers">Tavern Tiers and upgrading</h3>
    <p>
        The cost to upgrade to the next tavern tier will reduce by 1 gold at the beginning of each of your turns. For example if you have upgraded to tavern tier 2 the cost to upgrade to tier 3 will be 7 gold. After you enter the next fight and then reenter the tavern shop the cost to upgrade will be reduced to 6 gold.
        <!-- Notice that the cost for tavern tier 5 is 11 gold, which is more than the gold cap. So other than with a couple of special heroes it is not possible to level from 4 to 6 in one turn. -->
        <br><br>
        When upgrading to tier 2, tier 4 and tier 6 the number of minions offered per roll in the tavern will increase by 1.
        <br><br>
        The higher the tier, the fewer copies of each minion will be available in the minion pool shared by all players. For example each tier 6 minion is only available 7 times. So if you fight someone who has a golden tier 6 minion, there will only be a maximum of 4 copies left for pickup in the tavern. This includes most ways of discoveries, but not the hero powers of <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/heroes/?id=66">Tess</a> and <a class="hoverimage" href="https://bgknowhow.com/bgstrategy/heroes/?id=57">Scabbs</a> who will generate additional minions. Minions sold during the game will be readded to the shared pool (golden minions will be reverted to three normal ones).
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
            <td>9</td>
            <td>5</td>
            <td>9</td>
        </tr>
        <tr>
            <td>6</td>
            <td>10</td>
            <td>6</td>
            <td>7</td>
        </tr>
        </tbody>
    </table>

<?php
foreach ($tempMinions->data as $key => $object) {
    if ($object->isActive === true && $object->isToken !== true) {
        $type = !isset($object->type) ? 'None' : $object->type;
        @$minion_count[$type][$object->tier] = @$minion_count[$type][$object->tier] + 1;
        @$minion_count[$type][7] = @$minion_count[$type][7] + 1;
        @$minion_pool[$object->pool][$object->tier] = @$minion_pool[$object->pool][$object->tier] + 1;
        @$minion_pool[$object->pool][7] = @$minion_pool[$object->pool][7] + 1;
        @$minion_count['Total'][$object->tier] = @$minion_count['Total'][$object->tier] + 1;
        @$minion_count['Total'][7] = @$minion_count['Total'][7] + 1;
    }
}
?>
    <h3 id="types">Minion types and distribution</h3>
    <p>
        The different minion types are not equally distributed across the six tavern tiers. For example Murlocs only have one tier 6 minion. Even on tier 1, where each type used to have two minions, Elementals and Beasts have access to three minions, since the addition of <a class="hoverimage" href='https://bgknowhow.com/bgstrategy/minion/?id=216'>Bubblette</a> and <a class="hoverimage" href='https://bgknowhow.com/bgstrategy/minion/?id=220'>Silverback Patriarch</a>. Also notice the neutral minion <a class="hoverimage" href='https://bgknowhow.com/bgstrategy/minion/?id=17'>Wrath Weaver</a>, which is the third minion in the Demon pool on tier 1.
        <br><br>
        The table below is automatically generated and therefore always up to date and accurate:
    </p>
    <br>

    <table class="tier-table">
        <thead>
        <tr>
            <th colspan="12">Minion type count per tier</th>
        </tr>
        <tr>
            <th>Tavern Tier</th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=beast">Beasts</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=demon">Demons</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=dragon">Dragons</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=elemental">Elementals</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=mech">Mechs</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=murloc">Murlocs</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=naga">Naga</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=pirates">Pirates</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=quilboar">Quilboars</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions&type=none">None</a></th>
            <th><a href="//bgknowhow.com/bgstrategy/?show=minions">Total</a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 1; $i <= 7; $i++) {
            echo "<tr>";
            echo "    <td>" . ($i == 7 ? '<a href="//bgknowhow.com/bgstrategy/?show=minions">Total</a>' : '<a href="//bgknowhow.com/bgstrategy/?show=minions&tier=' . $i . '">' . $i . '</a>') . "</td>";
            echo "    <td>" . $minion_count['Beast'][$i] . " (" . ($minion_pool['Beast'][$i] - $minion_count['Beast'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Demon'][$i] . " (" . ($minion_pool['Demon'][$i] - $minion_count['Demon'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Dragon'][$i] . " (" . ($minion_pool['Dragon'][$i] - $minion_count['Dragon'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Elemental'][$i] . " (" . ($minion_pool['Elemental'][$i] - $minion_count['Elemental'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Mech'][$i] . " (" . ($minion_pool['Mech'][$i] - $minion_count['Mech'][$i]) . ")</td>";
            echo "    <td>" . ($minion_count['Murloc'][$i] ?? 0) . " (" . ($minion_pool['Murloc'][$i] - @$minion_count['Murloc'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Naga'][$i] . " (" . ($minion_pool['Naga'][$i] - $minion_count['Naga'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Pirate'][$i] . " (" . ($minion_pool['Pirate'][$i] - $minion_count['Pirate'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['Quilboar'][$i] . " (" . ($minion_pool['Quilboar'][$i] - $minion_count['Quilboar'][$i]) . ")</td>";
            echo "    <td>" . $minion_count['None'][$i] . "</td>";
            echo "    <td>" . $minion_count['Total'][$i] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <h3>Key minions guiding your strategy</h3>
    <p>
        Transitioning from mid-game to a viable end-game composition is an important step you should master in order to improve your game. Often times your first discovery of a 5 or 6 drop minion after a triple, will guide you in a specific direction. Here are the key minions for each minion type strategy:
    </p>
    <div class="comp_wrapper cf">
        <?php
        $board   = ['Croc', 'Mama Bear', 'Goldrinn', 'Felbat', 'Promo-Drake', 'Kaly', 'Nomi', 'Buster', 'Brann', 'Sefin', 'Athissa', 'Orgozoa', 'Hoggarr', 'Eliza', 'Mythrax', 'Elder', 'Charly'];
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        unset($board);
        ?>
    </div>
<?php
// Ghastcoiler minions
$i = 0;
foreach ($tempMinions->data as $key => $object) {
    if ($object->isActive && $object->isToken === false && $object->abilities->hasDeathrattle && $object->name !== 'Ghastcoiler') {
        $board[] = $object->name;
        $i++;
    }
}
?>
    <h3 id="coiler">Ghastcoiler odds</h3>
    <div style="margin-top: -30px;">
        <a href="https://bgknowhow.com/bgstrategy/minion/?id=135"><img width="200" src="https://bgknowhow.com/images/minions/BGS_008_render_80.webp" style="float: left; margin-left: 40px; margin-right: 30px;"></a>
        <p style="width: 920px; padding-top: 90px; text-align: justify;">
            This beast is a potent lategame minion. Therefore, it is advisable to know the odds of getting a <a class="hoverimage" href='https://bgknowhow.com/bgstrategy/minion/?id=208'>Leeroy</a> or any of the other possible Deathrattle minions. There are currently <?= $i ?> Deathrattle minions in the game, but the Ghastcoiler can not spawn itself. Therefore, the odds for a specific summon from Coiler are <?= number_format(1 / ($i - 1) * 100, 2) ?>%. You get two chances independent of each other, so for example the odds of getting exactly one Leeroy from one Coiler is <?= number_format(1 / ($i - 1) * 100 * 2, 2) ?>%. Whereas the odds of getting two Leeroys is as low as <?= number_format((1 / ($i - 1) * 2) * (1 / ($i - 1) * 2) * 100, 2) ?>%.
        </p>
    </div>
    <div class="comp_wrapper cf">
        <?php
        $minions = getMinionsForBoard($board);
        drawBoard($minions);
        ?>
    </div>

    <h3 id="queen">Mantid Queen odds</h3>
    <div style="margin-top: -30px;">
        <a href="https://bgknowhow.com/bgstrategy/minion/?id=211"><img width="200" src="https://bgknowhow.com/images/minions/BG22_402_render_80.webp" style="float: left; margin-left: 40px; margin-right: 30px;"></a>
        <p style="width: 920px; padding-top: 20px; text-align: justify;">
            This endgame minion will always have Poisonous, but what will take it from a good investment to a great one is the combination with Divine Shield, enabling it to take out two of your opponents biggest minions while only needing one slot on your board. If you are playing this on a board with only minions from one type or neutral ones, the odds of getting the elusive shield are a measly 25% (as there are 4 random buffs to choose from).
            <br><br>
            In order to increase the odds you can either place more different minions types on your board (not always an option, depending on your general strategy) or buff the Queen with Taunt and/or Windfury (because if it has either of those at the beginning of combat that option will be ignored for the random roll). All but the +5/+5 buff can only be applied once, therefore the maximum chance for getting a DS with only one minion type will be 50%, for a fully buffed Queen. Whereas adding a second minion type will bring the odds of an unbuffed Queen to nearly 48%, and adding a third to nearly 68%.
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

    <h3 id="buddycurves" class="cf">Buddy curves</h3>
    <p>
        When you will receive your buddy depends on the tavern tier of the buddy and your performance (damage done, shields popped, fights won). Buddies were removed from the game with the 23.2.0 patch in May 2022 (*RIP*).
    </p>
    <br>

    <table class="tier-table">
        <thead>
        <tr>
            <th>Turn</th>
            <th>Gold available</th>
            <th>Fast buddy curve</th>
            <th>Regular buddy curve</th>
            <th>Slow buddy curve</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>6</td>
            <td>Tier 2 Buddy</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>7</td>
            <td>Tier 3 Buddy</td>
            <td>Tier 2 Buddy</td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td>8</td>
            <td>Tier 4 Buddy</td>
            <td>Tier 3 Buddy</td>
            <td>Tier 2 Buddy</td>
        </tr>
        <tr>
            <td>7</td>
            <td>9</td>
            <td></td>
            <td>Tier 4 Buddy</td>
            <td>Tier 3 Buddy</td>
        </tr>
        <tr>
            <td>8</td>
            <td>10</td>
            <td></td>
            <td></td>
            <td>Tier 4 Buddy</td>
        </tr>
        <tr>
            <td>9</td>
            <td>10</td>
            <td>Tier 2 Buddy x2</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10</td>
            <td>10</td>
            <td>Tier 3 Buddy x2</td>
            <td>Tier 2 Buddy x2</td>
            <td></td>
        </tr>
        <tr>
            <td>11</td>
            <td>10</td>
            <td>Tier 4 Buddy x2</td>
            <td>Tier 3 Buddy x2</td>
            <td>Tier 2 Buddy x2</td>
        </tr>
        <tr>
            <td>12</td>
            <td>10</td>
            <td></td>
            <td>Tier 4 Buddy x2</td>
            <td>Tier 3 Buddy x2</td>
        </tr>
        <tr>
            <td>13</td>
            <td>10</td>
            <td></td>
            <td></td>
            <td>Tier 4 Buddy x2</td>
        </tr>
        </tbody>
    </table>

    <br><br>

<?php
include_once('../footer.php');
?>