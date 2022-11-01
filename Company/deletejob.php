
<?php

include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

	$pid = $_POST['pid'];

	$sql = " DELETE FROM `post_job` WHERE pid='".$pid."' ";
	$result = mysqli_query($connection, $sql);

	header("Location: company-home-page.php");

}

?>
