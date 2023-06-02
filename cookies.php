<?php 
$name = 'rawan';
$value = 10000;
$expiration = time() + (60*60*24*7); //for week
setcookie($name , $value , $expiration); //set cookies 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_COOKIE['rawan'])){
    $someone = $_COOKIE['rawan'];
    echo $someone ;
}else{
    $someone ="";
}
?>
</body>
</html> 