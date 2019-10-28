
### Podstawy języka 

#### Pierwszy kod PHP:

- Escaping from HTML

```php+HTML
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>
```

```echo```  - procedura

```php
<?php echo 'Hello World!'; ?>
```

### Składnia języka 

```php
/* This is a multi line comment
     yet another line of comment */
echo 'This is a test'; // This is a one-line c++ style comment
```
#### Definicja zmiennej:

* Zmienne to "pojemniki" dla przetrzymywania informacji.


#### Tworzenie zmiennej: 

Zmienne w php zaczyna się od znaku ```$``` (dolar)
  ```php
<?php  
$napis = "abc";
  ```

  https://repl.it/@MartinInf1n1ty/LuminousGrumpyScripts

### Dostępne typy danych

PHP ma 9 typów danych, które są używane do tworzenai zmiennych

    Integers − to liczby całkowite, bez kropki dziesiętnej, jak np. 5001.

    Doubles − a to liczby zmiennoprzecinkowe, jak 3.14159 lub 49.1.

    Booleans − ma tylko dwie możliwe wartości true lub false

    NULL − jest specjalnym typem posiadającym tylko: NULL.

    Strings − jest sekwencją znaków, tak jak 'Ala ma kota'

    Arrays −  są nazwane i zaindeksowane zbiory innych wartości.

    Objects − są instancjami klas zdefiniowanych przez programistów, które mogą pakować zarówno inne wartości, jak i funkcje specyficzne dla danej klasy. (moduł 4)

    Resources − są specjalnymi zmiennymi, które zawierają odniesienia do zasobów zewnętrznych w stosunku do PHP (takich jak połączenia z bazą danych).


### Booleans:
Mają one tylko dwie możliwe wartości - prawdziwe lub fałszywe. PHP dostarcza kilka stałych, szczególnie do użytku jako Boolean: TRUE i FALSE, które mogą być używane w ten sposób
```php
<?php 
$foo = True; // assign the value TRUE to $foo
```
Więcej o przydatności ```boleans``` w module2. 


### Integers:
Są to liczby całkowite, bez kropki dziesiętnej, jak 4195. Są najprostszym typem . Odpowiadają prostym liczbom całkowitym, zarówno dodatnim jak i ujemnym. Liczby mogą być przypisane do zmiennych, lub mogą być użyte w wyrażeniach, takich jak:
```php
<?php
$int_var = 12345;
$another_int = -12345 + 12345;
```

### Doubles point numbers:

a to liczby zmiennoprzecinkowe, jak 3.14159 lub 49.1.

#### Problem: 

```php
$x = 8 - 6.4;  // which is equal to 1.6
$y = 1.6;
var_dump($x == $y); // is not true
```

### Strings
Są to tzw. sekwencje znaków np. "Ala ma kota". Ponieżej podaje kilka podstawowych ciągów znaków:
```php
<?php 
$string_1 = "This is a string in double quotes";
$string_2 = 'This is a somewhat longer, singly quoted string';
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters
print($string_1);
print($string_39);
```

### NULL

Dla dania zmiennej wartośći NULL, wystarczy przypisać do zmiennej:
```php
<?php
$my_var = NULL;
```

można napisać też:
```php
<?php
$my_var = null;
```

### Obiekty

Będa w module 4

### Tablice 

Będą w module 2