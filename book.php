<?php

session_start();

$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];
    
    
    
            $insert = "INSERT INTO book_form (name,email,phone,address,location,guests,arrivals,leaving) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
            mysqli_query($conn,$insert);
            header('location:login.php');

        } 
      else
         {     
            echo'something went wrong try again';

      }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
   <link rel="stylesheet" href="css/design.css">

</head>
<body>
   
<!-- header  -->

<section class="header">

   <a href="home.php" class="logo">Travelsphere</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book now

   

      </a>

   
      <a href="contact.php">Contact Us</a>
      <?php
      if(isset($_SESSION['auth']))
      {
         ?>
         
          <a href="logout.php">LogOut</a>
          <a href="profile.php">MyProfile</a>



         <?php


      }
      else{
         ?> 

         <a href="login.php">Log in</a>
         <?php
      }
      
      ?>
       
    
   </nav>

  <div id="menu-btn" class="fas fa-bars"></div>


</section>

<div class="heading" style="background:url(images/book.webp) no-repeat">
  
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Booking Agreement</h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name"  required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" pattern=".+@gmail\.com"  placeholder="enter your email" name="email"  required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="tel"  pattern="^(?:\+?88)?01[13-9]\d{8}" placeholder="enter your number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <select class="input-group" class="user" name="user_type">
            <link rel="stylesheet" href="css/design.css">
                <option>Select any option</option>
                <?php
                $query="select * from packages";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){

                  while($row=mysqli_fetch_array($result)){?>
                   
                     <option><?php echo $row['place'] ?></option>;
                   
<?php
            
                  
                }
               }


              ?>
            </select> 
    
      </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required>
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->



   
<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>More</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      
      <div class="box">
         <h3>follow us on </h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> Designed by <span>Tasnuva Tamanna Nishat & Isfara Islam Roza</span> | all rights are reserved to the owners!! </div>

</section>


<!--footer-->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>


</body>
</html>