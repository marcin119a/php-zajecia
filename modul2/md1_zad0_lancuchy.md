### Ciągi znaków

### Problem:

Odwrócić kolejność znaków lub słów w łańcuchu znaków.

### Rozwiązanie:
```php
<?php
$a = "ala ma kota";
echo strrev($a);
```

### Zadanie:
* Przepisz kod z listingu i zmodyfikuj ciąg znaków na "ala"; 

### Problem:

Chcemy policzyć długość łańcucha znaków

```php
<?php
$credit_card = '4111 1111 1111 1111';
strlen($credit_card);
```

### Problem

Chcemy zastąpić podłańcuch znaków innym łańcuchem znaków. Na przykład, załóżmy, że chcemy ukryć wszystkie, oprócz czterech ostatnich cyfr numeru karty kredytowej.


### Rozwiązanie:
```php
<?php
$credit_card = '4111 1111 1111 1111';
print substr_replace($credit_card, 'xxxx', 0, strlen($credit_card) - 4);
```

### Analiza:

Funkcja '''substr_replace()''' jest użyteczna, gdy tekst jest zbyt długi by go wyświetlić i chcemy wyświetlić tylko jego cześć.

### Zadanie:
* Wytnij z "ALA MA KOTA" wyraz "KOT"
