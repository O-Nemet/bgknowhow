<?php
require_once('config/db.php');
require_once('functions.php');

session_start();

$previousURL = $_SESSION['LAST_URL'];
$userId      = (int)$_SESSION['userid'];

if ($stmt = $mysqli->prepare("UPDATE log_login
                                 SET flag_active = 0
                               WHERE id = ?")) {
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $stmt->close();
} else {
    echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
    return false;
}

session_unset();     // unset $_SESSION variable for the run-time
session_destroy();   // destroy session data in storage
header('Location: https://bgknowhow.com' . $previousURL);
//header('Location: https://bgknowhow.com/');
exit();