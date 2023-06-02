<?php




$file = "example.txt";

if ($handle =fopen($file ,'w') ){
    
for($counter = 0 ; $counter<10 ;   $counter++ ){
    
   fwrite($handle ,'try loop'); 
 
}
   //write in file
    
    
fclose($handle);
}else{
    echo "the application was not able to write";
}

//to deal with filles add to parameters 1- file name 2- method 

//to close file  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>