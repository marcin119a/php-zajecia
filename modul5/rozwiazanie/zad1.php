<?php
if ($argc !== 3) {
    echo "Usage: php zad1.php <firstName> <lastName>.\n";
    exit(1);
}

$firstName = $argv[1];
$lastName = $argv[2];
echo "Hello, {$firstName}, {$lastName}";