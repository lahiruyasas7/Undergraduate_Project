<?php

if(isset($_SESSION['logout']))
{

    session_destroy();
    header("Location: /index.php");

}

?>