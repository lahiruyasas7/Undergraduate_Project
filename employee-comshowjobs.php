<?php

    require "header.php";

    include ("Database/dbconfig.php")

?>
<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link" href="employee-homepage.php">Browse Jobs</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="employee_viewRatings.php">View Ratings</a>
    </li>
    
    <li class="nav-item">
         <a class="nav-link " href="employee-company.php">Companies</a>
    </li>
    
    <li class="nav-item">
         <a class="nav-link" href="employee-howitworks.php">How it Works</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="employee-help.php">Help</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="employee-profile.php">Profie</a>
     </li>
</ul>

</div>
<button onclick="history.back()">Go Back</button>
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">company posted Jobs</h6>
    </div>
    
    <div class="card-body" >
        <div class="table-responsive">

        <?php

        $query = "SELECT * FROM `post_job` where posted_by='dd' ORDER BY `time_stamp` DESC";
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
                    <th>Posted Date</th>
                        <th>Company Name</th>
                        <th>Job Type</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Payment</th>
                        <th>Required Gender</th>
                        <th>Required Peoples</th>
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
                    <td><?php echo $row['time_stamp']; ?></td>
                        <td><?php echo $row['posted_by']; ?></td>
                        <td><?php echo $row['job_type']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['payment']; ?></td>
                        <td><?php echo $row['req_gender']; ?></td>
                        <td><?php echo $row['req_people']; ?></td>


                        <td>

                        <button type="submit" name="submit" onclick="run()" class="btn btn-primary" data-dismiss="modal">Apply</button>

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