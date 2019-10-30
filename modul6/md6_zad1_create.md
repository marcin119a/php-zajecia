### Tworzenie tabeli 

### Problem

Chcemy stworzyć tabelę w SQL. 

```php
<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

 if(! $conn ){
    echo 'Connected failure<br>';
 }
 echo 'Connected successfully<br>';
 $sql = "CREATE DATABASE tutorials";
 
 if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
 } else {
    echo "Error creating database: " . mysqli_error($conn);
 }
 mysqli_close($conn);

```
### Analiza
Do utworzenia lub usunięcia bazy danych MySQLi potrzebne są specjalne uprawnienia. Zakładając, że masz dostęp do użytkownika root, możesz utworzyć dowolną bazę danych używając mysql mysqladmin binary.


### Problem
Chcemy stworzyć tabele:
```php
<?php  
 $host = 'localhost';  
 $user = 'root';  
 $pass = '';  
 $dbname = 'tutorials';  
 $conn = mysqli_connect($host, $user, $pass,$dbname);  
 
 if(!$conn){  
    die('Could not connect: '.mysqli_connect_error());  
 }  
 echo 'Connected successfully<br/>';  

 $sql = "create table users(
    id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL,primary key (id))";  
 
 if(mysqli_query($conn, $sql)){  
 echo "Table created successfully";  
 } else {  
    echo "Table is not created successfully ";  
 }  
 mysqli_close($conn);  
?>  
```


