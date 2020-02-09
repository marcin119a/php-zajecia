### Programowanie obiektowe
Możemy sobie wyobrazić świat stworzony z wielu obiektów, takich jak Słońce, Ziemia, Księżyć itp.
Podobnie możemy wyobrazić sobie świat z wielu innych obiektów, takich jak koło, układ kierowniczy, przekładnia. W ten sam sposób istnieją obiektowo zorientowane koncepcje programowania, które przyjmują wszystko jako obiekt i implementują oprogramowanie wykorzystujące różne obiekty.

#### Object Oriented Concepts

Zanim przejdziemy do szczegółów, zdefiniujmy ważne pojęcia związane z programowaniem obiektowym.

Class − Jest to typ danych zdefiniowany przez programistę, który zawiera funkcje lokalne, jak również dane lokalne. Możesz myśleć o klasie jako o szablonie do tworzenia wielu instancji tego samego rodzaju (lub klasy) obiektu.

Przykład:
```php
<?php 
class Kaczuszka {
    
}
```

```Object``` − Indywidualna instancja struktury danych zdefiniowanej przez klasę. Klasę definiuje się raz, a następnie tworzy się wiele obiektów, które do niej należą. Obiekty znane są również jako instancje.

Przykład:
```php
<?php 
class Kaczuszka {
    
}
$kacza_gumowa = new Kaczuszka();
```

```Member Variable``` − Są to zmienne zdefiniowane wewnątrz klasy. Dane te będą niewidoczne dla osób znajdujących się poza klasą i będą dostępne za pośrednictwem funkcji członka. Zmienne te nazywane są atrybutami obiektu po jego utworzeniu.

Przykład:
```php
<?php 
class Kaczuszka {
    public $kolor = "żółty"; 
}
$kacza_gumowa = new Kaczuszka();
```

```Member function``` −  Są to funkcje zdefiniowane wewnątrz klasy i służą do uzyskiwania dostępu do danych obiektu.

```php
<?php 
class Kaczuszka {
    public $kolor = "żółty"; 
    
    public function daj_glos(){
        return "kwa kwa";
    }
}
$kacza_gumowa = new Kaczuszka();
```

```Inheritance``` − Gdy klasa jest definiowana przez dziedziczenie istniejącej funkcji klasy nadrzędnej, to jest ona nazywana dziedziczeniem. Tutaj klasa dziecięca odziedziczy wszystkie lub kilka funkcji członkowskich i zmiennych klasy nadrzędnej.

Przykład
```php
<?php 
class Zabawka {
    
}
class Kaczuszka extends Zabawka{
    public $kolor = "żółty"; 
    
    public function daj_glos(){
        return "kwa kwa";
    }
}
$kacza_gumowa = new Kaczuszka();
```


```Constructor``` − odnosi się do specjalnego typu funkcji, która będzie wywoływana automatycznie za każdym razem, gdy pojawi się formacja obiektowa z klasy.
Przykład: 
```php
<?php
class Kaczuszka extends Zabawka {
    public function  __construct(){
        echo "gratulacje stworzyłeś nową kaczuszkę!";
    }
    public $kolor = "żółty"; 
    
    public function daj_glos(){
        return "kwa kwa";
    }
}
$kacza_gumowa = new Kaczuszka();
```



```Parent class``` − Klasa odziedziczona po innej klasie. Nazywa się to również klasą bazową lub superklasą

Przykład:
W naszym przykładie to klasa ```Zabawka```

```php
<?php 
class Zabawka {

}
```
```Child Class``` − Klasa, która dziedziczy po innej klasie. Jest ona również nazywana podklasą lub klasą pochodną.

Przykład;

W naszym przykładie to klasa ```Kaczuszka```
```php
<?php 
class Kaczuszka extends Zabawka {

}
```


```Polymorphism``` − Jest to koncepcja zorientowana obiektowo, w której ta sama funkcja może być wykorzystywana do różnych celów. Na przykład nazwa funkcji pozostanie taka sama, ale wymaga innej liczby argumentów i może wykonywać różne zadania.
```<?php
<?php
  class Zabawka 
  {
    function daj_glos()
    {
        echo 'haha';
    }

    function wyswietl()
    {
      $this->echo_tekst();
    }
  }      
  
  class Kaczuszka extends Zabawka
  {
    function daj_glos()
    {
        echo 'kwa kwa';
    }
  }      
```


```Overloading``` − rodzaj polimorfizmu, w którym niektórzy lub wszyscy operatorzy mają różne zastosowania w zależności od rodzaju argumentów. Podobnie funkcje mogą być również przeciążone inną implementacją.

Data Abstraction − jakakolwiek reprezentacja danych, w których szczegóły implementacji są ukryte (wyabstrahowane).
```php
<?php

```

Encapsulation − odnosi się do koncepcji, w której wszystkie dane i funkcje członka są enkapsulowane razem w celu utworzenia obiektu.

Zmienna $this jest zmienną specjalną i odnosi się do tego samego obiektu, czyli samego obiektu.


```php
<?php
class Kaczuszka {
    private $number_produkcji; 
    
    public function __construct($numer){
        $this->number_produkcji = $numer;
    }
    
    public function getNumerProdukcji(){
        if ($this->number_produkcji != 0){ 
            return $this->number_produkcji;
        } else {
            return -1;
        }
    }
}
$kaczuszka = new Kaczuszka("12k121");
$kaczuszka->get_number_produkcji();
```

Interface - są zdefiniowane tak, aby nadać wspólne nazwy funkcji realizatorom. Różni implementujący mogą implementować te interfejsy zgodnie z ich wymaganiami. Można powiedzieć, że interfejsy są szkieletami, które są wdrażane przez programistów.
```php
<?php
interface FiguraGemoetrycznaInterface {
   public function oblicz_pole();
}
class Prostokat implements  FiguraGemoetrycznaInterface {
     public  $a = 0;
     public  $b = 0; 
   
    public function oblicz_pole() {
        return $this->a * $this->b;
    }
}

class Okrag implements FiguraGemoetrycznaInterface {
    
}


### Then, if another class implemented that interface, like this −

class Report implements Mail {
   // sendMail() Definition goes here
}
```

Destructor − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.
