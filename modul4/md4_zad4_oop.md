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
    private $title = "bez tytułu";
    private $producerMainName = "nazwisko";
    private $producerFirstName = "imię";
    private $price = 0;
    
    public function __construct($title, $mainName, $first, $price) {
        $this->getProducer = $this->setProducer($mainName, $main);
        $this->price = $this->setPrice($price);
    }
    
    public function getProducer(){
        return "{$this->producerMainName}"."{$this->producerFirstName}";
    }
    public function setProducer($mainName, $firstName){
        if (is_string($mainName) && is_string($firstName)){
            $this->producerMainName = $mainName;
            $this->producerFirstName = $firstName;
        }
    }
    public function setPrice($price){
        if (is_int($price)){
            $this->price = $price;
        }
    }
}
$product1 = new ShopProduct("to nie jest cena numeryczna");
$product1->setProducer( "Kowalski", "Marcin");
$product1->setPrice("24.99");
print($product1->getProducer());
```

### Zadanie
* Dodaj użyteczne metody do obiektu ShopProduct. 
* Zastosować hermetyzacje do modyfikacji pól klasowych. 

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
