<?php

session_start();
if(isset($_SESSION['auth']))
{
    unset($_SESSION['auth']);
    $_SESSION['message']="Logged out Successfully";
}
  
header('location:login.php');
?>