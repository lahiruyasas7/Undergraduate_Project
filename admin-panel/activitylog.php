<?php

include "includes/header.php";
include "includes/sidebar.php";
include "includes/navbar.php";

?>

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Activity Log</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php
        
        $user = $_SESSION['username'];
        $connection = mysqli_connect("localhost" , "root" , "" , "UP");
        $query = "SELECT * FROM `admin_activity_log` WHERE `admin_name`='$user' ORDER BY `time_stamp` DESC ";
        $query_run = mysqli_query($connection,$query);

        ?>

            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Logged Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>

                    <tr>
                        <td><?php echo $row['admin_name']; ?></td>
                        <td><?php echo $row['time_stamp']; ?></td>

                    </tr>

                    <?php

                        }

                    }else {

                        echo 'No records found';
                    }

                    ?>

                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php

include "includes/scripts.php";
include "includes/footer.php";

?> 