### Pisanie prostych klas:

### Problem:
Napisz prostą PHP klase wyświetlającą następujący napis 

'MyClass została stworzona!'


#### Rozwiązanie:
```php
<?php
class MyClass {
  public function __construct() 
  {
    echo 'MyClass class has initialized !'."\n";
  }
 }
$userclass = new MyClass;

```


### Problem:

 Napisz prostą klasę PHP, która wyświetla komunikat wprowadzający jak "Hello All, I am Scott", gdzie "Scott" jest wartością argumentu metody w klasie.
 
### Rozwiązanie:
```php
<?php 
class UserMessage {
 public $message = 'Hello All, I am ';
 
 public function introduce($name) {
    return $this->message.$name;
 }
 
 }

$mymessage = new UserMessage();
echo $mymessage->introduce('Scott')."\n";
```

Zadanie:
* Napisz klasę Prostokąt, która będzie implementowała interface Figura z odpowiednimi metodami do liczenia pola trójkąta. 
* Napisz klasę Okrąg (To nie koło :)), która będzie miala odpowiednie  metody, czy implementacja Figura, jest dobrym pomysłem?  