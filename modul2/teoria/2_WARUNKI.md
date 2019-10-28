### Kontrola sterowania przepływem danych

Słówka kluczowe ```if, elseif ...else and switch``` są wykorzystywane do podejmowania decyzji w oparciu o różne warunki.
PHP wspiera następujące skłądnie dotyczące podejmowania decyzji



    if...else warunek − używamy ten warunek jeśli chcemy wykonać kod kiedy warunek jest prawdziwy i inny przypadek jest fałszywy

    elseif statement −  jest używany z instrukcją if...else do wykonania zbioru kodu, jeżeli jeden z kilku warunków jest prawdziwy

    switch statement − jest używany, jeśli chcesz wybrać jeden z wielu bloków kodu do wykonania, użyj instrukcji Switch. Polecenie ```switch``` jest używane w celu uniknięcia długich bloków kodu if..elseif...else.

### ```if...else``` warunek
```
if (warunek){
   kod, który ma być wykonany, jeśli warunek jest prawdziwy;
} else {
   kod, który ma być wykonany, jeśli warunek jest fałszywy;
}
```

#### Przykład warunku ```if...else```


```php
<?php
 $d = date("D");
 
 if ($d == "Fri")
    echo "Have a nice weekend!"; 
 
 else
    echo "Have a nice day!"; 
 ```
 
Ten kod zwróci:
```
Have a nice day!
```

### elseif warunek

```
if (warunek1)
   kod, który ma być wykonany, jeżeli warunek1 jest prawdziwy;
elseif (warunek2)
   kod, który ma być wykonany, jeżeli warunek2 jest prawdziwy;
else
   kod, który ma być wykonany, jeśli warunek1 i warunek2 jest fałszywy;
```

#### Przykład warunku ```if...elseif...else```
```php
<?php
 $d = date("D");
 
 if ($d == "Fri")
    echo "Have a nice weekend!";
 
 elseif ($d == "Sun")
    echo "Have a nice Sunday!"; 
 
 else
    echo "Have a nice day!"; 
?>
```

### Warunek switch:
```
switch (wyrażenie){
   case etykieta:
      kod, który ma być wykonany, jeżeli wyrażenie = etykieta1;
      break;  
   
   case etykieta2:
      kod, który ma być wykonany, jeżeli wyrażenie = etykieta2;
      break;
   default:
       kod do wykonania
       jeśli wyrażenie jest inne 
       zarówno z etykiety1, jak i etykiety2;
}

```

Przykład:
```php
<?php
 $d = date("D");
 
 switch ($d){
    case "Mon":
       echo "Today is Monday";
       break;
    
    case "Tue":
       echo "Today is Tuesday";
       break;
    
    case "Wed":
       echo "Today is Wednesday";
       break;
    
    case "Thu":
       echo "Today is Thursday";
       break;
    
    case "Fri":
       echo "Today is Friday";
       break;
    
    case "Sat":
       echo "Today is Saturday";
       break;
    
    case "Sun":
       echo "Today is Sunday";
       break;
    
    default:
       echo "Wonder which day is this ?";
 }
?>

