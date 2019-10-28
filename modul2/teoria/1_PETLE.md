
Pętle w PHP są używane do wykonywania tego samego bloku kodu specificzną liczbę razy.
 
PHP wspiera 4 typy pętli: 

    for − przechodzi przez blok kodu określoną liczbę razy.

    while − pętla przechodzi przez blok kodu tak długo jeżeli dany warunek jest prawdziwy. 

    do...while − przechodzi przez blok kodu raz, a następnie powtarza pętlę tak długo, jak długo warunek specjalny jest prawdziwy.

    foreach − przechodzi przez blok kodu dla każdego elementu tablicy.


### Syntax pętla for
```
for (initialization; condition; increment){
   code to be executed;
}
```

#### Przykład pętla for
```php
<?php
 $a = 0;
 $b = 0;
 
 for( $i = 0; $i<5; $i++ ) {
    $a += 10;
    $b += 5;
 }
 
 echo ("At the end of the loop a = $a and b = $b" );
?>
   ```
   
### Syntax pętla while
```
while (condition) {
   code to be executed;
}
```

#### Przykład
```php
<?php
 $i = 0;
 $num = 50;
 
 while( $i < 10) {
    $num--;
    $i++;
 }
 
 echo ("Loop stopped at i = $i and num = $num" );
?>
```

### Syntax pętla foreach

```foreach (array as value) {
   code to be executed;
}
```
#### przykład:
```
  <?php
     $array = array( 1, 2, 3, 4, 5);
     
     foreach( $array as $value ) {
        echo "Value is $value <br />";
     }
  ?>
```

### The break statement

Słowo kluczowe ```break``` PHP jest używane do przedwczesnego zakończenia wykonywania pętli.

Polecenie przerwania znajduje się wewnątrz bloku poleceń. Daje pełną kontrolę i kiedy tylko chcesz wyjść z pętli możesz wyjść. Po wyjściu z pętli natychmiastowe polecenie do pętli zostanie wykonane.

```php
 <?php
 $i = 0;
 
 while( $i < 10) {
    $i++;
    if( $i == 3 ) break;
 }
 echo ("Loop stopped at i = $i" );
```     
Ta procedura zwróci nam następujące wyniki:
```
Loop stopped at i = 3
```


#### Przykład:

````
<?php
 $array = array( 1, 2, 3, 4, 5);
 
 foreach( $array as $value ) {
    if( $value == 3 )continue;
    echo "Value is $value <br />";
 }



### The continue statement

Słowko kluczowe ```continue```  jest używana do zatrzymania obecnej iteracji pętli, ale nie zatrzymuje to pętli:


#### Przykład:

````
<?php
 $array = array( 1, 2, 3, 4, 5);
 
 foreach( $array as $value ) {
    if( $value == 3 )continue;
    echo "Value is $value <br />";
 }
