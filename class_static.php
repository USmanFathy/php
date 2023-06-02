<?php

class Car{

    static $wheels = 1;
    var $doors = 4;
    function movewheels(){
//        echo "wheels move" ."<br>";
       Car ::$wheels =10; //$this mention to self
    }
    
}

$bmw = new Car(); 

echo Car ::$wheels;
//$mercedes_benz = new Car();
//
//$bmw->movewheels();
//$mercedes_benz->movewheels();


//if(method_exists("Car" ,'movewheels')){
//    echo "yesss";
//} // check method



//
//if(class_exists("Car")){
//    echo "yesss";
//} 

// check if class is exist


?>