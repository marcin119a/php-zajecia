### Znajdowanie pozycji elementu w tablicy:

### Problem:

Chcemy wiedziec, czy element znajduje sie w tablicy jesli tak, to najkiej sie on znajduje:

### Rozwiązanie
 
```php
$array = 
$position = array_search($array, $value)
```

### Przyklad:
```php
$favorite_foods = array('karczochy', 'chleb', 'kalafior', 'jajo sadzone');
$food = 'kalafior';
$position = array_search($food, $favorite_foods);

if ($position !== false) {
    
}

```

Zastosujemy funkcje ```in_array()```, aby sprawdzić czy w tablicy występuje dana wartość

```php
<?php
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
```

### Zadanie
```php
<?php 
$a = [1,2,3,4];
```
* Napisz kod, który w tablicy ```$a``` sprawdzi, czy jest liczba ```1``` w tablicy. 

 

### Problem 

Znajdowanie elementy o największej lub najmniejszej wartości w tablicy

### Rozwiązanie 
```php
<?php
$arr = [1,10,100,1000,11];

$largest = max($arr);
$sallest = min($arr);

```

Zadanie:
* Stworz tablice, kolejnych liczb dziesiętnych od 0 do 10 i policz ```max``` oraz ```min```. 

