### Usuwanie obiektu

Problem.

Chcemy usunąć obiekt.

Rozwiązanie:

```php
<?php
class A {
    public $test= 0;
}

$a = new A();
unset($a);
$a->test; 
```