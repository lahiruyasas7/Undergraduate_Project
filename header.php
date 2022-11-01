<?php

session_start();

?>
<html lang="en">
<head>
<link rel="Stylesheet" href="Style.css">
<link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="script.js"></script>
<title>DayJobs</title>
</head>
<body>
<style>
    body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);}
html,body{
    position: relative;
    height: 100%;
}
</style>
<?php

if(isset($_SESSION['username']))
{

    ?>
    <form action="login-code.php" method="POST">
    <div class="black-bar">
        <span class="mr-2 d-none d-lg-inline text-light small"><?php echo $_SESSION['username'] ?></span>
        <button type="button" name="logout" onClick="location.href='login.php'"  class="btn btn-primary btn-sm" >Logout</button>
    </div>
    </form>
    <?php

}else {

    ?>
    <div class="black-bar"><button type="button" onClick="location.href='login.php'"  class="btn btn-primary btn-sm" >Login</button></div>
    <?php

}

?>
    

    