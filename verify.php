<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);
echo "hmm";


if( isset($_GET['vkey']))
{
   

    $vkey = $_GET['vkey'];
    $query=" SELECT * from user_form  where email='$_GET[email]' AND vkey='$vkey'";
    $result=mysqli_query($conn,$query);
    
    if($result){
        if(mysqli_num_rows($result)==1)
        {
          
            $result_fetch=mysqli_fetch_array($result);
            if($result_fetch['verified']==0)
            {

                echo "li";
                $update= "UPDATE user_form SET verified = 1 WHERE  vkey='$vkey' ";
                if(mysqli_query($conn,$update))
                {
                    echo  "<script>
                alert('account is verified');
                window.location.href='login.php';
          
                
                </script>";
                }

                }
            }
            else{
                echo  "<script>
                alert('already verified');
                window.location.href='login.php';
          
                
                </script>";
            }

        }
    
    else
    {


    }

}

?>