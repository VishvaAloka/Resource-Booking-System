<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer&header.css">

</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img class="logomain" src="../images/logomain.png">
        </div>
        <div class="menu">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./dining.php">Dining</a></li>
                <li><a href="./accommodation.php">Accomodation</a></li>
                <li><a href="./wedding&event.php">Wedding & Events</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li><a href="./facilities.php">Facilities</a></li>
                <li><a href="./travelguide.php">Travel Guide</a></li>
                <li><a href="./checkavailability.php">Check Availability</a></li>

            </ul>
        </div>
        <div class="signup">
            <?php
            if(isset($_SESSION['username'])){
            echo "<a href='../../backend/dbh.logout.php'> Logout </a>";
            }

            else {
            echo "<a href='../pages/login.php'> Log in </a>";
            echo "<a href='../pages/signup.php'> Signup </a>";
            }
            ?>
        </div>
    </div>
</body>

</html>