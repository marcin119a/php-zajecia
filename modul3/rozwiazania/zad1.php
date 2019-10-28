<?php
$array = array('Marcin', 'Jan');
$string = join(',', $array); ## Marcin,Jan
echo($string."\n");

var_dump($array[0]); ## 0 to jest pierwsza wartość!


$array = array('Marcin', 'Jan');
foreach ($array as $key => $value) {
    $string .= ",$value";
}
print($string);

