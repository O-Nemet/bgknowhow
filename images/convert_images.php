<?php
require_once('../functions.php');
$targetDirectory = 'convert/';

$files = preg_grep('~\_render.(png)$~i', scandir($targetDirectory));

//echo "<pre>";
//print_r($files);
//echo "</pre>";

foreach ($files as $filename) {
    $file = $targetDirectory . $filename;
    #echo "<br>$file"; // test mode
    echo "<br>" . generate_webp_image($file, 80);
    unlink($targetDirectory . $filename);
}
