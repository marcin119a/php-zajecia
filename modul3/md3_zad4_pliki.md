
### Pobranie zawartości z pliku 

file_get_contents — jest preferowanym sposobem odczytywania zawartości pliku do łańcucha. Wykorzysta techniki mapowania pamięci, jeśli są obsługiwane przez system operacyjny w celu zwiększenia wydajności. 

File_get_contents() odczytuje plik do łańcucha.

Funkcja ta jest preferowanym sposobem odczytywania zawartości pliku do łańcucha. Użyje technik mapowania pamięci, jeśli jest to obsługiwane przez serwer, w celu zwiększenia wydajności.

```php
<?php
file_get_contents("pliki.txt");
``` 

Pobieranie danych z pliku
```php
<?php
// If strict types are enabled i.e. declare(strict_types=1);
$file = file_get_contents('./people.txt', true);
// Otherwise
$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);
?>
```