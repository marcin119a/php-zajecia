<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
#database = 'test';

$link = mysqli_connect($dbhost, $dbuser, $dbpass);

if ($link) {
    // Database is reachable
    mysqli_close($link);
}