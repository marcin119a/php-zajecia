### Tworzenie lub otwieranie lokalnego pliku:

### Problem:

Chcemy otworzyć lokalny plik, aby móc do neigo zapisać dane lub je odczytać.

### Rozwiązanie:
```php
<?php 
$fh = fopen('plik.txt', r) or die*"nie mogę otworzyć plik.txt"):
$php_errormsg;
```

### Analiza:
Pierwszy arugmentem funckji fopen() jest plik do otwarcia, a drugi tryb, w którym otwieramy plik. 

Tryb określa: jakie operacje możemy przeprowadzić na pliku(odczyt lub zapis albo odczyt-zapis), gdzie na początku umieszamy wskażnik oraz czy jest tworzony, jeśli nie istnieje. 

```
r - to doczytu(tak), do zapisu(nie), wskażnik pliku(początek), utorzenie - nie 
```


### Problem:

Posiadamy dane w formularzu w formacie comma separated values (csv), na przykład plik wyeksportowany z eksela lub bazy danych i chcemy wyodrębnić rekordy i pola w takim formacie, który pozwoli na ich przetwarzenie w PHP.

### Rozwiązanie:
```php
<?php
$fp = fopen('przyklad.csv', 'r') or die("nie można otworzyć pliku");

while($csv_line = fgetcsv($fp, 1024)){
    for ($i = 0; $i < count($csv_line); $i++) {
        print($csv_line[$i]);
        
    }
    print("\n");
}

```
### Analiza:
Drugi argument funkcji fgetscsv() musi być większy niż maksymalna długość linii w pliku CSV(nie należy zapominać o uwzględnieniu również niewidocznych znaków znajdujących się na końcach lini. 

Funkcji fgetcsv() można przekazać opcjonalny trzeci argument - separator zastosowany zamiast przecinka (,) Jednak stosowanie innego separatora podważa celowość wykorzystania formatu CSV jako łatwego sposobu wymiany danych. 



