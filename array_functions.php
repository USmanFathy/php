<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
$list = [333,34,666,7768,86666666];     

    echo max($list); // max value in array
    echo '<br>';
    echo min($list);
    echo '<br>';
    sort($list);
    print_r($list);
?>

</body>
</html>