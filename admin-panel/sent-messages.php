<?php

include "includes/header.php";
include "includes/sent-messages-sidebar.php";
include "includes/navbar.php";

?>


<!-- Begin Page Content -->
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Messages</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sent Messages</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php
        
        $connection = mysqli_connect("localhost" , "root" , "" , "UP");
        $query = " SELECT * FROM `messages` WHERE sender='Admin' ORDER BY `date` DESC ";
        $query_run = mysqli_query($connection,$query);

        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>To</th>
                        <th>Message body</th>
                        <th>Date</th>
                        <th>Status</th>
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
                        <td><?php echo $row['reciever']; ?></td>
                        <td><?php echo $row['content']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php  
                            if($row['m_read']==0)
                            {
                                echo 'Not read';
                            }else {
                                echo 'read';
                            }
                        ?></td>
                        <td>
                        <form action="message-code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['mid']; ?>">
                            <button type="submit" name="deletebtn" class="btn btn-outline-danger btn-sm">Delete</button>
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