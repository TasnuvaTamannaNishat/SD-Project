<?php
session_start();


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
<div class="container">
   <div class="row">
   <div class="col-md-12">  


<?php  

         if(isset($_SESSION['auth']))
        
         {  
              ?>
            <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="d-flex">
                  <div class="toast-body">
                  Hello, world! This is a toast message.
                  </div>
                  <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
            </div>
            <?php
         };
          ?>
           </div>
         </div>
         </div>

<section class="header">

   <a href="home.php" class="logo">Travelsphere</a>

   <nav class="navbar">
   <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book now</a>
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

<!-- header  -->
<!-- home section starts  -->


<section class="home" id="home">

    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
     
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
     
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>


<!-- home section ends -->
<!-- service -->

<section class="services">

   <h2 class="heading-title"> our exciting events</h2>

   <div class="box-container">

      <div class="box">
         <img src="images/adventure.jpg" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/tourguide.jpg" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/glidding.jpg" alt="">
         <h3>glidding</h3>
      </div>

      <div class="box">
         <img src="images/campfire.jpg" alt="">
         <h3>camp fire</h3>
      </div>

     

      <div class="box">
         <img src="images/camping.jpg" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- service -->



<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Travel is the main thing you purchase that makes you more extravagant”. We, at ‘Travelsphere’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly.<br>
      We’re a worker-claimed travel organization secured by our qualities, trustworthiness, and commitment to client benefit.<br>
      We offer the best limits on our top-rated visit bundles to clients who pick our viable administrations over and over. How about we remind you indeed that we don’t expect to be your visit and travel specialists; we endeavor to be your vacation accomplices until the end of time.
      </p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

<h1 class="head">
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>


   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/pack4.webp" alt="">
         </div>
         <div class="content">
            <h3>Roam Around The World</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="login.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pack2.webp" alt="">
         </div>
         <div class="content">
            <h3>Roam Around The World</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="login.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/pack3.webp" alt="">
         </div>
         <div class="content">
            <h3>Roam Around The World</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="login.php" class="btn">book now</a>
         </div>
      </div>
     

   </div>

   <div class="load-more"> <a href="package.php" class="btn">See more</a> </div>

</section>

<!-- home packages section ends -->
<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 30% off</h3>
      <p>Book your package now get upto 30% discout and many more exciting offers.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

<!-- footer  -->

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









</html>