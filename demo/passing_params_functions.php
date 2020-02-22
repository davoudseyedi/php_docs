<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passing Parameters in  Functions</title>
</head>
<body>

<?php


function greeting($message){
    echo $message;
}
greeting('Hello world');

echo "<br>";

function mulNumber($num1, $num2){

    $mul = $num1 * $num2;
    echo $mul;
}
mulNumber(20, 534);



?>



</body>
</html>