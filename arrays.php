 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
    //old way to make array 
    $numberlist = array('usman' ,2023 , 22 );
    // new way 
//    $numberlist = [];
    
    echo $numberlist[2] ; // print 22 
    
    /* index in array start with zero 
    seconed element called by 1 
    to print array structur use fun print_r
    */
    
    print_r($numberlist);
    
    ?>

</body>
</html>