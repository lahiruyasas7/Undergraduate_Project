<?php

include ("Database/dbconfig.php");
session_start();

if(isset($_POST['edit_btn']))
{

    $id = $_POST['edit_id'];
    $sql = " UPDATE `messages` SET `m_read`='1' WHERE mid='$id' ";
    $query_run = mysqli_query($connection,$sql);

    if($query_run)
	{

		$_SESSION['status'] = "Message read";
		$_SESSION['status_code'] = "success";
		header("Location: messages.php");

	}else {

		$_SESSION['status'] = "Message already read";
		$_SESSION['status_code'] = "error";
		header("Location: messages.php");

	}

}


if(isset($_POST['send_btn']))
{

    $message = $_POST['reply_content'];
    $id = $_POST['reply_id'];

    $sql = " INSERT INTO `messages`(`content`, `sender`, `reciever`, `m_read`) VALUES ('".$message."' , 'Admin' , '".$_POST['reply_sender']."' , '0' ) ";
    $query_run = mysqli_query($connection,$sql);

    if($query_run)
	{

		$_SESSION['status'] = "Message replied";
		$_SESSION['status_code'] = "success";
		header("Location: messages.php");

	}else {

		$_SESSION['status'] = "Message cannot replied";
		$_SESSION['status_code'] = "error";
		header("Location: messages.php");

	}

}


if(isset($_POST['deletebtn']))
{

    $id = $_POST['delete_id'];
    $sql = " DELETE FROM `messages` WHERE mid='".$id."' ";
    $query_run = mysqli_query($connection,$sql);

    if($query_run)
	{

		$_SESSION['status'] = "Message deleted";
		$_SESSION['status_code'] = "success";
		header("Location: sent-messages.php");

	}else {

		$_SESSION['status'] = "Message cannot delete";
		$_SESSION['status_code'] = "error";
		header("Location: sent-messages.php");

	}

}

?>