<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tutorials';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
    die('Could not connect: ' . mysqli_error($conn));
}
echo 'Connected successfully<br>';
$sql = 'SELECT * from tutorials';
$result = mysqli_query($conn, $sql);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
}
mysqli_close($conn);