<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays Associate</title>
</head>
<body>

<?php

// index 0 = 10 |  1 = 20 | 3 = 49
$number = array('Ali','Mohammad','Sara');
//print_r($number);
//echo $number[2]. "<br>";

echo "<br>";

// first_name is a Label instead of index
$names = array( "first_name" => 'David', "last_name" => 'Seyedi' );
//print_r($names);

echo $names['first_name'] . " " . $names['last_name'];

?>


</body>
</html>