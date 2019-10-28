### Operatory w PHP
Czym są opereratory? 

 Prosta odpowiedź może być udzielona przy użyciu wyrażenia 4 + 5 jest równa 9. Tutaj 4 i 5 nazywane są operandami, a + operatorem. Język PHP obsługuje następujące typy operatorów:
 
#### PHP dzieli swoje operatory na kilka podgrup:

operatory arytmetyczne

    - | +        | Addition       | $x + $y  | suma zmienych $x i $y          |      |
      | -------- | -------------- | -------- | ------------------------------ | ---- |
      | ```-```  | Subtraction    | $x - $y  | różnica $x i $y                |      |
      | ```*```  | Multiplication | $x * $y  | Iloczyn $x i $y                |      |
      | ```/```  | Division       | $x / $y  | iloczyn $x i $y                |      |
      | ```%```  | Modulus        | $x % $y  | reszta z dzielenia $x przez $y |      |
      | ```**``` | Exponentiation | $x ** $y | $x do $y-wej potegi            |      |

operatory przypisania

    - | ```x = y```  | x = y     | przypisuje lewostronnie    |      |
      | ------------ | --------- | -------------------------- | ---- |
      | ```x += y``` | x = x + y | dodaje i przypisuje        |      |
      | ```x -= y``` | x = x - y | odejmuje i przypisuje      |      |
      | ```x *= y``` | x = x * y | mnoży i przypisuje         |      |
      | ```x /= y``` | x = x / y | dzieli i przypisuje        |      |
      | ```x %= y``` | x = x % y | bierze modulo i przypisuje |      |

inkrementacji/dekrementacji operators

    - | ```++$x``` | Pre-increment  | Increments $x by one, then returns $x |      |
      | ---------- | -------------- | ------------------------------------- | ---- |
      | ```$x++``` | Post-increment | Returns $x, then increments $x by one |      |
      | ```--$x``` | Pre-decrement  | Decrements $x by one, then returns $x |      |
      | ```$x--``` | Post-decrement | Returns $x, then decrements $x by one |      |

operatory porównania

    - | ```==```  | Equal                    | $x == $y  | Returns true if $x is equal to $y                            |
      | --------- | ------------------------ | --------- | ------------------------------------------------------------ |
      | ```===``` | Identical                | $x === $y | Returns true if $x is equal to $y, and they are of the same type |
      | ```!=```  | Not equal                | $x != $y  | Returns true if $x is not equal to $y                        |
      | ```<>```  | Not equal                | $x <> $y  | Returns true if $x is not equal to $y                        |
      | ```!==``` | Not identical            | $x !== $y | Returns true if $x is not equal to $y, or they are not of the same type |
      | ```>```   | Greater than             | $x > $y   | Returns true if $x is greater than $y                        |
      | ```<```   | Less than                | $x < $y   | Returns true if $x is less than $y                           |
      | ```>=```  | Greater than or equal to | $x >= $y  | Returns true if $x is greater than or equal to $y            |
      | ```<=```  | Less than or equal to    | $x <= $y  | Returns true if $x is less than or equal to $y               |
      | ```<=>``` | Spaceship                | $x <=> $y | Returns an integer less than, equal to, or greater than zero, depending on  if $x is less than, equal to, or greater than $y. Introduced in PHP 7. |

operatory logiczne

    - | ```and``` | And  | $x and $y  | True if both $x and $y are true               |      |
      | --------- | ---- | ---------- | --------------------------------------------- | ---- |
      | ```or```  | Or   | $x or $y   | True if either $x or $y is true               |      |
      | ```xor``` | Xor  | $x xor $y  | True if either $x or $y is true, but not both |      |
      | ```&&```  | And  | $x && $y   | True if both $x and $y are true               |      |
      | ```||```  | Or   | $x \|\| $y | True if either $x or $y is true               |      |
      | ```!```   | Not  | !$x        | True if $x is not true                        |      |

operatory tekstowe

    - | .    | Concatenation            | $txt1 . $txt2  | Concatenation of $txt1 and $txt2 |
      | ---- | ------------------------ | -------------- | -------------------------------- |
      | .=   | Concatenation assignment | $txt1 .= $txt2 | Appends $txt2 to $txt1           |

operatory talicowe

    - | +    | Union        | $x + $y   | Union of $x and $y                                           |      |
      | ---- | ------------ | --------- | ------------------------------------------------------------ | ---- |
      | ==   | Equality     | $x == $y  | Returns true if $x and $y have the same key/value pairs      |      |
      | ===  | Identity     | $x === $y | Returns true if $x and $y have the same key/value pairs in the same order and of the same types |      |
      | !=   | Inequality   | $x != $y  | Returns true if $x is not equal to $y                        |      |
      | <>   | Inequality   | $x <> $y  | Returns true if $x is not equal to $y                        |      |
      | !==  | Non-identity | $x !== $y | Returns true if $x is not identical to $y                    |      |

conditional assignment operators

    - | ?:   | Ternary         | $x = *expr1* ? *expr2* : *expr3* | Returns the value of $x. The value of $x is *expr2* if *expr1*  = TRUE. The value of $x is *expr3* if *expr1* = FALSE |
      | ---- | --------------- | -------------------------------- | ------------------------------------------------------------ |
      | ??   | Null coalescing | $x = *expr1* ?? *expr2*          | Returns the value of $x. The value of $x is *expr1* if *expr1*  exists, and is not NULL. If *expr1* does not exist, or is NULL, the value of $x is *expr2*. Introduced in PHP 7 |
      |      |                 |                                  |                                                              |

