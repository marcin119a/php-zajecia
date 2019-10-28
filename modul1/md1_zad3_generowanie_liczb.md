### Generowanie liczb losowych z danego przedzalu

### Problem:

Chcemy wygenerować liczbę losową należaca do podanego przedziału: [A,B]



### Rozwiązanie:
```php
$number_random = mt_rand($a, $b)
```



Generowanie liczb jest przydante, gdy np. chcemy wyświetlić losowy obrazek, 

```php
<?php
mt_rand(); // zwróci od 0 do mt_getrandmax()

```

### Analiza:

W php posiadamy 2 typy generowania liczb:

```
$a = rand()
```

oraz 

```
mt_rand()
```

Nazwa mt rand wywodzi się od matematyka Marina Mersen'a

mt_rand() jest lepsza funkcja od rand() (zobacz zadania)

### Zadanie
* Sprawdź różnice pomiędzy rand() i mt_rand() w PHP 7.1
https://stackoverflow.com/questions/28760650/difference-between-mt-rand-and-rand
* Wygeneruj losową liczbę z przediału ```[2**10, 2**11]```
* przetestuj działanie mt_rand($a,$b) dla liczb zmiennopozycyjnych. Dlaczego to zwraca liczbe całkowitą ? 

