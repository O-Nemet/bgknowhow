<div class="strategy_input">
    <form method="post" action="index.php" novalidate>
        <span>Add your strategy or tips:</span>
        <textarea name="text" autocomplete="strategy-text" class="strategy-input" placeholder="What is good with this <?= $unitType ?>?&#10;What is something only it can do?&#10;What are its weaknesses?"></textarea>
        <input type="text" name="email" class="hfb" id="email">
        <input type="hidden" name="id" value="<?= $selectedId ?>">
        <button type="submit" id="strategy-submit" class="button_sell">SUBMIT your strategy</button>
    </form>
</div>

<div class="strategy">
    <?php
    if ($stmt = $mysqli->prepare("SELECT bgs.id,
                                     bgs.text,
                                     bgs.votes_up,
                                     bgs.votes_down,
                                     bgs.votes_trash,    
                                     bgs.time_created,
                                     (SELECT lli.battletag FROM log_login lli WHERE lli.id = bgs.id_user) AS USERNAME,
                                     SUM(bgs.votes_up - bgs.votes_down) AS TOTAL_VOTES
                                FROM bg_strategy bgs
                               WHERE bgs.id_" . $unitType . " = ?
                                 AND bgs.flag_active = 1
                                 AND bgs.votes_trash < 5
                            GROUP BY bgs.id
                            ORDER BY 8 DESC")) {
        $stmt->bind_param("i", $selectedId);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $text, $votesUp, $votesDown, $votesTrash, $timeCreated, $userName, $totalVotes);

        while ($stmt->fetch()) {

            $textLinked = convertStrategyText($text);
            ?>
            <div class="strategy-wrapper cf">
                <div id="item<?= $id ?>" class="strategy-item">
                    <span><?= nl2br($textLinked) ?></span>
                </div>
                <div class="vote-buttons">
                    <div class="upvotes" title="Upvote">
                        <p class="button">
                            <?php if (isLoggedIn()) { ?>
                                <a href="//bgknowhow.com/bgstrategy/<?= $unitType ?>/?id=<?= $selectedId ?>&strat=<?= $id ?>&vote=1#item<?= $id ?>">&and; (<?= $votesUp ?>)</a>
                            <?php } else { ?>
                                <a tabindex="0" class="deactivated" title="Please log in via BattleNet to vote">&and; (<?= $votesUp ?>)</a>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="downvotes" title="Downvote">
                        <p class="button">
                            <?php if (isLoggedIn()) { ?>
                                <a href="//bgknowhow.com/bgstrategy/<?= $unitType ?>/?id=<?= $selectedId ?>&strat=<?= $id ?>&vote=2#item<?= $id ?>">&or; (<?= str_pad($votesDown, strlen($votesUp), '0', STR_PAD_LEFT) ?>)</a>
                            <?php } else { ?>
                                <a tabindex="0" class="deactivated" title="Please log in via BattleNet to vote">&or; (<?= str_pad($votesDown, strlen($votesUp), '0', STR_PAD_LEFT) ?>)</a>
                            <?php } ?>
                        </p>
                    </div>
                    <div style="margin-bottom: 8px">
                        <span><?= date('d.m.Y', strtotime($timeCreated)) ?></span>
                        <br class="pc_only">
                        <span>by <?= $userName ? strstr($userName, '#', true) : 'Bob' ?></span>
                    </div>
                    <div class="flagvotes" title="Flag for bad/duplicate content or outdated information">
                        <p class="button">
                            <?php if (isLoggedIn()) { ?>
                                <a href="//bgknowhow.com/bgstrategy/<?= $unitType ?>/?id=<?= $selectedId ?>&strat=<?= $id ?>&vote=3#item<?= $id ?>">X (<?= $votesTrash ?>)</a>
                            <?php } else { ?>
                                <a tabindex="0" class="deactivated" title="Please log in via BattleNet to vote">X (<?= $votesTrash ?>)</a>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
