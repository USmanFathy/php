<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
function add($num1 , $num2){
    
    $sum = $num1 + $num2;
    return $sum;
}
    

    $result = add(400,500);
    $result = add(39889 , $result);
echo $result;
?>
</body>
</html>