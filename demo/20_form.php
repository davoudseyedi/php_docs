<?php

    if(isset($_POST['submit'])){
        $name = array("David", "Student","Peter","Samid", "Sarah", "Jane", "Tom");
        $min = 5;
        $max = 10;
      $username =   $_POST['username'];
      $password =   $_POST['password'];


      if(strlen($username) < $min ){

            echo "Username has to be longer than five";
      }
        if(strlen($username) > $max ){

            echo "Username cannot be longer than 10";
        }

        if(!in_array($username,$name)){
            echo "Sorry you are not allowed";
        }else{
            echo "Welcome";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="20_form.php" method="post">

    <input type="text" name="username" placeholder="Enter Username" >
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">

</form>




</body>
</html>