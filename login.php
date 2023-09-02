<?php
session_start();
$_SESSION['LAST_URL'] = $_SERVER['HTTP_REFERER'];
?>

    <html>
    <body style="background-color: black">
    <div style="color: white; width: 100%; margin-top: 50px; display: flex; align-items: center; justify-content: center">
        <img src=/images/icons/logo_battlegrounds_small.webp" width="108" height="108">
        <br class="mobile_only">
        <span id="logintext" style="font-size: 40px;">Processing login... please wait...</span>
    </div>
    </body>
    </html>

<?php
require_once('config/api_blizzard.php');
require_once('functions.php');

//if (isset($_SERVER['HTTP_REFERER'])) {
//    $lastURL = $_SERVER['HTTP_REFERER']);
//} else {
//    // if there is no previous URL, redirect to default page
//    header('Location: https://bgknowhow.com/');
//}

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
