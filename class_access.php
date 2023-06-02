<?php

class Car{
    public $wheels =4; // public for program
    protected $hood =1; // available for inheritancr
    private $engine = 1; //available for this class
    var $doors = 4;
  
    }
    

$bwm = new Car();

echo $bwm -> wheels;



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