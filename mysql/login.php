<?php

if(isset($_POST['submit'])){


    $username = $_POST['username'];
    $pass = $_POST['password'];

    $connection = mysqli_connect('localhost','root','D@wid1209','loginapp');
    if ($connection){
            echo "we are connected";
    }else{
        die("Database connection faild!");
    }





//
//    if ($username && $pass){
//        echo $username;
//        echo $pass;
//    }else{
//        echo "This field cannot be Blank";
//    }

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>

</div>


</body>
</html>