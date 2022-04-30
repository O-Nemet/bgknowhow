<?php
include_once('../header.php');
?>
    <h2 class="page_title">General strategy</h2>

    <p>
        The cost to upgrade to the next tavern tier will reduce by 1 gold at the beginning of each of your turns. For example if you have upgraded to tavern tier 3 the cost to upgrade to tier 4 will be 8 gold. After you enter the next fight and then reenter the tavern shop the cost to upgrade will be reduced to 7 gold.
        Notice that the cost for tavern tier 5 is 11 gold, which is more than the gold cap. So other than with a couple of special heroes it is not possible to level from 4 to 6 in one turn.
        <br><br>
        When upgrading to tier 2, tier 4 and tier 6 the number of minions offered in the tavern will increase by 1.
        <br><br>
        The higher the tier, the fewer copies of each minion will be available in the minion pool shared by all players. For example each tier 6 minion is only available 7 times. This includes most ways of discoveries.
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
            <td>16</td>
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
        </tbody>
    </table>

    <br><br>

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

//echo "<pre>";
//print_r($minion_pool['Demon']);
//echo "</pre>";

?>
    <p>
        The different minion types are not equally distributed across the six tavern tiers. For example Murlocs do not have a tier 6 minion. The exception is tier 1, where each type gets two minions (but notice the neutral minion Wrath Weaver, which is the third minion in the Demon pool).
    </p>
    <br>

    <table class="tier-table">
        <thead>
        <tr>
            <th colspan="10">Minion type count per tier</th>
        </tr>
        <tr>
            <th>Tavern Tier</th>
            <th>Beasts</th>
            <th>Demons</th>
            <th>Dragons</th>
            <th>Elementals</th>
            <th>Mechs</th>
            <th>Murlocs</th>
            <th>Quilboars</th>
            <th>None</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 1; $i < 8; $i++) {
            echo "<tr>";
            echo "    <td>" . ($i == 7 ? 'Total' : $i) . "</td>";
            echo "    <td>" . $minion_count['Beast'][$i] . " (" . ($minion_pool['Beast'][$i] - $minion_count['Beast'][$i]) .")</td>";
            echo "    <td>" . $minion_count['Demon'][$i] . " (" . ($minion_pool['Demon'][$i] - $minion_count['Demon'][$i]) .")</td>";
            echo "    <td>" . $minion_count['Dragon'][$i] . " (" . ($minion_pool['Dragon'][$i] - $minion_count['Dragon'][$i]) .")</td>";
            echo "    <td>" . $minion_count['Elemental'][$i] . " (" . ($minion_pool['Elemental'][$i] - $minion_count['Elemental'][$i]) .")</td>";
            echo "    <td>" . $minion_count['Mech'][$i] . " (" . ($minion_pool['Mech'][$i] - $minion_count['Mech'][$i]) .")</td>";
            echo "    <td>" . ($minion_count['Murloc'][$i] ?? 0) . " (" . ($minion_pool['Murloc'][$i] - @$minion_count['Murloc'][$i]) .")</td>";
            echo "    <td>" . $minion_count['Quilboar'][$i] . " (" . ($minion_pool['Quilboar'][$i] - $minion_count['Quilboar'][$i]) .")</td>";
            echo "    <td>" . $minion_count['None'][$i] . "</td>";
            echo "    <td>" . $minion_count['Total'][$i] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

<br><br>

    <p>
        When you will receive your buddy depends on the tavern tier of the buddy and your performance (damage done, shields popped, fights won).
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