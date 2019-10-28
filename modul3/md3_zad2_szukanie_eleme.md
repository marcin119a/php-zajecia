### Znajdowanie pozycji elementu w tablicy:

### Problem:

Chcemy wiedzieć, czy element znajduje sie w tablicy jeśli tak, to na jakiej pozycji się on znajduję:

### Rozwiązanie
 
```php
<?php
$array = [1, 2, 3, 4, 5];
$position = array_search($array, $value);
```

### Zadanie:
```$array = [1, 2, 3, 4, 5];```
* Sprawdzić, czy 5 w nie jest, zastosuj odpowiednią instrukcje warunkową i zwróc wartość (jest/nie jest)

### Przyklad:
```php
<?php
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
* Stworz tablice, kolejnych liczb dziesiętnych od 0 do 5 i policz ```max``` oraz ```min```. 
* Napisz funkcje ```znajdz_element($element, $tablica1, $tablica)``` w 2 listach, który sprawdzi czy element jest w 2 listach. 
* Napisz swoją funkcje ```max_moja($tablica)```, która policzy max z tablicy, nie używając funkcji ```max()```;
* Napisz funkcje ```ppm($wiek, $waga, $wzrost, $plec)``` liczącą współczynnik podstawowej przemiany materii uwzględniając płeć, 
```Użyj if do sprawdzenia $plec```
