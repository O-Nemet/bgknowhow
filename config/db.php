<?php

$mysqli = new mysqli('__DB_HOST__',
                     '__DB_USERNAME__',
                     '__DB_PASSWORD__',
                     '__DB_NAME__');

// check connection
if ($mysqli->connect_errno) {
    die('MySQLi Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    exit();
}

// change character set to utf8
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
}
