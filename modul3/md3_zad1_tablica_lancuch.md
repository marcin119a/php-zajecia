### Przekształcenie tablicy w łańcuch znaków

### Problem 

Chcemy przekształcić tablice do postaci ładnie sformatowanego łańcucha znaków. 

### Rozwiązanie: 

```php
<?php
$array = array('Marcin', 'Jan');
$string = join(',', $array); ## Marcin,Jan
echo $string;
```

### 2 rozwiązanie
możemy tez napisać pętle
```php
<?php
$array = array('Marcin', 'Jan');
foreach ($array as $key => $value) {
    $string .= ",$value";
}
```

### Zadanie:
* Sprawdź, co zrobi teraz ```var_dump($array)```?
* Zadanie: Z tablicy ```$a = ["Marcin", "Jan", "Maria"];``` stworzyć ciąg znaków MarcinJanMaria.



### Problem:
Musimy podzielić ciąg znaków na fragmenty. Na przykład chcemy uzyskać dostęp do poszczególnych linii tekstu wpisanego przez użytkownika w polu ```<textarea>```

### Rozwiązanie:
```php
<?php
$words = explode(' ', 'To zdanie nie jest zbytnio skomplikowane');
```
### Analiza:

Do ```explode()``` przekazujemy łańcuch seperatora, łańcuch, który będzie dzielony na fragmenty, oraz (opcjonalnie) maksymalną liczbę elementów, które powinny zostać zwrócone.

```php
<?php
$dwarves = 'oferma,śpioch,wesolek,zrzęda,kichający';
$dwarf_array = explode(',', $dwarves);
print_r($dwarf_array);
```
### Zadanie:
Podziel tekst i wyświelt ```print_r```
```php
<?php
$words = explode(' ', 'To zdanie nie jest zbytnio skomplikowane');
?>
```
* Zadanie z ciągu znaków "ALA MA KOTA" wyodrębnij słowo "KOT".

### Problem:

Chcemy odwrócić kolejność słów lub znaków w łańcuchu znaków.

### Rozwiązanie

```php
<?php 
$a = "Pewnego razu był sobie zółw";
$words = explode(' ', $a);
$words = array_reverse($words);
$s = join(' ', $words);
```

## Zadanie
* Przepisz zadanie i zobacz jaki efekt to ma efekt.
* Napisz funkcje odwroc_wyraz($wyraz), która przyjmie wyraz jako argument i zwróci go w odwrotnej kolejności. 
* Napisz funkcje wyczysc_spacje($wyraz), która przyjmie wyraz i usunię z niego wszystkie białe znaki. 
* Napisz funkcje odwroc_tablice($tablica), przyjmującą tablice i odracająca ją. 


