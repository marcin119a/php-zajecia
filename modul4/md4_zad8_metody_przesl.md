### Zarządzanie dostępem do klasy -- słowa public, private i protected

```php
<?php
class ShopProduct{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price; 
    
    public function __construct($title, $firstName, $mainName, $price ){
       $this->price = $price;
       $this->title = $title;
       $this->producerMainName = $mainName;
       $this->producerFirstName = $firstName;
    }
    public function getProducerFirstName(){
        return $this->producerFirstName;
    }
    public function getProducerMainName(){
            return $this->producerMainName;
    }
}
```

### Zadanie
* Dopisz metody ```getTitle()```, ```getPrice()```. 



### Zadanie:
* 

Problem:
Wywoływanie metod przesłonientych:

```php
<?php
class ShopProduct {
    private $title;
    private $producerFirstName;
    
    function getSummaryLine(){
        $base = "{$this->title}"."{$this->producerFirstName}";
        return $base;
    }
}
class BookProduct extends ShopProduct {
    function getSummartLine(){
        $base = parent::getSummaryLine();
        $base.= ": liczba stron {$this->numPages}";
        return $base;
    }
}

```