<?php
$connection = mysqli_connect("localhost","root","D@wid1209","loginapp"); //connect to DB
if (!$connection){ // now check DB
      die("Database connection faild!");
}
?>