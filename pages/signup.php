<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login and Sign Up form | By Code Info</title>
    <link rel="stylesheet" href="../css/signup.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
    <!-- <img src ="../images/hotel 4.jpg" alt=""> -->
    <div class="wrapper">
    <section class="signup-form">
        <h1>Sign Up</h1>
        <form action="../includes/signup.inc.php" method="post" required>
            <input type="text" name="firstName" placeholder="Fist Name..." required>
            <input type="text" name="LastName" placeholder="Last Name..." required>
            <input type="text" name="username" placeholder="Username..." required>
            <input type="email" name="email" placeholder="Email..." required>
            
      <div class="pass-field">
        <input type="password" name="password" placeholder="Password" >
        <i class="fa-solid fa-eye"></i>
      </div>
      <div class="wrapper1">
      <div class="content">
        <p>Password must contains</p>
        <ul class="requirement-list">
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>At least 8 characters length</span>
          </li>
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>At least 1 number (0...9)</span>
          </li>
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>At least 1 lowercase letter (a...z)</span>
          </li>
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>At least 1 special symbol (!...$)</span>
          </li>
          <li>
            <i class="fa-solid fa-circle"></i>
            <span>At least 1 uppercase letter (A...Z)</span>
          </li>
        </ul>
      </div>
            <div class="terms">
                <input type="checkbox" id="checkbox">
                <label for="checkbox"> &nbsp &nbsp I agree to these <a href="../images/t&c.pdf" target="_blank">Terms & Conditions</a></label>
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
            if (isset($_GET["error"])){
                if($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Choose a proper username!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email!</p>";
                }
                else if ($_GET["error"] == "passworddontmatch") {
                    echo "<p>Passwords don't match!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, try again!</p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username already taken!</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
        ?>
    </section>
        <div class="member">
            Already a member? <a href="./login.php">
                Login here
            </a>
        </div>
        <div>
        <center><p>or continue with</p>
            <div class="icons">
              <a href="#"><i class="fa fa-brands fa-apple" id="apple"></i></a>
              <a href="#"><i class="fa fa-brands fa-facebook-f" id="fb"></i></a>
              <a href="#"><i class="fa fa-brands fa-google" id="google"></i></a>
            </div></center>
    </div>
    
    </div>
    
    
<script src="../../Test/js/signup.js"></script>
</body>
</html>