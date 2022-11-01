<?php
session_start();

include ("Database/dbconfig.php");


if(isset($_POST['update_stud_data']))
{
		$reg_no = $_POST['reg_no'];
		$c_address = $_POST['c_address'];
		$location = $_POST['location'];
		$c_contact_no = $_POST['c_contact_no'];
		$c_email = $_POST['c_email'];
		$c_description = $_POST['c_description'];
		$openhrs = $_POST['openhrs'];
		$hrspay = $_POST['hrspay'];
		$c_password = $_POST['c_password'];
		$job_type = $_POST['job_type'];
		$name = $_SESSION['companyname'];

    
    $query = " UPDATE `company_reg` 
	SET `reg_no`='".$reg_no."' ,`c_address`='".$c_address."' , `location`='".$location."' ,`c_contact_no`='".$c_contact_no."' , 
	`c_email`='".$c_email."' ,`c_description`='".$c_description."' , `openhrs`='".$openhrs."' ,`hrspay`='".$hrspay."' , 
	`c_password`='".$c_password."' ,`job_type`='".$job_type."' WHERE `c_name`='".$name."' ";
	$query_run = mysqli_query($connection, $query);

    if($query_run)
    {
		
        $_SESSION['status'] = "Data Updated Successfully";
		header('Location: updateThe Profile.php');
        
    }
    else
    {
		
        $_SESSION['status'] = "Not Updated";
		header('Location: updateThe Profile.php');
        
    }
}

?>