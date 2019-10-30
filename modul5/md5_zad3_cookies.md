### Ustawienie cookie:

### Problem
Chcemy ustawić cookie i sprawdzić? 


### Rozwiązanie 

```
php -S localhost:9999
```

```php
<?php 
$secret_word = 'jedz szpinak';
setcookie('login', 'true');
```