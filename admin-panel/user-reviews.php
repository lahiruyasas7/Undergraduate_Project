<?php

include "includes/header.php";
include "includes/user-reviews-sidebar.php";
include "includes/navbar.php";

?>


<!-- Begin Page Content -->
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">User Accounts</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Reviews Overview</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php
        
        $connection = mysqli_connect("localhost" , "root" , "" , "UP");
        $query = " SELECT * FROM `review_log` WHERE usertype='company' ORDER BY `time_stamp` DESC ";
        $query_run = mysqli_query($connection,$query);

        ?>

            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Reviewed by</th>
                        <th>Content</th>
                      
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
                        <td><?php echo $row['review_to']; ?></td>
                        <td><?php echo $row['review_from']; ?></td>
                        <td><?php echo $row['review_body']; ?></td>
                        

                        <td>
                        <form action="review-code.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['rid']; ?>">
                        <button type="submit" name="del_btn" class="btn btn-outline-success btn-sm">Delete</button>

                        </form>
                        </td>
    
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
