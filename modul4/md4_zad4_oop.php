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


