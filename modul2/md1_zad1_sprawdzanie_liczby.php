<?php


if (is_bool('true')) {
    echo "yes";
}

if (is_numeric('pięc')){
    echo 'yes\n';
}
if (is_numeric(5)) {
    echo 'yes\n';
}
if (is_numeric('5')) {
    echo 'yes\n';
 }
if (is_numeric(-5)) {
    echo 'yes\n';
}
$number = '12,1';

if (is_numeric(str_replace($number, ',', ''))) {
    echo "true";
}