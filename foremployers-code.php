<?php

include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

    $cname = $_POST['company_name'];
    $regno = $_POST['regno'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $des = $_POST['des'];
    $openhrs = $_POST['openhrs'];
    $hrspay = $_POST['hrspay'];
    $jobtypes = $_POST['jobtypes'];
    $pass = $_POST['password'];
    $conpass = $_POST['confirmpassword'];

    if($pass===$conpass)
    {

        $sql = " INSERT INTO `company_reg` 
        (`c_name`, `reg_no`, `c_address`, `location`, `c_contact_no`, `c_email`, `c_description`, `openhrs`, `hrspay`, `c_password`, `job_type`, `addeddate`) 
        VALUES ('".$cname."', '".$regno."', '".$address."', '".$location."', '".$contact."', '".$email."', '".$des."', '".$openhrs."', '".$hrspay."', '".$pass."', '".$jobtypes."', CURRENT_TIMESTAMP); ";
        $query = mysqli_query($connection ,$sql);

        header('Location: foremployers.php');

    }else {

        echo 'Password does not matched';

    }
    
}

?>