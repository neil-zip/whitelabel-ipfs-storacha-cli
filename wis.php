#!/usr/bin/env php
<?php
require_once('uploadToIpfsStoracha.php');

// Check if a file path is provided as an argument
if ($argc > 1) {
    // $argv[0] is the script name
    // $argv[1] is the first argument (the file path)
    $filePath = $argv[1];
    //echo "x: $filePath";
    echo uploadToIpfsStoracha($filePath);
} else {
    echo "Usage: php echo_filepath.php <file_path>" . PHP_EOL;
}

