<?php

include "includes/header.php";
include "includes/listusers-sidebar.php";
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
        <h6 class="m-0 font-weight-bold text-primary">All Registered User account details</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php
        
        $connection = mysqli_connect("localhost" , "root" , "" , "UP");
        $query = "SELECT * FROM `user_registration` ORDER BY `addeddate` DESC";
        $query_run = mysqli_query($connection,$query);

        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Fullname</th>
                        <th>NIC</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Mobile</th>
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
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['nic']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['addeddate']; ?></td>

                        <td>
                        <form action="listusers-code.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['email']; ?>">
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
