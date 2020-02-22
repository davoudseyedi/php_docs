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


Class Plane extends Car {
    var $wheels = 20;

}
$jet = new Plane();
echo $jet->wheels;
//if(class_exists("Plane")){
//    echo "it does";
//}



?>