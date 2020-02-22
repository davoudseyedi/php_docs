
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