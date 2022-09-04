<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);


$email=$_SESSION['user_id'] ;

$user_id=$_SESSION['user_id'] ;

if(isset($_POST['submit'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE user_form SET name = '$update_name', email = '$update_email' WHERE email='$email'") or die('query failed');

   $old_pass = $_POST['old_pass'];
  
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($new_pass) || !empty($confirm_pass)){
     
      if($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE user_form SET password = '$confirm_pass' WHERE email = '$email'") or die('query failed');
         $message[] = 'password updated successfully!';
         echo  "<script>
         alert('profile updated successfully');
         window.location.href='profile.php';
   
         
         </script>";

      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   

     <?php
     $query="SELECT * from user_form where email='$email'";
     $query_run=mysqli_query($conn,$query);
     if(mysqli_num_rows($query_run)>0)
     {
         foreach($query_run as $item)
         {
             ?>


            
             <div class="container">
    <p class="login-text" style="font-size:40px; font-style:bold ;text-align:center"> User Information</p>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">id</label>
      <input type="text" value="<?= $item['id']?>" name="id" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Name</label>

      <input type="text"  value="<?= $item['name']?>" name="update_name" class="form-control" id="exampleFormControlInput1" placeholder="">

      

    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="text"  value="<?= $item['email']?>" name="update_email" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">old password</label>
      <input type="text" value="<?= $item['password']?>" name="old_pass" class="form-control" id="exampleFormControlInput1" placeholder=" old password">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">new password</label>
      <input type="text" name="new_pass" class="form-control" id="exampleFormControlInput1" placeholder="new password">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">confirm password</label>
      <input type="text" name="confirm_pass" class="form-control" id="exampleFormControlInput1" placeholder="confirm password">
    </div>

    <div class="mb-3">
    <button type="submit"class= "btn btn-primary" name="submit">Update</button>
    </div>

     
    </form>
</div>




<?php
         }
        }
    


?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>