<?php

session_start();
include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

        $user = $_POST['username'];
        $pwd = $_POST['pass'];

        $sql = " SELECT `fullname` FROM `user_registration` WHERE `email`='".$user."' && `password`='".$pwd."' ";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row["fullname"];
            $_SESSION['user_mail'] = $user;

            header('Location: employee-homepage.php');

        }else {

            header("Location: login.php");
        }    

}

if(isset($_SESSION['logout']))
{

    session_destroy();
    header("Location: index.php");

}

?>

