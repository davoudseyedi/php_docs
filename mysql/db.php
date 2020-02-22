<?php
$connection = mysqli_connect("localhost","root","","loginapp"); //connect to DB
if (!$connection){ // now check DB
      die("Database connection faild!");
}
?>