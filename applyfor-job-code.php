<?php

session_start();

include ("Database/dbconfig.php");

if(isset($_POST['submit']) && isset($_SESSION['username']) )
{

    $pid = $_POST['jobid'];
    $username = $_SESSION['username'];
    $usermail = $_SESSION['user_mail'];
    $company = $_POST['posted_by'];

    $sql = " INSERT INTO `req_jobs` (`jobid`, `emp_name`, `emp_email` , `company`) 
    VALUES ('".$pid."', '".$username."', '".$usermail."', '".$company."'); ";
    $result = mysqli_query($connection,$sql);
    header('Location: employee-homepage.php');
    


}else {

    header('Location: index.php');

}

?>