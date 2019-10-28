### Przekształcenie tablicy w łańcuch znaków

### Problem 

Chcemy przekształcić tablice do postaci ładnie sformatowanego łańcucha znaków. 

### Rozwiązanie: 

```php
<?php
$array = array('Marcin', 'Jan');
$string = join(',', $array);
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

### Problem:
Musimy podzielić ciąg znaków na fragmenty. Na przykład chcemy uzyskać dostęp do poszczególnych linii tekstu wpisanego przez użytkownika w polu ```<textarea>```

### Rozwiązanie:
```php
<?php
$words = explode(' ', 'To zdanie nie jest zbytnio skomplikowane');
```
### Analiza:

Do ```explode``` przekazujemy łańcuch seperatora, łańcuch, który będzie dzielony na fragmenty, oraz (opcjonalnie) maksymalną liczbę elementów, które powinny zostać zwrócone.

```php
<?php
$dwarves = 'oferma,śpioch,wesolek,zrzęda,kichający';
$dwarf_array = explode(',', $dwarves);
print_r($dwarf_array);
```


### Problem:

Chcemy odwrócić kolejność słów lub znaków w łańcuchu znaków.

### Rozwiązanie

```php
<?php 
$a = "Pewnego radu był sobie zółw";

$words = explode(' ', $a);

$words = array_reverse($words);

$s = join(' ', $words);


