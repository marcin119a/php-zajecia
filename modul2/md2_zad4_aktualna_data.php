<?php

echo strftime('%c')."\n"; # Mon Aug 12 18:23:45 2002
echo date('r')."\n"; #Mon, 12 Aug 2002 18:23:45 -0400

$now_1 = getdate();
$now_2 = localtime();

print_r($now_1);

print("$now_1[hours]:$now_1[minutes]:$now_1[seconds]");