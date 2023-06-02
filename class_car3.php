<?php

class Car{
    var $wheels =4;
    var $hood =1;
    var $engine = 1;
    var $doors = 4;
    function movewheels(){
//        echo "wheels move" ."<br>";
        $this -> wheels =10; //$this mention to self
    }
    
}

$bmw = new Car(); 
$bmw -> doors =6; //change propertis of class
echo $bmw->doors."<br>";
$bmw ->movewheels(); 
echo $bmw->wheels;

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