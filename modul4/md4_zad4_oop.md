### Obiektowy elementarz: 

### Problem, 

Chcemy zaprojektować prosty system sklepowy:

### Rozwiązanie:
```php
<?php
class ShopProduct {
    public $title = "bez tytułu";
    public $productMainName = "nazwisko";
    public $price = 0;
   
}
```
### Analiza
Jak widać, uzupełniliśmy naszą klasę o 4 składowe, pzypisując do każdej z nich wartość domyślną. Wszelkie obiekty konkretyzowane na bazie tej klasy będą zawierać owe dane domyśle. Słowo kluczowe ```public``` poprzedzające deklaracje każdej składowej umożliwia odwoływanie się do niej spoza kontekstu obiektu. 


### Problem
Chcemy wyposażyć nasze obiekty o specjalne metody. 
```php
<?php
class ShopProduct {
    public $title = "bez tytułu";
    public $producerMainName = "nazwisko";
    public $producerFirstName = "imię";
    public $price = 0;

    public function getProducer(){
        return "{$this->producerFirstName}"."{$this->producerFirstName}";
    }
}
$product1 = new ShopProduct();
$product1->title = "Moja Antonina";
$product1->producerMainName = "Kowalski";
$product1->producerFirstName= "Marcin";
print($product1->getProducer());
```

### Problem 

Chcemy wyposażyć klase ShopProduct w dodatkowe wygodne metody.

### Rozwiązanie
```php
<?php
class ShopProduct {
    public $title = "bez tytułu";
    public $producerMainName = "nazwisko";
    public $producerFirstName = "imię";
    public $price = 0;
    
    function __construct($title, $producerMainName, $producerFirstName, $price) {
        $this->title = $title;
        $this->producerFirstName = $producerFirstName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }
    
    function getPrice(){
        return $this->price;
    }
    function getProducerFirstName(){
            return $this->producerFirstName;
    }
}
```
