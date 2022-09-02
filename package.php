<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);
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
      <a href="book.php">book now</a>
     
      <a href="contact.php">Contact Us</a>
      <a href="contact.php">Contact Us</a><?php
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

<div class="heading" style="background:url(images/pf.jpg) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">


<h1 class="heading-title">destinations</h1>
    
<?php

?>
   
   

</section>

<!-- packages section ends -->



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


