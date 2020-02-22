<?php

// Class
class Car {
    static $wheels = 4; // var means variable
    var $hood = 1;

    //method 01
    function MoveWheels(){

     Car::$wheels = 10;

    }
}

$bmw = new Car(); // Create an Object

//$bmw->wheels;
Car::MoveWheels();
echo  Car::$wheels;




?>