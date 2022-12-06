<?php
$msg='';
require_once("logics/dbconnection.php");

if(isset($_POST['register']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sqlun=mysqli_query($dbconnect, "SELECT * FROM account WHERE username = '$username'");
    $checkUsername=mysqli_num_rows($sqlun);

    $sqlEmail=mysqli_query($dbconnect, "SELECT * FROM account WHERE email = '$email'");
    $checkEmail = mysqli_num_rows($sqlEmail);

    if($checkUsername!=0){
        $msg = "Username already exists.";
    }
    elseif($checkEmail!=0){
        $msg = "There is an account registered with that email. Try a different email address.";
    }
    elseif($password!=$cpassword){
        $msg = "Passwords do not match.";
    }
    else{
        $sql=mysqli_query($dbconnect, "INSERT INTO account(username,email,password)VALUES('$username','$email','$password')");
    }
}
if(isset($_POST['login']))
{
    $emaillog=$_POST['email'];
    $passwordlog=$_POST['password'];

    $sqlEmaillog=mysqli_query($dbconnect, "SELECT * FROM account WHERE email= '$email'");
    $checkEmaillog=mysqli_num_rows($sqlEmaillog);


    if($checkEmaillog==0){
        $msg = "Email not found";
    }
    elseif($checkPasslog!=$password)
    {
        $msg = "Wrong password!";
    }
    else{
        header('location:index.php');
    }
    
}

?>
<html>
    <head>
    <title>Log in & Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                    <button type="button" class="toggle-btn"onclick="register()">Register</button>
                </div>
                <div class="media-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <form id="login" class="input-group" action="login.php" method="POST">
                    <input type="email" class="input-field" placeholder=" Enter your Email" name="email" required>
                    <input type="password" class="input-field" placeholder=" Enter Password" name="password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn" name="login">Log in</button>
                </form>
                <form id="register" class="input-group" action="login.php" method="POST">
                    <input type="text" class="input-field" placeholder=" Username" name="username" required>
                    <input type="email" class="input-field" placeholder=" Enter Email" name="email" required>
                    <input type="password" class="input-field" placeholder=" Enter Password" name="password" required>
                    <input type="password" class="input-field" placeholder=" Confirm Password" name="cpassword" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                    <button type="submit" class="submit-btn" name="register">Register</button>
                </form>
            </div>
                
        </div>


<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

function register()
{
    x.style.left="-400px";
    y.style.left="50px";
    z.style.left="110px";
}
function login()
{
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0";
}
</script>

</body>
</html>