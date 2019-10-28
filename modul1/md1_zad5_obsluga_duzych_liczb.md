### Obsługa bardzo dużych lub bardzo małych liczb

Problem 

Musimy skorzystać z liczb dużych (lub zbyt małych) dla wbudowanych liczb zmiennopozycyjnych lub calkowitych.

Rozwiązanie
```php
<?php
$sum = bcadd('12345678234132', '123321321123113213');
```

### Analiza

```print $sum``` jest juz teraz łańcuchem znaków

### Zadanie

* W jaki sposób możemy odjąć dwie duże liczby? 
```php
<?php 
## nie ma funkcji bcminus :) 
```