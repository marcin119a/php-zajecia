### Sprawdzanie aktualnej daty i czasu:

### Problem:
chcemy spradzic aktualną date lub godzine:

### Rozwiązanie: 
```php
echo strftime('%c') # Mon Aug 12 18:23:45 2002
echo date('r') #Mon, 12 Aug 2002 18:23:45 -0400
```

### Analiza :


Funkcja localtime


Funckcja getdate()
Zwracaja tablice, którymi elementami są różne części podanej daty i czasu.

getdate zwraca tablice asocjacyjną zawiera prary klucz 

takie jak:
```
seconds 
minutes
hours
mday (dzienmieiiada)
wday
mon 
year 
yday
weekday
month

```

### Przyklad:

```
$a = getdate(1637271000);
print('%s %d, %d, $a['month'], $a['mday'], $a['year']

```


### Analiza 
funkcja ```strftime()``` oraz ```date()``` moga zwracac lancuchy znakow i sa to daty sformaotwane na rozne sposoby. 