<?php

    require "header.php";

    include ("Database/dbconfig.php");


//Getting user's IP
//-------------------------------------------
$visitor_ip = $_SERVER['REMOTE_ADDR'];
//-------------------------------------------


//checking ip is already entered

$sql = " SELECT * FROM visit_count WHERE ip_address='$visitor_ip' ";
$result = mysqli_query($connection , $sql);

if(!$result)
{

    die("Retriving Query Error<br>".$query);

}

$total_visit = mysqli_num_rows($result);

if($total_visit<1)
{

    $sql = " INSERT INTO visit_count(ip_address) VALUES('".$visitor_ip."') ";
    $result = mysqli_query($connection , $sql);

}

?>


<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link active" href="employee-homepage.php">Browse Jobs</a>
</li>
<li class="nav-item">
         <a class="nav-link" href="employee_viewRatings.php">View Ratings</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="employee-company.php">Companies</a>
    </li>
    
    <li class="nav-item">
         <a class="nav-link" href="employee-howitworks.php">How it Works</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="employee-help.php">Help</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="employee-profile.php">Profile</a>
     </li>
</ul>

</div>

<!-- Navigation Bar Ends -->

<!-- Begin Page Content -->
<style type="text/css">
        body{
            background-image: url(a2.jpg);
            background-size: 1360px;
        }


</style>


<div class="container-fluid">
<br>
<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">DayJobs.lk</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Posted Job details</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php

        $query = "SELECT * FROM `post_job` ORDER BY `time_stamp` DESC";
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
                        <form action="applyfor-job-code.php" method="POST">
                        
                            <input type="hidden" name="jobid" value="<?php echo $row['pid']; ?>">
                            <button type="submit" name="submit" onclick="run()" class="btn btn-primary" data-dismiss="modal">Apply</button>
                        
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

<script type="text/javascript"> 
function getValue(){
            
             var Location=document.getElementById("Location").value;
             var Date =document.getElementById("Date").value;
             var Time=document.getElementById("Time").value;
             var Payment=document.getElementById("Payment").value;
             
            
}          
function run(payment){
        var x=document.getElementById("");  
        alert("Successful");

             
          if(payment>3000){
          return payment+'!';
           }else{
            return payment;
                }
          }


</script>

<?php

    require "footer.php";

?>
