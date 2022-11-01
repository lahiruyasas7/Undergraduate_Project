<?php

session_start();
include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

        $user = $_POST['useremail'];
        $pwd = $_POST['pass'];

        $sql = " SELECT `firstname` FROM `adminreg` WHERE `email`='".$user."' && `password`='".$pwd."' ";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row["firstname"];
            $_SESSION['user_email'] = $row['email'];

            $sql2 = " INSERT INTO `admin_activity_log` (`admin_name`, `time_stamp`) VALUES ('".$row["firstname"]."', CURRENT_TIMESTAMP); ";
            $result2 = mysqli_query($connection,$sql2);

            header("Location: index.php");

        }else {

            header("Location: login.html");
        }

}


if(isset($_POST['logoutbtn']))
{

    session_destroy();
    header("Location: login.html");

}


if(isset($_POST['reset_submit']))
{

    $email = mysqli_real_escape_string($connection,$_POST['reset_email']);

}


//Forgot Password Section

if(isset($_POST['reset_submit']))
{

    $input_email = $_POST['reset_email'];

    $sql = "SELECT * FROM `adminreg` WHERE email='$input_email' ";

    $query_run = mysqli_query($connection , $sql);
    $hour = date('H');
    $sec = date('s');

    $reset_code = $hour."".$sec."".$hour+$sec;

    if(mysqli_num_rows($query_run) > 0)
    {

        /*$sql2 = " UPDATE `adminreg` SET `resetcode`='$reset_code' WHERE `email`='$input_email' ";
        $sql_run = mysqli_query($connection , $sql2);

        $to = $input_email;
        $subject = "Reset Code From DayJobs";
        $txt = "Hello world!";
        $headers = "From: webmaster@example.com";

        mail($to,$subject,$txt,$headers);

        echo 'ok ok check your email';*/

        $to      = 'Lahiruyasas7@gmail.com';
        $subject = 'Testing sendmail';
        $message = 'Hi, you received an email!';
        $headers = 'From: sender@gmail.com' . "\r\n" . 
           'Reply-To: sender@gmail.com' . "\r\n" .
           'MIME-Version: 1.0' . "\r\n" .
           'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

        if(mail($to, $subject, $message, $headers))
            echo "Email sent successfully..!!"; 
        else
            echo "Email sending failed";


    }else {

        header("Location: forgot-pwd-error.php");
    }

}


?>