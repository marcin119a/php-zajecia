### Klasy z konstuktorem

### Problem:

Chcemy stworzyć klasę Ksiazka i Powiesc, Klasa Powiesc posiada dodatkową informacje "wydawca". Użyj dziedzinenia.



Rozwiązanie
```php
<?php
   class Ksiazka {
    public $prices = 0.0;
    public $title = "";
    
    function __construct( $par1, $par2 ) {
      $this->title = $par1;
      $this->price = $par2;
    }
    
   
    function setPrice($par){
        $this->price = $par;
    }
    
    function getPrice(){
        echo $this->price ."\n";
    }
    
    function setTitle($par){
        $this->title = $par;
    }
    
    function getTitle(){
        echo $this->title." ";
    }
 }


$physics = new Ksiazka( "Physics for High School", 10 );
$maths = new Ksiazka ( "Advanced Chemistry", 15 );
$chemistry = new Ksiazka ("Algebra", 7 );

/* Get those set values */
print ($physics->getTitle().$physics->getPrice());
print ($chemistry->getTitle().$chemistry->getPrice());
print ($maths->getTitle().$maths->getPrice());

#$physics->getPrice();
#$chemistry->getPrice();
#$maths->getPrice();

class Novel extends Ksiazka {
   public $publisher;
   public function __construct($par1, $par2, $par3) {
        parent::__constructor($par1, $par2, $par3);
        $this->publisher = $par3;
   } 
   public function setPublisher($par){
      $this->publisher = $par;
   }
   
   public function getPublisher(){
      echo $this->publisher. "\n";
   }
}
```

Teraz oprócz odziedziczonych funkcji, klasa ```Novel``` zachowuje dwie dodatkowe funkcje członkowskie.