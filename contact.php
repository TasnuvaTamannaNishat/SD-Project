
<?php
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

            $insert = "INSERT INTO contact_form (firstname,lastname,email,phone,message) VALUES ('$firstname','$lastname','$email','$phone','$message')";
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
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link rel="stylesheet" href="css/contact.css" />
 
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Libre+Baskerville&family=Poppins&family=Raleway:ital,wght@0,500;1,200&family=Roboto+Mono&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
<section class="header">

   <a href="home.php" class="logo">Travelsphere</a>

   <nav class="navbar">
   <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book now</a>
      <a href="login.php">Log in</a>
      <a href="contact.php">Contact Us</a>
      
    
   </nav>

  <div id="menu-btn" class="fas fa-bars"></div>


</section>
    <div class="container">

        <div class="row">
            <div class="col-md-6 image-container">

                <div class="icon-contain my-3 py-5">
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Mada Center 8th Floor,379 Hudson<br>
                            St. New York, NY10018 US</p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Lets Talk</h3>
                            <p>+1 800 1236879</p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>contact@email.com</p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-6 form-container">
            <div class="message">
                Send Message
            </div>

            <form action="" method="POST">
                <div class="field name-container">
                    <label for="first-name">Tell Us Your Name *</label>
                    <div class="field-name">
                        <input type="text" id="first-name" name="firstname" value=""
                            class="form-control first-name" placeholder="First Name" required />
                        <input type="text" id="last-name" name="lastname" value=""
                            class="form-control last-name" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="field">
                    <label for="email">Enter Your Email*</label>
                    <input type="email" id="email" name="email" value="" class="form-control"
                        placeholder="Eg. example@gmail.com" required />
                </div>
                <div class="field">
                    <label for="phone">Phone Number</label>
                    <input type="number" id="phone" name="phone" value="" class="form-control"
                        placeholder="Eg. +18000 258400"  />
                </div>
                <div class="field">
                    <label for="textarea">Message<span class="required-mark">*</span></label>
                    <textarea id="textarea" rows="4" class="form-control textarea" name="message"
                        placeholder="Enter your message here..." required></textarea>
                </div>
                <div class="field">
                    <input type="submit" class="button" name="submit"  value="Send Message" />
                </div>
            </form>
        </div>
    </div>

    <section class="footer">

<div class="box-container">

   <div class="box ">
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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

   
</body>

</html>