<?php

session_start();
include ("Database/dbconfig.php");

if(!$dbconfig)
{

    header("Location: Database/dbconfig.php");

}

if(!$_SESSION['username'])
{

    header("Location: login.html");

}

?>