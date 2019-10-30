### Metody GET i POST

Mamy dwa sposoby (polecane) do wysłania informacji do przeglądarki internetowej
Są to:

    metoda GET
    metoda POSTS

Przed wysłaniem informacji do przeglądarki, jest ona dekodowana używa schematu zwanego kodowaniem URL.  W tym schemacie pary nazwa/wartość są połączone jednakowymi znakami, a różne pary są oddzielone ampersandem (&).

```name1=value1&name2=value2&name3=value3```

Spacje są usuwane i zastępowane znakiem +, a wszelkie inne znaki niealfameryczne są zastępowane wartościami szesnastkowymi. Po zakodowaniu informacji jest ona wysyłana do serwera.

#### The GET Method

Metoda GET wysyła zakodowane informacje o użytkowniku dołączone do żądania strony. Strona i zakodowane informacje są oddzielone znakiem ```?```.

Przykład:
```http://www.test.com/index.htm?name1=value1&name2=value2```


GET metoda tworzy duży ciąg znaków, taki że występuje w logach serwera oraz w pasku adresu. 

GET metoda jest ograniczona do wysyłania do 1024 znaków.

Nigdy nie używaj metody GET, jeśli masz hasło lub inne poufne informacje, które mają być wysłane do serwera.

GET nie może wysyłać danych w postaci binarnej takiej jak zdjęcia (jpg) lub dokumenty wordowe do servera. 

Dostęp do danych przesłanych metodą GET można uzyskać za pomocą zmiennej środowiskowej ```QUERY_STRING```.


Język PHP dostarcza ```$_GET``` tablice asocjacyjną do uzyskania dostępu do wszystkich przesłanych informacji przy użyciu metody GET.

Wypróbuj poniższy przykład, umieszczając kod źródłowy w skrypcie test.php.


https://repl.it/@MartinInf1n1ty/FlashyMuffledCircles
```php
<html>
   <body>
      Dodaj 2 liczby
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         x: <input type = "x" name = "x" />
         y: <input type = "y" name = "y" />
         <input type = "submit" />
      </form>
      <?php
        if( $_GET["x"] || $_GET["y"] ) {
            $x = $_GET["x"];
            $y = $_GET["y"];
            echo $x + $y;
        }
      ?>
   </body>
</html>
```

#### The POST Method

Metoda POST przekazuje informacje za pośrednictwem nagłówków HTTP. Informacje są kodowane w sposób opisany w przypadku metody GET i umieszczane w nagłówku zwanym QUERY_STRING.


Metoda POST nie ma żadnych ograniczeń co do wielkości przesyłanych danych.

Metodę POST można wykorzystać do wysyłania danych ASCII oraz danych binarnych.

Dane przesyłane metodą POST przechodzą przez nagłówek HTTP, więc bezpieczeństwo zależy od protokołu HTTP. Używając Secure HTTPS można się upewnić, że informacje są bezpieczne.

PHP udostępnia tablicę asocjacyjną $_POST umożliwiającą dostęp do wszystkich wysyłanych informacji przy użyciu metody POST.

Wypróbuj poniższy przykład, umieszczając kod źródłowy w skrypcie test.php.


https://repl.it/@MartinInf1n1ty/PitifulCreepyVoxel
```php
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         x: <input type = "text" name = "x" />
         y: <input type = "text" name = "y" />
         <input type = "submit" />
      </form>
      <?php
        if( $_POST["x"] || $_POST["y"] ) {
            $x = $_POST['x'];
            $y = $_POST['y'];
            echo $x+ $y;
        }
      ?>
   </body>
</html>
```

