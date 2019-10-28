<?php
$credit_card = '4111 1111 1111 1111';
strlen($credit_card);

$a = "ala ma kota";
echo strrev($a);


$credit_card = '4111 1111 1111 1111';
print substr_replace($credit_card, 'xxxx', 0, strlen($credit_card) - 4);