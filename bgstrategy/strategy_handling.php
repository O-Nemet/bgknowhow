<?php
$url  = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$page = parse_url($url, PHP_URL_PATH);

if (str_contains($page, '/hero/')) {
    $unitType  = 'hero';
    $unitTypes = 'heroes';
} else if (str_contains($page, '/buddy/')) {
    $unitType  = 'buddy';
    $unitTypes = 'buddies';
} else if (str_contains($page, '/anomaly/')) {
    $unitType  = 'anomaly';
    $unitTypes = 'anomalies';
} else if (str_contains($page, '/minion/')) {
    $unitType  = 'minion';
    $unitTypes = 'minions';
}

$selectedId = $_GET['id'] ?? 1;
$selectedId = (int)htmlspecialchars($selectedId);

$selectedStrat = $_GET['strat'] ?? '';
$selectedStrat = (int)htmlspecialchars($selectedStrat);

$selectedVote = $_GET['vote'] ?? '';
$selectedVote = htmlspecialchars($selectedVote);

$postText = $_POST['text'] ?? '';
$postText = htmlspecialchars($postText);

$postId = $_POST['id'] ?? '';
$postId = (int)htmlspecialchars($postId);

$emailCaptcha = $_POST['email'] ?? '';

if ($postText && $postId && empty($emailCaptcha)) {
    $selectedId = $postId;

    if ($stmt = $mysqli->prepare("INSERT INTO bg_strategy
    (id_" . $unitType . ", id_user, text)
    VALUES (?,?,?)")) {
        $stmt->bind_param('iis', $postId, $_SESSION['userid'], $postText);
        $stmt->execute();
        $stmt->close();
    } else {
        echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
        return false;
    }
}
