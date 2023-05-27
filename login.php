<?php
require_once('config/api_blizzard.php');
require_once('functions.php');

if (!isset($_GET['code'])) {
    $auth_url = $client->getAuthenticationUrl($client->baseurl[$client->region]['AUTHORIZATION_ENDPOINT'], $client->redirect_uri);
    echo '<script> location.replace("' . $auth_url . '"); </script>';
//    header('Location: ' . $auth_url);
    exit();
} else { // login
    echo "test3";
    echo $_GET['code'];
    $responseAccount = $client->fetch('account');
    var_dump($responseAccount);
}
