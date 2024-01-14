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
    <link rel="stylesheet" href="../css/adduser.css">
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
                        <a href="./showuser.php">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">User Management</span>
                        </a>
                    </li>
                    <div class="bottom-content">
                        <li class="">
                            <a href="#">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>

                        <li class="mode">
                            <div class="moon-sun">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Dark Mode</span>
                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li>
                    </div>
            </div>
    </nav>

    <section class="content-area">
        <div class="tab-name">Dashboard</div>
        <div class="content">
            <div class="title">
                <h2>Add Users</h2>
            </div>
            <form action="../../../backend/dbh.adduser.php" class="form-group" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label>Enter First Name</label>
                    <input type="text" name="fname" required>
                </div>
                <div class="input-group">
                    <label>Enter Last Name</label>
                    <input type="text" name="lname" required>
                </div>
                <div class="input-group">
                    <label>Enter Username</label>
                    <input type="text" name="uname">
                </div>
                <div class="input-group">
                    <label>Enter Email</label>
                    <input type="text" name="email" required>
                </div>
                <div class="input-group">
                    <label>Enter Password</label>
                    <input type="text" name="pwd">
                </div>
                <input type="submit" name="submit" value="Add user" class="btn">
            </form>

        </div>
        </div>
    </section>


</body>

</html>