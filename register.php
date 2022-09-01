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
        <forma ction="" method="" class="login-email">
            <p class="login-text" > Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email"  name="email" required>
            </div>
            <div class="input-group">
                <input type="Password" placeholder="Password"  name="password" required>
            </div> 

            <div class="input-group">
                <input type="Password" placeholder=" Confirm Password"   name="cpassword"  required>
            </div>
            <select class="input-group" class="user" name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>

            </select> 
            <div class="input-group">
            <p class="btn"><a href="package.php">Register </a></p>
            </div> 

            <p class="login-register-text">Have an account?<a href="login.php"> Login Here</a></p>

</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>