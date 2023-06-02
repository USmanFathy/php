<?php

if (isset($_POST['submit'])){
    
    $minimun = 5;
    $name = array('edwin' , 'student');
$user_name = $_POST['name'];
$password  = $_POST['password'];
    if(strlen($user_name) < $minimun){
        echo "username has to be longer than five";
        
    }
    
    
    if(in_array($user_name , $name)){
        echo "got it";
    }
}

//echo $user_name .' ';
//echo $password ;
?>