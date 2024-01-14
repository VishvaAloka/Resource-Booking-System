<?php
  include '../config/config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/showuser.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../js/script.js" defer></script>
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../images/RentMate.png" alt="logo">
                </span>
                <div class="div text header-text">
                    <span class="name">Administrator </span>
                    <div class="profession">Main Dashboard</div>
                </div>
            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-links active">
                        <a href="../index.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="../pages/showuser.php">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">User Management</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="../pages/showuser.php">
                            <i class='bx bxl-paypal icon'></i>
                            <span class="text nav-text">Bookings</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="../pages/showuser.php">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">Resources</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="../pages/showuser.php">
                            <i class='bx bxs-phone-incoming icon'></i>
                            <span class="text nav-text">Income</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="../pages/showuser.php">
                            <i class='bx bxs-calendar icon'></i>
                            <span class="text nav-text">Calender</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="../pages/showuser.php">
                            <i class='bx bxs-user-account icon' ></i>
                            <span class="text nav-text">Accounts</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="../pages/showuser.php">
                            <i class='bx bx-male-female icon'></i>
                            <span class="text nav-text">Employee</span>
                        </a>
                    </li>

                    <li class="nav-links">
                        <a href="#">
                            <i class='bx bxl-paypal icon'></i>
                            <span class="text nav-text">Transactions</span>
                        </a>
                    </li>

                    <div class="bottom-content">
                        <li class="">
                        <a href="../../../backend/dbh.logout.admin.php">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>

                        <li class="mode">
                            <div class="moon-sun">88
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Dark Mode</span>
                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>5550
                        </li>
                    </div>
            </div>
    </nav>

    <section class="content-area">
        <div class="tab-name">Dashboard</div>
        <div class="content">
        <div class="title">
            <h2>User's information</h2>
        </div>
        <div class="add-btn">
            <button><a href="./adduser.php">Add User</a></button>
        </div>
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM users;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['userID'];
                            echo "
                                <tr>
                                    <td>".$row['firstName']."</td>
                                    <td>".$row['lastName']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['email']."</td>
                                  
                                    <td>
                                        <button class='del-btn'><a href='http://localhost/BOOKME/backend/dbh.updateuser.php?updateuser=".$id."'>Update</a></button>
                                        &nbsp
                                        <button class='del-btn'><a href='http://localhost/BOOKME/backend/dbh.deleteuser.php?deleteuser=".$id."'>Delete</a></button>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                ?>

            </table>
        </div>
    </div>
        </div>
    </section>


</body>

</html>