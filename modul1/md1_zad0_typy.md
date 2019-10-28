### Problem 

Jak określić typ zmiennej? 

### rozwiazanie:
```php
<?php
$value = "Ala ma kota";
echo gettype($value)."\n";
```

### Zadanie
* Sprawdź jaki typ ma zmienna ```$a = 1.321;```


### Problem

Jak zrzutować zmienną typu ciąg znaków do integera?

```php
<?php
 $a = (int) "test";
```

### Zadanie:
* Zrzutuj ```integer``` na ```float```


### Problem

Czy w PHP jest nieskończoność?


### Rozwiązanie
```php
<?php
$x = 1.9e411;
var_dump($x); ## float(INF)
```

### Zadanie:
Co w php znaczy symbol e? 
```
hint: google: What is in php e symbol?
```


