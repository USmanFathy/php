<?php

if(isset($_POST['submit'])){
    
$username =$_POST['username'];
$password =$_POST['password'];
    
//    if($username && $password){
//         
//    }
//}

$connection = mysqli_connect('localhost', 'root' ,'' ,'loginapp');

//    if($connection){
//        echo "connected";
//    } check connection
}
?>

<?php include 'includes/header.php'?>





<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
               <label for="username">UserName</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
               <label for="password">Password</label>

                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>


<?php include 'includes/footer.php'?>