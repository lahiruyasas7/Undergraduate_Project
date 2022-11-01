<?php

/*
	$reqid=$_GET['reqid'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","ppaproject");

	// Specify the query to Insert Record
	$sql = "DELETE FROM 'req_jobs' WHERE 'req_jobs'.'reqid'='".$reqid."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("request rejected");window.location=\'company-requests.php\';</script>';

	*/

include ("Database/dbconfig.php");

if(isset($_POST['reject']))
{

	$pid = $_POST['reqid'];

	$sql = " DELETE FROM `req_jobs` WHERE reqid='".$reqid."' ";
	$result = mysqli_query($connection, $sql);

	header("Location: requests.php");

}

?>

