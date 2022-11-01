
<?php

include "includes/header.php";
include "includes/sidebar.php";
include "includes/navbar.php";

require "Database/dbconfig.php";

?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-5">
                        <h1 class="h3 mb-0 text-gray-900">Dashboard</h1>
                        <a href="reporting.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        
</div>

<div class="row ">


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2" style="width: 15.7rem;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Admins</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php
                        
                            $sql = "SELECT email FROM adminreg";
                            $query_run = mysqli_query($connection,$sql);
                            $row = mysqli_num_rows($query_run);
                            echo $row;

                        ?>
                        
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2" style="width: 15.7rem;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php
                        
                            $sql = "SELECT uid FROM user_registration";
                            $query_run = mysqli_query($connection,$sql);
                            $row = mysqli_num_rows($query_run);
                            echo $row;

                        ?>
                        
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2" style="width: 15.7rem;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Companies</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php
                        
                            $sql = "SELECT c_id FROM company_reg";
                            $query_run = mysqli_query($connection,$sql);
                            $row = mysqli_num_rows($query_run);
                            echo $row;

                        ?>
                        
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2" style="width: 15.7rem;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Jobs On This Month</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php
                        
                            $sql = "SELECT pid FROM post_job";
                            $query_run = mysqli_query($connection,$sql);
                            $row = mysqli_num_rows($query_run);
                            echo $row;

                        ?>
                        
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>                        


<br/>

<!-- Second Row -->

<div class="row">

<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2" style="width: 15.7rem;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Total Visits</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <?php
                    
                            $sql = " SELECT * FROM visit_count ";
                            $result = mysqli_query($connection , $sql);
                            $total_visit = mysqli_num_rows($result);
                            echo $total_visit;

                        ?>
                        
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include "includes/scripts.php";
include "includes/footer.php";

?> 

  


