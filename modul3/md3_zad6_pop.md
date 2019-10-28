### Popularne funkcje w PHP
### Problem


```php
<?php
$trimit = 'junk awesome stuff junk';
 
$trimmed = trim ( $trimit, 'junk' );
 
print_r ( $trimmed );
```

### Problem: 
Chcemy zmienić wielkość liter w ciągu znaków wszystkich.

### Rozwiązanie

```php
<?php
$a = strtoupper('ala ma kota');

echo $a; // ALA MA KOTA

$b = strtolower('Ala Ma Kota');
echo $b; // ala ma kota
```