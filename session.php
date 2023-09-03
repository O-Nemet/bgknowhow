<?php
session_start();

if (isset($_GET['code'])) {
    // session init
    $params   = array('code' => $_GET['code'], 'auth_flow' => 'auth_code', 'grant_type' => 'authorization_code', 'redirect_uri' => $client->redirect_uri);
    $response = $client->getAccessToken($client->baseurl[$client->region]['TOKEN_ENDPOINT'], 'authorization_code', $params);
    $client->setAccessToken($response['access_token']);
    $responseAccount = $client->fetch('account');

    $userAlreadyExists = 0;

    if ($stmt = $mysqli->prepare("SELECT id
                                    FROM log_login
                                   WHERE battletag = ?")) {
        $stmt->bind_param("s", $responseAccount['battletag']);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($userAlreadyExists);
        $stmt->fetch();
    }

    if ($userAlreadyExists > 0) {
        if ($stmt = $mysqli->prepare("UPDATE log_login
                                         SET usertoken = ?
                                           , flag_active = 1
                                           , time_last_login = NOW()
                                       WHERE id = ?")) {
            $stmt->bind_param('si', $_GET['code'], $userAlreadyExists);
            $stmt->execute();
            $stmt->close();
        } else {
            echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
            return false;
        }
        $_SESSION['userid'] = $userAlreadyExists;
    } else {
        if ($stmt = $mysqli->prepare("INSERT INTO log_login (battletag, usertoken, time_last_login)
                                         VALUES (?
                                                ,?
                                                , NOW()
                                                )")) {
            $stmt->bind_param('ss', $responseAccount['battletag'], $_GET['code']);
            $stmt->execute();
            $stmt->close();
        } else {
            echo 'Insert error (' . $mysqli->errno . ') : ' . $mysqli->error;
            return false;
        }
        $_SESSION['userid'] = mysqli_insert_id($mysqli);
    }

//    $_SESSION['test'] = $userAlreadyExists;
    $_SESSION['usertoken'] = $_GET['code'];
    $_SESSION['usertag']   = $responseAccount['battletag'];

//    header('Location: https://bgknowhow.com/');
    header('Location: ' . $_SESSION['LAST_URL']);
    exit();
} else {
    // session timeout
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage
    }
}
// session refresh
$_SESSION['LAST_ACTIVITY'] = time();
$_SESSION['LAST_URL']      = $_SERVER["REQUEST_URI"];
