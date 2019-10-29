### PHP - Error and Exception Handling

Obsługa błędów to proces wychwytywania błędów zgłaszanych przez program i podejmowania odpowiednich działań. Jeśli prawidłowo radzisz sobie z błędami, może to prowadzić do wielu nieprzewidzianych konsekwencji.

To bardzo proste w PHP do obsługi błędów.
Używanie funkcji ```die()```

Podczas pisania programu PHP należy sprawdzić wszystkie możliwe błędy przed przystąpieniem do pracy i podjąć odpowiednie działania, gdy są one wymagane.

zobacz na przykład pliku /tmp/test.xt i z tym plikiem.

```php
<?php
if(!file_exists("test.txt")) {
  die("Nie ma takigo pliku");
}else {
  $file = fopen("test.txt","r");
  print "plik otworzony w porządku";
}
?>
```
W ten sposób można napisać efektywny kod. Stosując powyższą technikę możesz zatrzymać program, gdy tylko się pomyli i wyświetlić bardziej sensowną i przyjazną dla użytkownika wiadomość.

### Exceptions 

PHP 5 ma model wyjątku podobny do modelu innych języków programowania. Wyjątki są ważne i zapewniają lepszą kontrolę nad obsługą błędów.

Wyjaśnijmy tam nowe słowo kluczowe związane z wyjątkami.

```php
<?php
set_error_handler(function () {
    throw new Exception('Ach!');
});

try {
    $result = 4 / 0;
} catch( Exception $e ){
    echo "Divide by zero, I don't fear you!".PHP_EOL;
    $result = 0;
}
```
https://repl.it/@MartinInf1n1ty/AuthorizedWiltedDevelopment

* Try − Funkcja używająca wyjątku powinna znajdować się w bloku "spróbuj". Jeśli wyjątek się nie wyzwoli, kod będzie kontynuowany jak zwykle. Jeśli jednak wyjątek wyzwala, wyjątek jest "rzucany"..

* Throw − W ten sposób uruchamiasz wyjątek. Każdy "rzut" musi mieć co najmniej jeden "catch".

* Catch − "catch" pobiera wyjątek i tworzy obiekt zawierający informacje o wyjątkach.