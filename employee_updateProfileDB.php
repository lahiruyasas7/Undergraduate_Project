<?php
session_start();

include ("Database/dbconfig.php");


if(isset($_POST['update_stud_data']))
{
    $fullname = $_POST['fullname'];
    $nic = $_POST['nic'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    
    $income = $_POST['income'];
	$name = $_SESSION['username'];

    
    $query = " UPDATE `user_registration` 
	SET `fullname`='".$fullname."' ,`nic`='".$nic."' , `gender`='".$gender."' ,`address`='".$address."' , 
	`email`='".$email."' ,`contact`='".$contact."' , `password`='".$password."' ,`income`='".$income."'  
	 ";
	$query_run = mysqli_query($connection, $query);

    if($query_run)
    {
		
        $_SESSION['status'] = "Data Updated Successfully";
		header('Location: employee-updateProfille.php');
        
    }
    else
    {
		
        $_SESSION['status'] = "Not Updated";
		header('Location: employee-updateProfille.php');
        
    }
}

?>