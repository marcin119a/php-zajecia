### Porównywanie liczb zmiennopozycjnych:

### Problem 
Chcemy porównać dwie liczby zmiennopozycjne

### Rozwiązanie

```php
<?php
$delta = 0.0001;

$a = 1.000001;

$b =1.000000; 

print($a - $b); // ile to powinno być?

if(abs($a- $b) < $delta){
/* $a i $b są sobie równe */
}

```
### Komentarz:

Liczby zmiennopozycyjne sa przedstawiane w formie binarnej z mantysa i wykladnikem o skończonej liczbie bitów. Przekroczenie tej liczby bitów poprowazi do błędu przepełeninia. W rezultacie dla PHP (i innych jezykach) dwie liczby nie będą równe, jeśli będą róznić się o najmniejszą cześć dziesiątną

Można uniknąc tego problemu w sposób, że zamiast sprawdzenia, czy $a == $b, wystarczy sprawdzić, czy pierwsza liczba nie rózni się o wiecej niż bardzo mała wartość $delta od drugiej liczby. Wielkość delta powinna być równa najmniejszej liczbie. 

### Zadanie

* Przepisz kod z listingu i przetestuj co zostanie wyświetlone w ```print($a-$b)```, czy to prawdidłowa wartość? 
