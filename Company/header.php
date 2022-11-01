<?php

session_start();

?>

<html lang="en">
<head>
<link rel="Stylesheet" href="Style.css">
<link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>DayJobs</title>
</head>
<body>
<style>
    body{background: #eee url(https://image.freepik.com/free-vector/white-abstract-background_23-2148882948.jpg);}
html,body{
    position: relative;
    height: 100%;
    background-attachment: fixed;
    background-size: 100% 100%;
}
</style>
<form action="logout.php" method="POST">
    <div class="black-bar">
        <span class="mr-2 d-none d-lg-inline text-light small"><?php echo $_SESSION['companyname'] ?></span>
        <button type="button" name="logout" onClick="location.href='../index.php'"  class="btn btn-primary btn-sm" >Logout</button>
    </div>
</form>
    