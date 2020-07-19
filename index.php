<?php
//include('config.php');
define('BIRD', 'Dodo bird');
define('users', 'yoyo');
define('stack', 'stack');


// Parse without sections
//$ini_array = parse_ini_file("sample.ini");
//print_r($ini_array);
echo "<br>";

// Parse with sections
$ini_array = parse_ini_file("sample.ini", true);
print_r($ini_array);
echo "<br>";


?>
