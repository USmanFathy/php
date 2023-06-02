<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
$x = 'outside'; // global scoop
    
function convert (){
    
    global $x; // convert local scoop to global scoop
    $x = 'inside'; //local
    
}
    
    echo $x;
    
    convert();
    
    echo '<br>';
    
    echo $x;

    
    
?>
</body>
</html>