<?php
print_r($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get</title>
</head>
<body>

<?php
$id = 10;
$button = "Click Here Now";
?>

<a href="22_get.php?id=<?php echo  $id; ?>"><?php echo $button; ?></a>



</body>
</html>