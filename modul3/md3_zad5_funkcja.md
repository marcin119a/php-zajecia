### Ustawienie domyślnych wartości funkcji

### Rozwiązanie

```php
<?php
function wrap_html($string, $tag = 'i') {
       return "<$tag> $string </$tag>";
}
            
echo wrap_html('a', 'bla');
echo wrap_html('a');
```

### Analiza:

Jeśli nie przekażemy argumentu $tag, to domyślnie będzie to ```$a = 'i'```. 

### Zadanie 


### Stosowanie parametrów nazwowych

#### Problem

Chcemy okreslic argumenty dla funkcji przez nazwe, a nie za pomoca ich pozycji w wywolywaniu funkcji. 

### Rozwiazanie
```php
<?php 

function image($img){
    $tag = '<img src="'. $img['src'] .'"';
    $tag .= 'alt="'. ($img['alt']) ? $img['']: ''. '">';
    return $tag;
}

```

### Zadanie:

* Napisz funkcje, która tworzy odnośnik do innej strony w takim formacie:
```
<a href="https://google.com"> google </a>
```
