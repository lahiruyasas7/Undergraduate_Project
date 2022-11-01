<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "UP";

$connection = mysqli_connect($server_name , $db_username , $db_password , $db_name);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{


}else {
    echo '
    
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">DATABASE Not Found</p>
                        <p class="text-gray-500 mb-0">Please check your database connection ...</p>
                        <a href="index.php">&larr; Back to Dashboard</a>
                    </div>

                </div>
                <!-- /.container-fluid -->

    ';
}

?>