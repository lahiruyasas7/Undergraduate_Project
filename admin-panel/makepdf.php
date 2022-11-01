<?php
/*
require_once __DIR__.'/vendor/autoload.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$mpdf = new \Mpdf\Mpdf();

$data = "";
$data .= "<h1>Your Details</h1>";
$data .= "<strong>First name</strong>".$fname."<br />";
$data .= "<strong>Last name</strong>".$lname."<br />";
$data .= "<strong>E-mail</strong>".$email."<br />";
$data2 = "gewageage";

$mpdf->WriteHTML($data);
$mpdf->WriteHTML($data2);

$mpdf->Output('myFile.pdf' , 'D');
*/

include ("Database/dbconfig.php");

require_once __DIR__.'/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$data = "";
$sum = 0;


    $entered = $_POST['selection'];
    $sql = " SELECT * FROM `post_job` WHERE `posted_by`='".$entered."' ";
    $query_run = mysqli_query($connection,$sql);

    $data .= "<hr/><h1> Company name :    ".$entered."</h1><br>";
    $data .= "Date : " . date("Y/m/d") . "<br><br><hr/>";

    if(mysqli_num_rows($query_run)>0)
    {
        while($row = mysqli_fetch_assoc($query_run))
        {

            $data .= $row['time_stamp']."  -  ".$row['job_type']."  -  ".$row['payment']."  -  ".$row['date']."  -  ".$row['req_people']."<br/><br/>";
            $sum += $row['payment'];
        }

    }

    $data .= "<hr/><h3> Total Payment   :   ".$sum."</h3><br><hr/>";

    $mpdf->WriteHTML($data);

    $mpdf->Output('Invoice.pdf' , 'D');


?>