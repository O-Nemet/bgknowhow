<?php
$url  = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$page = parse_url($url, PHP_URL_PATH);

if (strpos($page, '/hero/') !== false) {
    $unitType  = 'hero';
    $unitTypes = 'heroes';
} else if (strpos($page, '/buddy/') !== false) {
    $unitType  = 'buddy';
    $unitTypes = 'buddies';
} else if (strpos($page, '/minion/') !== false) {
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
    (id_" . $unitType . ", text)
    VALUES (?,?)")) {
        $stmt->bind_param('is', $postId, $postText);
        $stmt->execute();
        $stmt->close();
    } else {
        echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
        return false;
    }
}
?>