<?php 
include "db.php";


//    if($connection){
//        echo "connected";
//    } check connection
function createdata(){
    global $connection;
if(isset($_POST['submit'])){
    
$username =$_POST['username'];
$password =$_POST['password'];
    
//    if($username && $password){
//         
//    }
//}
$username = mysqli_real_escape_string($connection , $username);
$password= mysqli_real_escape_string($connection , $password);

$connection = mysqli_connect('localhost', 'root' ,'' ,'loginapp');

//    if($connection){
//        echo "connected";
//    } check connection
$hashformat = "$2y$10$";
$salt = "iusesomecarzystrings22";
$hash_and_salt = $hashformat.$salt;
$password =crypt($password , $hash_and_salt);
    $query = "INSERT INTO users(name,password) ";
    $query .="VALUES ('$username' , '$password')";
    
    $result =mysqli_query($connection , $query);
    
    if(!$result){
        die('query failed' . mysqli_error()); 
    }
}
}
function showdata(){
    
    global $connection;
     $query = "SELECT * FROM users";
 
    
    $result =mysqli_query($connection , $query);
    
    if(!$result){
        die('query failed' . mysqli_error()); 
    };
    while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
                        
     echo "<option value='$id'>$id</option>";
  };

    }

function updatedata(){
    global $connection;
    if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id       = $_POST['id'];
    
    $query  = "UPDATE users SET ";
    $query .= "name = '$username',";
    $query .= "password = '$password'";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection , $query);
    if(!$result){
            die('Query Failed' . mysqli_error($connection));
        }
}

}


function deletedata(){
    global $connection;
    if(isset($_POST['submit'])){
    
    $id       = $_POST['id'];
    
    $query  = "DELETE FROM users ";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection , $query);
    if(!$result){
            die('Query Failed' . mysqli_error($connection));
        }
}

}

function read(){
    
    global $connection;
    $query = "SELECT * FROM users";
 
    
    $result =mysqli_query($connection , $query);
    
    if(!$result){
        die('query failed' . mysqli_error()); 
    }
            
     while($row =mysqli_fetch_assoc($result)){
       
            print_r($row); //print data with labels
         //         while($row =mysqli_fetch_row($result)){
//            print_r($row); print data with index number
         
        }
}
?>