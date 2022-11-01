<?php

include ("Database/dbconfig.php");
session_start();

if(isset($_POST['send_btn']))
{

    $to = $_POST['edit_id'];
    $from = 'Admin';
    $content = $_POST['reply_content'];

    $sql = " INSERT INTO `messages`(`content`, `sender`, `reciever`, `m_read`) VALUES ('".$content."' , '".$from."' , '".$to."' , '0' ) ";
    $query_run = mysqli_query($connection,$sql);

    if($query_run)
	{

		$_SESSION['status'] = "Message Sent";
		$_SESSION['status_code'] = "success";
		header("Location: listusers.php");

	}else {

		$_SESSION['status'] = "Message cannot Send";
		$_SESSION['status_code'] = "error";
		header("Location: listusers.php");

	}

}

?>