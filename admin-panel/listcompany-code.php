<?php

include ("Database/dbconfig.php");
session_start();

if(isset($_POST['send_btn']))
{

    $id = $_POST['reply_id'];
    $sender = 'Admin';
    $content = $_POST['reply_content'];

    $sql = " INSERT INTO `messages`(`content`, `sender`, `reciever`, `m_read`) VALUES ('".$content."' , '".$sender."' , '".$id."' , '0' ) ";
    $query_run = mysqli_query($connection,$sql);

    if($query_run)
	{

		$_SESSION['status'] = "Message Sent";
		$_SESSION['status_code'] = "success";
		header("Location: listcompany.php");

	}else {

		$_SESSION['status'] = "Message cannot Send";
		$_SESSION['status_code'] = "error";
		header("Location: listcompany.php");

	}

}

?>