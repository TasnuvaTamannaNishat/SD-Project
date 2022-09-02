<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['submit'])){
  
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    
    $pass=md5($_POST['password']);
    
   
   
    
    $select="SELECT * FROM user_form WHERE email='$email' && password='$pass' ";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        $_SESSION['auth']=true;
        $row=mysqli_fetch_array($result);
        $username=$userdata['name'];
        $useremail=$userdata['email'];


        $_SESSION['auth_user']=[
            'name'=>$username,
            'email'=>$useremail
          

        ];
     
        if($row['user_type']=='admin'){
           
            $_SESSION['message']="logged in successfully";
            ?>
           

            <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            </div>

            header('location:dashboard.php');
            <?php
        }
        else if($row['user_type']=='user'){
           
            $_SESSION['message']="logged in successfully";
            header('location:home.php');
        }
       
     
        
     
    }
    else{
        $error[]='incorrect email or password';
    }
           

};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/design2.css">
</head>
<body>

    <div class="container">
        <form action="" method="post" class="login-email">
        <p>Login</p>
        <?php  
        if(isset( $_SESSION['message']))
        {  
             ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?=$_SESSION['message']; ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php

            unset($_SESSION['message']);
        };
         ?>
            <div class="input-group"> 
                <input type="email"   pattern=".+@gmail\.com"  placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="Password" placeholder="Password"   name="password"  required>
            </div>
            <div class="input-group">
                <input type ="submit" name="submit"  value="Login" class="btn">
           
            </div> 
            <p class="login-register-text">Don't have an account?<a href="register.php"> Register Here</a></p>

           
            
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>