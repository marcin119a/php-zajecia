<?php
$fp = fopen('przyklad.csv', 'r') or die("nie można otworzyć pliku");

while($csv_line = fgetcsv($fp, 1024)){
    for ($i = 0; $i < count($csv_line); $i++) {
        print($csv_line[$i]);
    }
    print("\n");
}

   $filename = "newfile.txt";
   $file = fopen( $filename, "w" );

   if( $file == false ) {
       echo ( "Error in opening new file" );
       exit();
   }
   fwrite( $file, "This is  a simple test\n" );
   fclose( $file );

?>