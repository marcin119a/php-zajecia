### Sprawdzanie aktualnej daty i czasu 

### Problem 
Chcemy sprawdzić aktualna date lub godzine:

### Rozwiązanie
```php
<?php
echo strftime('%c'); # Mon Aug 12 18:23:45 2002
echo date('r'); #Mon, 12 Aug 2002 18:23:45 -0400
```


```php
<?php
$now_1 = getdate();
$now_2 = localtime();
print("$now_1[hours]:$now_1[minutes]:$now_1[seconds]");
```

### Zadanie 

* Sprawdź aktualną datę. 

