<?php


$words = explode(' ', 'To zdanie nie jest zbytnio skomplikowane');
print_r($words);

$dwarves = 'oferma,śpioch,wesolek,zrzęda,kichający';
$dwarf_array = explode(',', $dwarves);
print_r($dwarf_array);


$array = [
    "Marek",
    "Marcin",
    "Jozef",
    "Aleks"
];
# musi byc
$string = "";

foreach ($array as $key => $value) {
    $string .= ",$value";
}
print($string);

$fast_string = join(',', $array);
print($fast_string);


$a = "Pewnego radu był sobie zółw";

$words = explode(' ', $a);

$words = array_reverse($words);

$s = join(' ', $words);
print("\n".$s);