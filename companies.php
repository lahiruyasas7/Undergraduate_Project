<?php

    require "header.php";

    include ("Database/dbconfig.php")

?>
<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link" href="index.php">Browse Jobs</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="foremployers.php">For Employers</a>
    </li>
    <li class="nav-item">
         <a class="nav-link active" href="companies.php">Companies</a>
    </li>
    <li class="nav-item">
         <a class="nav-link " href="signin.php">Sign in</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="howitworks.php">How it Works</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="help.php">Help</a>
     </li>
</ul>

</div>

<!-- Navigation Bar Ends -->

<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Companies</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Registered Company details</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php

        $query = "SELECT * FROM `company_reg` ORDER BY `addeddate` DESC";
        $query_run = mysqli_query($connection,$query);

        ?>

<style> 
        .content-table{
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .content-table thead tr{
            background-color: lightblue;
            color: black;
            text-align: left;
            font-weight: bold;

        }
        .content-table th,
.content-table td {
  padding: 12px 15px;
  
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
  background-color: #D7DBDD ;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
  background-color:#17A589  ;
}


 </style>



            <table class="content-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Description</th>
                        <th>Open hours</th>
                        <th>Hourly pay</th>
                        <th>Offering Job types</th>
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
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['c_contact_no']; ?></td>
                        <td><?php echo $row['c_description']; ?></td>
                        <td><?php echo $row['openhrs']; ?></td>
                        <td><?php echo $row['hrspay']; ?></td>
                        <td><?php echo $row['job_type']; ?></td>

                        <td>

                        <div class="modal-footer">
                        <a type="button" class="btn btn-secondary" href="comshowjobs.php" >View Jobs</a>
                              
                         </div>

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

    require "footer.php";

?>