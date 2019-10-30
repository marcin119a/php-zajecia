### PHP and MYSQL

## Połączenie:
PHP udostępnia funkcję ```mysql_connect``` do otwarcia połączenia z bazą danych. Funkcja ta pobiera pięć parametrów i zwraca identyfikator łącza MySQL w przypadku powodzenia lub FALSE w przypadku niepowodzenia.

```
connection mysql_connect(server,user,passwd,new_link,client_flag);
```
#### Server

Optional −Nazwa hosta z uruchomionym serwerem bazy danych. Jeśli nie została podana, to wartością domyślną jest  localhost:3306.	

##### user

Optional − Nazwa użytkownika uzyskującego dostęp do bazy danych. Jeśli nie jest określona, to domyślnie jest to nazwa użytkownika, który jest właścicielem procesu serwera.

##### passwd

Optional − Hasło użytkownika uzyskującego dostęp do bazy danych. Jeśli nie jest podane, to domyślnie jest to puste hasło..

### oraz inne, na ten moment nie potrzebne


## Zamknięcie połączenia

Jego najprostsza funkcja ```mysqli_close``` PHP umożliwia zamknięcie połączenia z bazą danych. Ta funkcja pobiera zasób połączenia zwracany przez funkcję ```mysql_connect```. Zwraca ```TRUE``` w przypadku powodzenia lub ```FALSE``` w przypadku niepowodzenia.


### Syntax
```
bool mysqli_close ( zasób $link_identifier );
```
Jeśli zasób nie jest określony, wówczas ostatnia otwierana baza danych jest zamykana.

### Przykład:

Poniższy przykład, aby otworzyć i zamknąć połączenie z bazą danych:

```php
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$link = mysqli_connect($dbhost, $dbuser, $dbpass);

if ($link) {
    // Baza danych jest osiągalna.
    mysqli_close($link);
}
```

### SQL LITE I PDO 

PDO jest bazodanową warstwą abstrakcji dostępną od PHP 5.1.0, która dostarcza obiektowy interfejs do komunikacji z wieloma silnikami baz danych. PDO nie tłumaczy Twoich zapytań SQL ani nie emuluje brakujących funkcjonalności; jest natomiast biblioteką umożliwiającą łączenie się do wszystkich obsługiwanych przez siebie baz danych przez jedno wspólne API, co jest doskonałym rozwiązaniem dla aplikacji w których osoba instalująca ją decyduje o typie silnika.


Co ważne, PDO pozwala na przekazywanie parametrów do zapytania SQL bezpośrednio z żądania ($_GET, $_POST). Nie musisz martwić się już o ataki SQL injection, gdyż biblioteka w odpowiedni sposób zabezpieczy ich wartości, aby nie były niebezpieczne. Dzieje się to dzięki tzw. “prepared statements” (PDO::prepare()) i wstrzykiwaniu parametrów przy użyciu metody bindParam().

Spójrzmy na typowy przykład. Twój skrypt otrzymuje numeryczne ID w parametrze GET. To ID uzywane jest później w zapytaniu SQL, aby wyciągnąć z bazy informacje na temat konkretnego rekordu. Poniżej przedstawiony jest kod, który nie korzysta z “prepared statements”:

```php
<?php
$pdo = new PDO('sqlite:users.db');
$pdo->query("SELECT name FROM users WHERE id = " . $_GET['id']); // <-- NIE!
```
Cóż, ten kod jest tragiczny. Parametr id wstrzykiwany jest do zapytania SQL prosto z żądania ($_GET['id']), co umożliwia wykonanie ataktu SQL injection, a w efekcie wykonanie dowolnego zapytania SQL na Twojej bazie danych. Aby tego uniknąć, powinieneś zabezpieczyć wartość tego parametru. Dzięki bindParam(), operacja zabezpieczenia wykona się automatycznie:
```php
<?php
$pdo = new PDO('sqlite:users.db');
$stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT); //<-- Automatyczne zabezpieczenie wartości parametru
$stmt->execute();
```
To jest poprawny kod. PDO przy użyciu metody bindParam() zabezpiecza w odpowiedni wartość parametru uniemożliwiając wykonanie ataku SQL injection.

