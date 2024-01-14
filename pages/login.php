<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login and Sign Up form | By Code Info</title>
    <link rel="stylesheet" href="../css/login.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- <img src ="../images/hotel 1.jpg" alt=""> -->
    <div class="wrapper">
        <h1>Login</h1>
        <form action="../includes/login.inc.php" method="post" >
            <input type="text" name="uid" placeholder="Username" required>
            <input type="password"  name="pwd" placeholder="Password" required>
            <div class="recover">
            <button type="submit" name="submit">Sign in</button>
        </form>
      
                
        <div class="member"><center>
            Not a member? <a href="http://localhost/BOOKME/frontend/pages/signup.php">
                Register Now
            </a>
            </center>
        </div> 
        <div>
            <center><p>or continue with</p>
            <div class="icons">
              <a href="https://www.apple.com/"><i class="fa fa-brands fa-apple" id="apple"></i></a>
              <a href="https://www.facebook.com/"><i class="fa fa-brands fa-facebook-f" id="fb"></i></a>
              <a href="https://www.google.com/"><i class="fa fa-brands fa-google" id="google"></i></a>
            </div></center>
        </div>

    </div> 
</body>
</html>
