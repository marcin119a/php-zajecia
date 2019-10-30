<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    echo 'Connected failure<br>';
}
echo 'Connected successfully<br>';
mysqli_select_db( $conn, 'TUTORIALS' );


mysqli_close($conn);

