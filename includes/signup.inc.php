<?php
    include './dbh.inc.php';

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['LastName'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once '../../frontend/includes/functions.inc.php';

        if(emptyInputSignup($firstName, $lastName,$username, $email, $password) !== false){
            header('location: ../pages/signup.php?error=emptyinput');
            exit();
        }

        if(invalidUsername($username) !== false){
            header('location: ../pages/signup.php?error=invalidusername');
            exit();
        }

        if(invalidEmail($email) !== false){
            header('location: ../pages/signup.php?error=invalidemail');
            exit();
        }

        if(usernameExists($conn, $username) !== false){
            header('location: ../pages/signup.php?error=usernametaken');
            exit();
        }

        if(emailExists($conn, $email) !== false){
            header('location: ../pages/signup.php?error=emailtaken');
            exit();
        }

        createUser($conn, $firstName, $lastName, $username, $email, $password);
    }
    else{
        echo "Data not inserted";
        header('location: ../pages/signup.php');
        exit();
    }
?>

