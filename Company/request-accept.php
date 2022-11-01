
<?php

include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

    
    $fullname = $_POST['fullname'];
    $date = $_POST['date'];
    $payment = $_POST['payment'];
    $jobid = $_POST['job_id'];
    $company = $_POST['company'];

    $sql = " INSERT INTO `past_emp` (`fullname`, `date`, `payment`, `job_id`, `company`) 
    VALUES ('".$fullname."', '".$date."', '".$payment."', '".$jobid."', '".$company."') "; 
    $query = mysqli_query($connection ,$sql);

    echo '<script>alert("Request accepted")</script>';

    header('Location: requests.php');

}

?>