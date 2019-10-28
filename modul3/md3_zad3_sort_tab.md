### Sortowanie talbicy 

### Problem:
Chcemy posortowac tablice:

```php
<?php
$states = array('Delware', 'Pensylwania', 'New Jersey');
sort($states);
```

dla liczb:
```
$array = array(1,2,3,4,510,-1);
```

```
sort($array);
```


### Usuwanie z tablicy powtarzających się elementów

```php
<?php
$unique = array_unique($array); 
```



### Wyznacznie sumy, przeciecia lub roznicy:

```php
<?php
$union = array_unique(array_merge($a, $b));

$intersection = array_intersection($a, $b);

$difference = array_diff($a,$b);

$difference = array_merge(array_diff($a, $b), array_diff($b, $a));
```


### Zadanie: 

* Posortuj tablice $a = [1,2,6,4,10,6];
* Wyznacz unikatowe imiona w tablicach 
```php
<?php 
$a = ["Marcin", "Jan", "Zofia"];
$b = ["Jan", "Marian"];
```

*  Napisz skrypt PHP, który wyświetli kolory w następujący sposób : 
```php
<?php 
$color = array('white', 'green', 'red');
```
### Rozwiązanie: 
```
<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
    echo "$c";
}
sort($color);

foreach ($color as $y)
{
    echo $y;
}
?>
```