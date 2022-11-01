<?php

include "includes/header.php";
include "includes/listcompany-sidebar.php";
include "includes/navbar.php";

?>

<!-- Begin Page Content -->
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Company Accounts</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Registered Company details</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php
        
        $connection = mysqli_connect("localhost" , "root" , "" , "UP");
        $query = "SELECT * FROM `company_reg` ORDER BY `addeddate` DESC";
        $query_run = mysqli_query($connection,$query);

        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Reg No</th>
                        <th>Address</th>
                        <th>Location</th>
                        <th>Tel</th>
                        <th>E-mail</th>
                        <th>Description</th>
                        <th>Open Hrs</th>
                        <th>Hrs Pay</th>
                        <th>Job Types</th>
                        <th>Added Date</th>
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
                        <td><?php echo $row['c_name']; ?></td>
                        <td><?php echo $row['reg_no']; ?></td>
                        <td><?php echo $row['c_address']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['c_contact_no']; ?></td>
                        <td><?php echo $row['c_email']; ?></td>
                        <td><?php echo $row['c_description']; ?></td>
                        <td><?php echo $row['openhrs']; ?></td>
                        <td><?php echo $row['hrspay']; ?></td>
                        <td><?php echo $row['job_type']; ?></td>
                        <td><?php echo $row['addeddate']; ?></td>

                        <td>
                        <form action="listcompany-code.php" method="POST">

                        <input type="hidden" name="reply_id" value="<?php echo $row['c_email']; ?>">
                        <button type="button" name="edit_btn" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Message</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Sending Message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <div class="modal-body" >
                                        <textarea class="form-control" name="reply_content"></textarea>
                                        </div>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="send_btn">Send</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

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
