<?php

session_start();
include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

        $user = $_POST['username'];
        $pwd = $_POST['pass'];

        $sql = " SELECT `c_name` FROM `company_reg` WHERE `c_email`='".$user."' && `c_password`='".$pwd."' ";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['companyname'] = $row["c_name"];
            $_SESSION['companyemail'] = $row["c_email"];

            header('Location: Company/company-home-page.php');

        }else {

            header("Location: login-company.php");
        }    

}

?>

