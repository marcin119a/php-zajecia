<?php

$delta = 0.0001;

$a = 1.000001;

$b = 1.000000;

if (abs($a - $b) < $delta) {
    echo ("nie sa");
}