### Parsowanie dat i czasu z lancuchow znakow

### Problem 

Musimy przekształcić datę lub czas zapisany w łańcuchu znaków do postaci umożliwiając wykonywanie obliczen.

### Rozwiązanie:
```php
<?php
$a = strtotime('march 10');
$a = strtotime('now');
$a = strtotime('today');
$a = strtotime('5/12/2019');
```

### Analiza:

Składnia funkcji strotime() jest skomplikowana i złożona, dlatego najlepszą metodą jej opanowania będzie zastosowanie wielu różnych wyrażeń czasu. 