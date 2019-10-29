### Wyjątek


### Problem
Chcemy złapać wyjątek, gdy lista wyjdzie poza zakres. 


#### Rozwiązanie
```php
<?php
set_error_handler(function () {
    throw new Exception('Ach!');
});
$list = [];
try {
    $result = 0;
    $list[0];
} catch( Exception $e ){
    echo "Wyjście poza zakres, wybacz!!".PHP_EOL;
    $result = 0;
}
```

Zadanie: 

Złap wyjątek, gdy ktoś wykona array()."string";
