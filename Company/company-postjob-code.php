<?php

session_start();

if(isset($_POST['submit']))
{

	$database = "localhost";
	$username = "root";
	$password = "";
	$dbname = "UP";

	$conn = mysqli_connect($database,$username,$password,$dbname);
	if(!$conn)
	{
		$_SESSION['status'] = "Cannot connect to the database";

	}
	$job_type=$_POST['jobcat'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$payment=$_POST['payment'];
	$req_gender=$_POST['gender'];
    $req_people=$_POST['reqpeo'];
	$description=$_POST['desc'];
	

	/*$sql = "INSERT INTO post_job VALUES('".$job_type."' , '".$date."' , '".$time."' , '".$payment."' , '".$req_gender."' , '".$req_people."', '".$description."')";
		$query = mysqli_query($conn ,$sql);*/

	$sql2 = " INSERT INTO `post_job` ( `job_type`, `date`, `time`, `payment`, `req_gender`, `req_people`, `description`,`posted_by`) VALUES ('".$job_type."', '".$date."', '".$time."', '".$payment."', '".$req_gender."', '".$req_people."', '".$description."','".$_SESSION['companyname']."')  ";
	$query = mysqli_query($conn ,$sql2);
	if($query)
	{

		header("Location: company-postajob.php");
	}else {


		header("Location: company-postajob.php");
	}
}
?>


