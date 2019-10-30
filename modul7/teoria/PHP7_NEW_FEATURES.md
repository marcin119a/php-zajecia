Wczesniej można było

w php7:

### Scalar Type Declarations
Example - Coercive Mode(Tryb wymuszenia)

```php
<?php
   // Coercive mode
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   print(sum(2, '3', 4.1));
```




### Use statement
```php
<?php
   // przed PHP 7
   use com\tutorialspoint\ClassA;
   use com\tutorialspoint\ClassB;
   use com\tutorialspoint\ClassC as C;

   use function com\tutorialspoint\fn_a;
   use function com\tutorialspoint\fn_b;
   use function com\tutorialspoint\fn_c;

   use const com\tutorialspoint\ConstA;
   use const com\tutorialspoint\ConstB;
   use const com\tutorialspoint\ConstC;

   // dla PHP 7+ code
   use com\tutorialspoint\{ClassA, ClassB, ClassC as C};
   use function com\tutorialspoint\{fn_a, fn_b, fn_c};
   use const com\tutorialspoint\{ConstA, ConstB, ConstC};
```



Referencje:

https://www.tutorialspoint.com/php7/php7_use_statement.htm