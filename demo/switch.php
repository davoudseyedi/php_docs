<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch</title>
</head>
<body>

<?php
$number = 100;

switch ($number){ // one single Condition


    case 34:
        echo "is it 34";
        break;
    case 37:
        echo "is it 37";
        break;
    case 35:
        echo "is it 35";
        break;
    case 24:
        echo "is it 24";
        break;

    default: // if anything not found
        echo "we could not find anything";
        break;

}

?>



</body>
</html>