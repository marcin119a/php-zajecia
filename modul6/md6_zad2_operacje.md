### Pierwszy SELECT do bazy danych: 

Po nawiązaniu połączenia z serwerem MySQLi, należy wybrać konkretną bazę danych, z którą będziemy pracować. Wynika to z faktu, że z serwerem MySQLi może być dostępnych więcej niż jedna baza danych.
### Problem
Chcemy się połączyć z bazą danych. 

### Rozwiązanie:


```php
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    echo 'Connected failure<br>';
}
echo 'Connected successfully<br>';
mysqli_select_db($conn, 'TUTORIALS' );

//Write some code here
mysqli_close($conn);
```

### Problem 

Chcemy wyświetlić wszystkie rekordy z tabeli ```TUTORIALS```.

```php
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'TUTORIALS';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   echo 'Connected successfully<br>';
   $sql = 'SELECT * from users';
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
         echo "Name: " . $row["name"]. "<br>";
      }
   } else {
      echo "0 results";
   }
   mysqli_close($conn);
?>
```