
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);






//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
function sendMail($email,$vkey )
{
    require ('PHPMailer/PHPMailer.php');
require ('PHPMailer/SMTP.php');
require ('PHPMailer/Exception.php');
$mail = new PHPMailer(true);

try {
    //Server settings
                         //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tasnuvanishat163@gmail.com';                     //SMTP username
    $mail->Password   = 'xjlhingxbpopqjck';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tasnuvanishat163@gmail.com');
    $mail->addAddress($email);     //Add a recipient
    
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email verification';
    $mail->Body    = "here is the verification link <a href='http://localhost:3000/verify.php?email=$email&vkey=$vkey'>verify</a>";
    

    $mail->send();
  return true;
} catch (Exception $e) {
    return false;
}


}


if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
   
    $user_type='user';
    $vkey=md5(time().$name);
   
    echo $vkey;
    
    $select="SELECT * FROM user_form WHERE email='$email' && password='$pass' ";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        $_SESSION['message'] = 'user already exist!';
        header('location:register.php');
     
    }
    else{
        if($pass !=$cpass){
            $_SESSION['message']='password not matched';
           
        }else{
            $insert = "INSERT INTO user_form (name,email,password,user_type,vkey) VALUES ('$name','$email','$pass','$user_type','$vkey')";
            $insert_run= mysqli_query($conn,$insert);
           
        

            if($insert_run && sendMail($_POST['email'],$vkey)){
                $_SESSION['message']="registered Successfully";
                //Create an instance; passing `true` enables exceptions
                

                
                echo  "<script>
                alert('Registered successfully');
                window.location.href='login.php';
          
                
                </script>";
              
                
              
            }

        } 
    }
            

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/design2.css">
</head>
<body>
    <div class="container">
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
        <form action="" method="post" class="login-email">
            <p class="login-text" > Register</p>
            <div class="input-group">
             



                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
               
                <input type="email" pattern=".+@gmail\.com" placeholder="Email"  name="email" required>
            </div>
            <div class="input-group">
                <input type="Password" placeholder="Password"  name="password" required>
            </div> 

            <div class="input-group">
                <input type="Password" placeholder=" Confirm Password"   name="cpassword"  required>
            </div>
           
            <div class="input-group">
                <input type ="submit" name="submit"  value="Register" class="btn">
           
            </div> 

            <p class="login-register-text">Have an account?<a href="login.php"> Login Here</a></p>

</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>