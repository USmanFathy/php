<?php

class Car{
    var $wheels =4;
    var $hood =1;
    var $engine = 1;
    var $doors = 4;
    function __construct(){ //constructors command
//        echo "wheels move" ."<br>";
       echo $this -> wheels =10 .'<br>'; //$this mention to self
    }
    
}



$bwm = new Car();
$air = new Car();



//$bmw = new Car(); 
//$bmw -> doors =6; //change propertis of class
//echo $bmw->doors."<br>";
//$bmw ->movewheels(); 
//echo $bmw->wheels;

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