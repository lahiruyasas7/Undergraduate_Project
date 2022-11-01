<?php

include "includes/header.php";
include "includes/messages-sidebar.php";
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
        <h6 class="m-0 font-weight-bold text-primary">All Messages</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php
        
        $connection = mysqli_connect("localhost" , "root" , "" , "UP");
        $query = " SELECT * FROM `messages` WHERE reciever='Admin' ORDER BY `date` DESC ";
        $query_run = mysqli_query($connection,$query);

        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>From</th>
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
                        <td><?php echo $row['sender']; ?></td>
                        <td><?php echo $row['content']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php  
                            if($row['m_read']==0)
                            {
                                echo 'Not read';
                            }else {
                                echo 'Read';
                            }
                        ?></td>

                        <td>
                        <form action="message-code.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['mid']; ?>">
                        <button type="submit" name="edit_btn" class="btn btn-outline-success btn-sm">Read</button>

                        </form>
                        </td>
                        <td>
                           
                        <form action="message-code.php" method="post">
                            <input type="hidden" name="reply_id" value="<?php echo $row['mid']; ?>">
                            <input type="hidden" name="reply_sender" value="<?php echo $row['sender']; ?>">
                            <button type="button" name="replybtn" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Reply</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">To : <?php echo $row['sender']; ?></h5>
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