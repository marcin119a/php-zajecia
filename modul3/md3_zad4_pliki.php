<?php
// If strict types are enabled i.e. declare(strict_types=1);
$file = file_get_contents('./people.txt', true);
// Otherwise
$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);


print($file);
