<?php

session_start();

include ("Database/dbconfig.php");

//Returning value from js ajax
if(isset($_POST['check_submit_btn']))
{

	$email = $_POST['email_id'];

	$sql = "SELECT * FROM adminreg WHERE email = '$email' ";
	$email_query_run = mysqli_query($connection,$sql);
	
	if(mysqli_num_rows($email_query_run) > 0)
	{

		echo 'Email already exists , Please Try another one !';

	}

}

if(isset($_POST['submit']))
{

	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$cont = $_POST['contact'];
	$password = $_POST['password'];
	$conpassword = $_POST['confirmpassword'];
	$date = date('Y-m-d H:i:s');

	$email_query = "SELECT * FROM adminreg WHERE email = '$email' ";
	$email_query_run = mysqli_query($connection,$email_query);
	
	if(mysqli_num_rows($email_query_run) > 0)
	{

		$_SESSION['status'] = "Email already taken. Please try another one."; 
		$_SESSION['status_code'] = "warning";
		header('Location: register.php');


	}else {

		if($password === $conpassword)
		{
	
			$sql = "INSERT INTO adminreg VALUES('".$fname."' , '".$lname."' , '".$email."' , '".$cont."' , '".$password."' , '".$_SESSION['username']."', '".$date."')";
			$query = mysqli_query($connection ,$sql);
			
	
			if($query)
			{
				$_SESSION['status'] = "Created new admin account";
				$_SESSION['status_code'] = "success";
				header("Location: listaccounts.php");
	
			}else {
	
				$_SESSION['status'] = "Cannot insert to the database";
				$_SESSION['status_code'] = "error";
				header("Location: listaccounts.php");
	
			}
	
		}else {
	
			$_SESSION['status'] = "Password does not match"; 
			$_SESSION['status_code'] = "warning";
			header('Location: register.php');
	
		}

	}

	

}


if(isset($_POST['updatebtn']))
{

	$o_email = $_POST['edit_id'];
	$e_firstname = $_POST['edit_firstname'];
	$e_lastname = $_POST['edit_lastname'];
	$e_email = $_POST['edit_email'];
	$e_contact = $_POST['edit_contact'];
	$e_password = $_POST['edit_password'];
	$e_date = date('Y-m-d H:i:s');
	$e_user = $_SESSION['username'];

	$sqlr = " UPDATE adminreg SET firstname='$e_firstname' , lastname='$e_lastname' , email='$e_email' , contactno='$e_contact' , password='$e_password' , addedby='$e_user' , addeddate='$e_date' WHERE email='$o_email' ";

	$query_run = mysqli_query($connection , $sqlr);

	if($query_run)
	{

		$_SESSION['status'] = "Your data is updated";
		$_SESSION['status_code'] = "success";
		header('Location: listaccounts.php');

	}else {

		$_SESSION['status'] = "Your data is Not updated";
		$_SESSION['status_code'] = "error";
		header('Location: listaccounts.php');

	}

}


if(isset($_POST['deletebtn']))
{

	$id = $_POST['del_id'];

	$sql = " DELETE FROM adminreg WHERE email='$id' ";
	$query_run = mysqli_query($connection,$sql);

	if($query_run)
	{

		$_SESSION['status'] = "Your data is Deleted";
		$_SESSION['status_code'] = "success";
		header('Location: listaccounts.php');

	}else {
		
	
		$_SESSION['status'] = "Your data is Not Deleted";
		$_SESSION['status_code'] = "error";
		header('Location: listaccounts.php');

	}

}


?>