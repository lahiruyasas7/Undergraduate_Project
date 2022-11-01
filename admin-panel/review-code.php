<?php

include ("Database/dbconfig.php");
session_start();

if(isset($_POST['del_btn']))
{

    $id = $_POST['edit_id'];

    $sql = " DELETE FROM `review_log` WHERE rid='$id' ";
    $query_run = mysqli_query($connection,$sql);

    if($query_run)
	{

		$_SESSION['status'] = "Message deleted";
		$_SESSION['status_code'] = "success";
		header("Location: user-reviews.php");

	}else {

		$_SESSION['status'] = "Message cannot delete";
		$_SESSION['status_code'] = "error";
		header("Location: user-reviews.php");

	}

}


if(isset($_POST['com_del_btn']))
{

    $id = $_POST['com_edit_id'];

    $sql = " DELETE FROM `review_log` WHERE rid='$id' ";
    $query_run = mysqli_query($connection,$sql);

    if($query_run)
	{

		$_SESSION['status'] = "Message deleted";
		$_SESSION['status_code'] = "success";
		header("Location: company-reviews.php");

	}else {

		$_SESSION['status'] = "Message cannot delete";
		$_SESSION['status_code'] = "error";
		header("Location: company-reviews.php");

	}

}


?>