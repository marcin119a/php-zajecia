<?php
$a = "Pewnego razu był sobie zółw";
$words = explode(' ', $a);
print_r($words);
$words = array_reverse($words);
print_r($words);
$s = join(' ', $words);