<?php

// Class
class Car {
    var $wheels = 4; // var means variable
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    //method 01
    function MoveWheels(){

       $this->wheels = 10;

    }

    //method 02
    function CreateDoors(){

        $this->doors = 6;

    }


}

$bmw = new Car(); // Create an Object
$truck = new Car();

echo $bmw->wheels. "<br>";
echo $truck->wheels = 10 . "<br>";
$truck->CreateDoors();
echo $truck->doors;







?>