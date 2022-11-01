<?php

include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

    $fullname = $_POST['fullname'];
    $nic = $_POST['nic'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $conpass = $_POST['confirmpassword'];
    $income = $_POST['income'];

    if($password===$conpass)
    {

        $sql = " INSERT INTO `user_registration` 
        ( `fullname`, `nic`, `gender`, `address`, `email`, `contact`, `password`,`income`, `addeddate`) 
        VALUES ( '".$fullname."', '".$nic."', '".$gender."', '".$address."', '".$email."', '".$contact."', '".$password."','".$income."', CURRENT_TIMESTAMP); ";
        $query = mysqli_query($connection ,$sql);

        header('Location: signin.php');

    }else {

        echo 'Password is not matched';

    }
    
}

?>