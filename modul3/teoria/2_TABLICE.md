### Tablice

Tablica jest strukturą danych, która przechowuje jeden lub więcej podobnych typów wartości w jednej wartości. Na przykład, jeśli chcesz przechowywać 100 liczb, to zamiast definiować 100 zmiennych, łatwo jest zdefiniować tablicę o długości 100.

Istnieją trzy różne rodzaje tablic i każda wartość tablicy jest dostępna za pomocą ID, które jest nazywane indeksem tablicy.

* Tablica numeryczna - Tablica z indeksem numerycznym. Wartości są zapisywane i dostępne w sposób liniowy.

* Tablica asocjacyjna - Tablica z łańcuchami jako indeksem. Przechowuje ona wartości elementów w powiązaniu z wartościami kluczowymi, a nie w ścisłej liniowej kolejności indeksów.

* Wielowymiarowa tablica - tablica zawierająca jedną lub więcej tablic i wartości jest dostępna przy użyciu wielu indeksów.

NOTE − PHP posiada dużo wbudowanych funkcji tablicowych: 

#### Tablice numeryczne:
Tablice te mogą przechowywać liczby, łańcuchy i dowolny obiekt, ale ich indeks będzie reprezentowany przez liczby. Domyślnie indeks tablicy zaczyna się od zera.

Przykład

W tym przykadzie widzimy jak można strzoyć przykładową talice numeryczną:
Używamy tutaj funkcji wbudowanej ```array()``` do stworzenia tablicy. This function is explained in function reference.
```php
<?php
 /* funkcja wbudowana do tworzenia tablicy. */
 $numbers1 = array( 1, 2, 3, 4, 5);
 
 foreach( $numbers1 as $value ) {
    echo "sposób1: $value"."\n";
 }
 
 /* druga metoda do tworzenia funkcji, poprzez podanie indeksów. */
 $numbers2[0] = "one";
 $numbers2[1] = "two";
 $numbers2[2] = "three";
 $numbers2[3] = "four";
 $numbers2[4] = "five";
 
 foreach( $numbers2 as $value ) {
    echo "sposób2 is $value"."\n";
 }
/* trzeci sposób tworzenia tablicy */
$numbers3 = [1,2,3,4,5]; 
 
 foreach( $numbers3 as $value ) {
    echo "sposób3 is $value"."\n";
 }
```
https://repl.it/@MartinInf1n1ty/OptimalSimpleKeyboardmacro

### Tablice asocjacyjne
Tablice asocjacyjne są bardzo podobne do tablic numerycznych pod względem funkcjonalności, ale różnią się one pod względem indeksu. Tablice asocjacyjne będą miały swój indeks jako ciąg znaków, dzięki czemu można ustalić silny związek między kluczem a wartościami.

Aby przechowywać wynagrodzenia pracowników w tablicy, tablica indeksowana numerycznie nie byłaby najlepszym wyborem. Zamiast tego, możemy użyć nazwisk pracowników jako klucze w naszej tablicy skojarzeniowej, a wartość będzie ich odpowiednie wynagrodzenie.

```php
<?php
/* tworzymy tablice asocjacyjną */
$salaries = array("Janek" => 2000, "Marcin" => 1000, "Zosia" => 500);

echo "Salary of Janek is ". $salaries['Janek']."\n";
echo "Salary of Marcin is ".  $salaries['Marcin']."\n";
echo "Salary of Zosia is ".  $salaries['Zosia']."\n";

/* Second method to create array. */
$salaries['Janek'] = "high";
$salaries['Marcin'] = "medium";
$salaries['Zosia'] = "low";

echo "Salary of Janek is ". $salaries['Janek'] ."\n";
echo "Salary of Marcin is ".  $salaries['Marcin']."\n";
echo "Salary of Zosia is ".  $salaries['Zosia']."\n";
?>
```
https://repl.it/@MartinInf1n1ty/DryUnacceptableBotany

###  Wielowymiarowa tablica

Wielowymiarowa tablica każdego elementu w tablicy głównej może być również tablicą. A każdy element w podarray może być tablicą i tak dalej. Wartości w wielowymiarowej tablicy są dostępne przy użyciu wielu indeksów.

Przykład:
```php
<?php
$marks = array( 
  "Janek" => array (
      "fizyka" => 3,
      "matematyka" => 2,	
      "chemia" => 3
  ),
  
  "Marcin" => array (
      "fizyka" => 4,
      "matematyka" => 4,
      "chemia" => 4
  ),
  
  "Zofia" => array (
      "fizyka" => 3,
      "matematyka" => 3,
      "chemia" => 2
  )
);

/* Accessing multi-dimensional array values */
echo "ocena dla Janek z fizyka : " ;
echo $marks['Janek']['fizyka'] . "\n"; 

echo "ocena for Marcin z matematyka : ";
echo $marks['Marcin']['matematyka'] . "\n";

echo "ocena dla Zofia z chemia : " ;
echo $marks['Zofia']['chemia'] . "\n";
```
https://repl.it/@MartinInf1n1ty/ElegantGlumOrder