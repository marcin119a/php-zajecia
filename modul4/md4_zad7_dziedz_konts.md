
### Problem:
Co się dzieje z konstruktorami podczas dziedziczenia?

### Rozwiązanie 
```php
<?php
class CdProduct extends ShopProduct {
    private $playLength = 0;
    
    public function __construct($title, $firstName, $mainName, $price, $playLength){
    parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }
}
```

```php
<?php
class BookProduct extends ShopProduct {
    private $numPages = 0;
    
    public function __construct($title, $firstName, $mainName, $price, $numPages){
    parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }
}
```