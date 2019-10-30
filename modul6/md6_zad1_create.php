<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'tutorials');

if(!$conn){
    die('Could not connect: '.mysqli_connect_error());
}
echo 'Connected successfully<br/>';

$sql = "
create table users( id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL,primary key (id)) 
";

if(mysqli_query($conn, $sql)){
    echo "Table created successfully";
} else {
    echo "Table is not created successfully ";
}
mysqli_close($conn);
