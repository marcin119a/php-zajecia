### Wczytywanie z wejścia
### Problem
 
Potrzebujemy coś wczytać z wejścia. 

```php
<?php
if ($argc !== 2) {
    echo "Usage: php hello.php <name>.\n";
    exit(1);
}
$name = $argv[1];
echo "Hello, $name\n";
```

Problem:

Chcemy sprawdzić informacje o PHP. 
````
<?php 
echo phpinfo(); 

