### Funkcje wbudowane oraz tworzenie własnych funkcji

Wprowadzenie:

Funkcje pomagają tworzyć zorganizowany kod, który można wielokrotnie wykorzystywać. Dzięki nim można wyodrębnić szczególne fragmentu kodu, który w efekcie, będzie bardziej elastyczne.  

np.

```php
<?php
funcion add($a $b){
    return $a + $b;
}
$total = $add(2,2);

```

Aby zadeklarować funkcje należy użyć słówka kluczowego '''function''' i wpisać po nim nazwę funkcji oraz, w nawiasach wszystkie jej parametry. 


W celu wywolania funkcji wystarczy po prostu uzyc jej nazwy i podac wartosc argumentow dla parametrow funkcji.

Jezeli funkcja zwraca wartosc, mozna przypisac wynik jej dzialania do zmiennej, jak pokazalismy w powyzszym przykladzie. 
