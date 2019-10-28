<?php
$hex = 'a1'; // liczba 16stkowa u podstawie 16

$decimal = base_convert($hex, 16, 10);
print($decimal)."\n";

print bindec(11111)."\n" ;
print octdec(33)."\n";