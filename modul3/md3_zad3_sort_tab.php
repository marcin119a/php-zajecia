<?php
$states = array('Delware', 'Pensylwania', 'New Jersey');
sort($states);


$a = array(1,23,4);
$b = array(12,1,2);

$union = array_unique(array_merge($a, $b));

$intersection = array_intersect($a, $b);

$difference = array_diff($a,$b);

$symetric = array_merge(array_diff($a, $b), array_diff($b, $a));

#"bo string conversion"

var_dump($union);
var_dump($intersection);
var_dump($difference);
