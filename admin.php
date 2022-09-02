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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link type="text/css" rel="stylesheet" href="css/design3.css">


   
  

</head>
<body>
<section class="header">
<div class="flex">
   <a href="dashboard.php" class="logo">Admin Panel</a>

   <nav class="navbar">
   <a href="dashboard.php">Home</a>
      <a href="admin_packages.php">Packages</a>
      <a href="admin_bookings.php">Bookings</a>
      <a href="users.php">users</a>
      <a href="admin.php">Admins</a>
      <a href="messages.php">Messages</a>
     
   </nav>
</div>

  

</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Admins

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * from user_form where user_type='admin'";
                        $query_run=mysqli_query($conn,$query);
                        if(mysqli_num_rows($query_run)>0)
                        {
                            foreach($query_run as $item)
                            {
                                ?>
                                 <tr>
                            <td><?= $item['id']?></td>
                            <td><?= $item['name']?></td>
                            
                             <td><?= $item['email']?></td>
                             <td><?= $item['password']?></td>
                             
                            </tr>


                                <?php
                            }

                        }
                        else{
                            echo"no records found";
                        }



                        ?>
                       

                    </tbody>
                    </table>
                </div>
             </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>