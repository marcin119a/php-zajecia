### Namespaces

W świecie PHP, przestrzenie nazw(namespaces) mają za zadanie zająć się dwoma problemami, z którymi twórcy bibliotek i aplikacji mają do czynienia podczas tworzenia komponentów kodu wielokrotnego użytku:
    
    * Oddziaływanie nazwy pomiędzy tworzonym kodem i wewnętrzny PHP classes/functions/constants lub inne classes/functions/constants.
    
    * Ability to abbreviate Extra_Long_Names for improving the readability of source code.
   
Przykład Namespace:
```php
<?php
namespace A;

class X{

}

```