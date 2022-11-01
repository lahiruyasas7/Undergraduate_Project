<?php

include ("Database/dbconfig.php");

if(isset($_POST['submit']))
{

    $email = $_POST['email'];
    $content = $_POST['content'];

    $sql = " INSERT INTO `messages` (`content`, `sender`, `reciever`, `date`, `m_read`) 
    VALUES ('".$content."', '".$email."', 'Admin', CURRENT_TIMESTAMP, '0') "; 
    $query = mysqli_query($connection ,$sql);

    header('Location: help.php');

}

?>