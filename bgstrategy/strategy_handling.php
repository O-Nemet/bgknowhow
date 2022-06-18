<?php
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

    if ($stmt = $mysqli->prepare("INSERT INTO bg_strategy (id_hero, text)
VALUES (?
,?
)")) {
        $stmt->bind_param('is', $postId, $postText);
        $stmt->execute();
        $stmt->close();
    } else {
        echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
        return false;
    }
}
?>