<?php
$url  = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$page = parse_url($url, PHP_URL_PATH);

 if (strpos($page, '/hero/') !== false) {
    $unitType = 'hero';
}
else if (strpos($page, '/buddy/') !== false) {
    $unitType = 'buddy';
}
else if (strpos($page, '/minion/') !== false) {
    $unitType = 'minion';
}

?>

<div style="margin: 390px auto 0;width: 55%;">
    <form method="post" action="index.php" novalidate>
        <span>Add your strategy or tips:</span>
        <textarea name="text" autocomplete="strategy-text" class="strategy-input" placeholder="What is good with this <?= $unitType ?>?&#10;What is something only it can do?&#10;What are its weaknesses?"></textarea>
        <input type="hidden" name="id" value="<?= $selectedId ?>">
        <button type="submit" id="strategy-submit" class="button_sell">SUBMIT your strategy</button>
    </form>
</div>

<div style="padding-bottom: 20px;">
    <?php
    if ($stmt = $mysqli->prepare("SELECT bgs.id,
                                     bgs.text,
                                     bgs.votes_up,
                                     bgs.votes_down,
                                     bgs.votes_trash,    
                                     bgs.time_created,
                                     SUM(bgs.votes_up - bgs.votes_down) AS TOTAL_VOTES
                                FROM bg_strategy bgs
                               WHERE bgs.id_". $unitType ." = ?
                                 AND bgs.flag_active = 1
                                 AND bgs.votes_trash < 10
                            GROUP BY bgs.id
                            ORDER BY 7 DESC")) {
    $stmt->bind_param("i", $selectedId);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $text, $votesUp, $votesDown, $votesTrash, $timeCreated, $totalVotes);

    while ($stmt->fetch()) {
    ?>
    <div class="strategy-wrapper cf">
        <div id="item<?= $id ?>" class="strategy-item">
            <span><?= nl2br($text) ?></span>
        </div>
        <div class="vote-buttons">
            <div class="upvotes" title="Upvote"><p class="button"><a href="//bgknowhow.com/bgstrategy/<?= $unitType ?>/?id=<?= $selectedId ?>&strat=<?= $id ?>&vote=1#item<?= $id ?>">&and; (<?= $votesUp ?>)</a></p></div>
            <div class="downvotes" title="Downvote"><p class="button"><a href="//bgknowhow.com/bgstrategy/<?= $unitType ?>/?id=<?= $selectedId ?>&strat=<?= $id ?>&vote=2#item<?= $id ?>">&or; (<?= str_pad($votesDown, strlen($votesUp), '0', STR_PAD_LEFT) ?>)</a></p></div>
            <span><?= date('d.m.Y', strtotime($timeCreated)) ?></span>
            <div class="flagvotes" title="Flag for bad/duplicate content or outdated information"><p class="button"><a href="//bgknowhow.com/bgstrategy/<?= $unitType ?>/?id=<?= $selectedId ?>&strat=<?= $id ?>&vote=3#item<?= $id ?>">X (<?= $votesTrash ?>)</a></p></div>
        </div>
    </div>
<?php
}
}
?>
