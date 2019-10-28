<?php


$favorite_foods = array('karczochy', 'chleb', 'kalafior', 'jajo sadzone');
$food = 'kalafior';
$position = array_search($food, $favorite_foods);

if ($position !== false) {
    print("jestem w tablicy");
}

$array = [1, 2, 3, 4];

$largest = max($array);
$sallest = min($array);

print($largest);
print($sallest);