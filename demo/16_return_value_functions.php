<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Value Functions</title>
</head>
<body>

<?php

function addNumber($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}
$result = addNumber(34,64); // return value of $sum in $result
echo $result;
echo '<br>';
$result = addNumber(100,$result);
echo $result;


?>



</body>
</html>