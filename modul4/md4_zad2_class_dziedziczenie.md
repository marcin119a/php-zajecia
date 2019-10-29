### Klasy z konstuktorem

### Problem:

Chcemy stworzyć klasę Ksiazka i Novel, Klasa nowel posiada dodatkową informacje "wydawca". Użyj dziedzinenia.



Rozwiązanie
```php
<?php
   class Ksiazka {
   
    function __construct( $par1, $par2 ) {
      $this->title = $par1;
      $this->price = $par2;
    }
    
    /* Member variables */
    var $price;
    var $title;
    
    /* Member functions */
    function setPrice($par){
     $this->price = $par;
    }
    
    function getPrice(){
     echo $this->price ."<br/>";
    }
    
    function setTitle($par){
     $this->title = $par;
    }
    
    function getTitle(){
     echo $this->title ." <br/>";
    }
 }


$physics = new Ksiazka( "Physics for High School", 10 );
$maths = new Ksiazka ( "Advanced Chemistry", 15 );
$chemistry = new Ksiazka ("Algebra", 7 );

/* Get those set values */
$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();

$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();

class Novel extends Books {
   var $publisher;
   
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
}
```

Teraz oprócz odziedziczonych funkcji, klasa Novel zachowuje dwie dodatkowe funkcje członkowskie.