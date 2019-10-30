<?php
class ShopProduct {
    private $title = "bez tytułu";
    private $producerMainName = "nazwisko";
    private $producerFirstName = "imię";
    private $price = 0;

    public function __construct($title, $mainName, $first, $price) {
        $this->setProducer($mainName, $first);
        $this->setPrice($price);
        $this->setTitle($title);
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
        if (is_double($price)){
            $this->price = $price;
        }
    }
    public function setTitle($title){
        if (is_string($title)){
            $this->title = $title;
        }
    }
    protected function convert($price){

    }

}
$product1 = new ShopProduct("Moja Antonina", "Kowalski", "Marcin", 24.99);
print($product1->getProducer());