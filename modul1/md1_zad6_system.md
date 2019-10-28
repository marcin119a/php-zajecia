### Przeksztalcanie liczb z jednego systemu liczbowego na inny 

### Problem:

Musimy przekształcić liczbę z jednego systemu liczbowego na inny.

### Rozwiązanie:
```php
<?php
$hex = 'a1'; // liczba 16stkowa u podstawie 16

$decimal = base_convert($hex, 16, 10); // konwersja z 16 na 10 liczby a1;
 ```


### Analiza:

Istnieje kilka innych specjalizowanych funkcji przekształcających do i z podstawy do innych najczęściej spotykanych podstaw.
 ```php
 <?php
 print bindec(11111) ;
 print octdec(33); 
 ```
 
### Zadanie:

* Mamy 16 w zapisie dziesiętnym, jaka to liczba w zapisie 16stkowym?
* Żart o informatyku: Informatyk zna 10 typów ludzi. Zamień 10 z binarnego do dziesiętnego. 

Referencje: 
```
https://en.wikipedia.org/wiki/Positional_notation
```