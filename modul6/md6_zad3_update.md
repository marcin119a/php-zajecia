```php
<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'tutorials';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   echo 'Connected successfully<br>';
   $sql = ' UPDATE tutorials_inf SET name="althamas" WHERE name="ram"';
   
   if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>
```