### Sprawdzanie czy łańcuch znaków zawiera poprawną liczbę: 

Problem

Chcemy sprawdzić czy wprowadzona dana jest liczbą

Rozwiązanie

```php
<?php 
if (is_numeric('pięc')) {}
if (is_numeric(5)) {} 
if (is_numeric('5')) {}
if (is_numeric(-5)) {}
```

Analiza:

Oprócz operowania na liczbach, funkcja is_numeric() można stosować również względem łańcucha znaków. 

Funkcja is_numeric() właściwie  parsuje również liczby dziesiętne: takie jak 5.1

Problem występuje jednak dla: 

```php
<?php
$a  = '5,100';
```


##### Jak temu zaradzić? 

```php
<?php
if (is_numeric(str_replace($number, ',', ''))) {
    echo "true";
}
```

Sprawdzenie, czy liczba jest liczba określonego typu, można przeprowadzić na szereg podobnych do siebie funkcji, których przeznaczenie sugerują ich nazwy.
```
is_bool()
```

