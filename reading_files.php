<?php




$file = "example.txt";

if ($handle =fopen($file ,'r') ){ // r to read 
    
   $content = fread($handle,filesize($file) ); //read file take file and bites to show ever character equal bite if you want show all file use filesize function
    
    echo $content;
    
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