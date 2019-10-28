### Wyswietlanie daty lub czasu w okreslonym formacie:

### Problem

Musimy wyświetlić data lub czas w określony sposób:

### Rozwiazanie:

```php
<?php
print(strftime("%C"));

print(date("d/m/y"));

````

Przykładowe znaki formatujace:
```
%H godzina 
%M mnuta
%S sekunda

```

### Zadanie:
* Wyświetl datę w wersji odwróconej: ```y/m/d```

### Weryfikacja poprawnosci daty:

### Problem:

Chcemy sprawdzić, czy data jest poprawna, na przykład chcemy się upewnić, ze użytkownik nie podał jako daty swojego urodzenia. 30 lutego 1967 

### Rozwiazanie

```php
<?php
$month = 13;
$day = 12;
$year = 2019;
$valid = checkdate($month, $day, $year);
```

### Zadanie
* Wymyśl datę z roku przestępnego i sprawdź, co funkcja checkdate zwróci. 

### Dodawanie lub odejmowanie czasu 

### Problem:

Musimy dodać lub odjąć od daty określony interwal czasowy.

```php
<?php
$birtday = 'March 10, 1975';
$whoopee_made = strtotime("$birtday - 9 months ago");
```

### Zadanie

* Przepisz kod z ostatniego listingu i przerób na obecną datę. 