### Klasy abstrakcyjne

Jedna z ważniejszych zmian obiektów w PHP było wprowadzenie klas abstrakcyjnych. Ich włączenie do listy rozszerzeń PHP było kolejnym znakiem coraz pełniejszej akceptacji linii projektowania obiektowego w rozwoju języka PHP. 

Klasa abstrakcyjna to klasa, której nie da się skonkretyzować. Jej jedną funkcją jest definiowanie (ewentualnie częściowe tylko implementowanie) interfejsu dla ewentualnych klas pochodnych. 

```php
<?php 
interface ShopProduct{
    public function getTitle();
}
class ComicBook implements ShopProduct{
    private $title = ""; 
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
}

abstract class ShopProductWriter {
    protected $products = array();
    
    public function addProduct(ShopProduct $shopProduct){
        $this->products[] = $shopProduct;
    }
    abstract public function write();
}

class Artist extends ShopProductWriter {
    public function write(){
        foreach ($this->products as $product){
            print($product->getTitle());
        }
    }

}
```

```php
<?php
$writer = new ShopProductWriter();
```
spowoduje błąd (nie można utworzyć egzemplarza klasy abstrakcyjnej)
```
PHP Fatal error: Cannot instantiate abstract class 
```

W większości przypadków klasa abstrakcyjne zawiera przynajmniej jedną metodę abstrakcyjną. Metoda taka również jest deklarowana ze słowem kluczowym abstract. 

Tworzać klasę abstrakcyjną, obligujemy równocześnie klasy pochodne do zdefiniowania jej implementacji. Jednak decyzje co do szczegółów tej impelemntacji zostawiamy twórcą owych klas. 

Przykład problemy:

```php
<?php
class ErrorWriter extends ShopProductWriter {}
$a = new ErrorWriter();

```
