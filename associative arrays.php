<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
    //regular arrays
    $number = array ('usman' , 'rawan');
    print_r($number);
    
    echo "<br>";
    
    /* associative arrays order data by labels like it
    order usman by firstname 
    */
    $names = array('first_name'=>'usman');
    
    print_r($names); 
    
    echo "<br>";

    echo $names['first_name'];
    
    echo "<br>";

    $names2 = array('first_name'=>'usman' , 'relation' => 'love' , 'seconed_name' => 'rawan');
    
    print_r($names2); 
    
    echo "<br>";

    echo $names2['first_name'];
    echo "<br>";
    echo $names2['relation'];
    echo "<br>";
    echo $names2['seconed_name'];
    
    
    
    
?>
</body>
</html>