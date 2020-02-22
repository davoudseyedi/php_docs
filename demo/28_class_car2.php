<?php
class Car {

    //method 01
    function MoveWheels(){

        echo "Wheels move.";

    }


}

//if(class_exists("Car")){
//    echo "Yeeeeeeeeeeeeeeeyyyy Nice";
//}else{
//    echo "no";
//}
//
//


if(method_exists("Car","MoveWheels")){
    echo "THe Method exists";

}else{
    echo "no";
}












?>