<?php
set_error_handler(function () {
    throw new Exception('Ach!');
});
$list = [3];
try {
    $result = 0;
    $lista."test";
} catch( Exception $e ){
    echo $e->getMessage();
    echo " do listy ciąg znaków, zabroniona operacja!!".PHP_EOL;
    $result = 0;
}