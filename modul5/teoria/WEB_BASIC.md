### Sesja 

### Ciasteczka

Cookies są plikami tekstowymi przechowywanymi na komputerze klienta i są one przechowywane w celu śledzenia wykorzystania. PHP w przejrzysty sposób obsługuje pliki cookie HTTP.

Identyfikacja powracających użytkowników odbywa się w trzech etapach :
*  Skrypt serwera wysyła zestaw plików cookie do przeglądarki. Na przykład nazwa, wiek, numer identyfikacyjny itp. 
* Przeglądarka przechowuje te informacje na lokalnym komputerze do wykorzystania w przyszłości.
* Kiedy następna przeglądarka wysyła żądanie do serwera WWW, wysyła te informacje o plikach cookie do serwera i serwer wykorzystuje te informacje do identyfikacji użytkownika.


### Anatomia ciasteczek

Cookies są zazwyczaj ustawiane w nagłówku HTTP (chociaż JavaScript może również ustawić cookie bezpośrednio w przeglądarce). Skrypt PHP ustawiający plik cookie może wysyłać nagłówki wyglądające w ten sposób.

```
HTTP/1.1 200 OK
Date: Fri, 04 Feb 2000 21:03:38 GMT
Server: Apache/1.3.9 (UNIX) PHP/4.0b3
Set-Cookie: name=xyz; expires=Friday, 04-Feb-07 22:03:38 GMT; 
                 path=/; domain=tutorialspoint.com
Connection: close
Content-Type: text/html
```

Jak widać, nagłówek Set-Cookie zawiera parę wartości nazw, datę GMT, ścieżkę i domenę. Nazwa i wartość będą zakodowane za pomocą adresu URL. "expires"  pole jest instrukcją dla przeglądarki, kiedy ma "zapomnieć" ciasteczko po podanym czasie i dacie.

Jeśli przeglądarka jest skonfigurowana do przechowywania plików cookie, wówczas informacje te będą przechowywane aż do upływu terminu ważności. Jeśli użytkownik skieruje przeglądarkę na jakąkolwiek stronę, która pasuje do ścieżki i domeny pliku cookie. Wyśle go ponownie na serwer.nagłówki przeglądarki mogą wyglądać w ten sposób -


```php
<?php
   setcookie("name", "John Watkin", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
?>