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
        $roww=mysqli_fetch_assoc($result);
        $username=$row['name'];
        $useremail=$row['email'];
        $_SESSION['user_id'] = $roww['id'];
      
         $verified=$row['verified'];
         $user_type=$row['user_type'];



        $_SESSION['auth_user']=[
            'name'=>$username,
            'email'=>$useremail
          

        ];
        
            if($verified==1)
            {
                
                if($user_type =='user')
                {
                echo  "<script>
                alert('logged in successfully');
                window.location.href='home.php';
        
                
                </script>";
                            
                
                }
                
                elseif($row['user_type']=='admin')
                {
                    
                    echo  "<script>
                    alert('logged in successfully');
                    window.location.href='dashboard.php';
            
                    
                    </script>";       
                
                }
                    
            
            }
            else{
                echo  "<script>
            alert('account yet not verified');
            window.location.href='login.php';
    
            
            </script>";
            }

        }   
        
     
       
       
     
        
     
    }
    else{
        $error[]='incorrect email or password';
    }
           




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