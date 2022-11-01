<?php

    require "header.php";
    include ("Database/dbconfig.php");
    require "request-accept.php";

?>

<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link" href="company-home-page.php">Home Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="company-postajob.php">Post A Job</a>
    </li>
    <li class="nav-item">
         <a class="nav-link active" href="requests.php">Requests</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="reviews.php">Reviews</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="employees.php">Employees</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="profile.php">Profile</a>
    </li>
</ul>

</div>

<!-- Navigation Bar Ends -->

<!-- Begin Page Content -->


<div class="container-fluid">
<br>
<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Day Jobs</h1>                
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"    >Request details</h6>
        
        <a style="float:right" type="button" class="btn btn-success" href="viewallemployee.php" >job seekers locations</a>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php
        $connection = mysqli_connect("localhost" , "root" , "" , "UP");
        $query = "SELECT * FROM `req_jobs` WHERE `company`='".$_SESSION['companyname']."' ORDER BY `req_time` DESC";
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
}

 </style>
        <form action="request-accept.php" method="POST">

            <table class="content-table" id="dataTable" width="100%" cellspacing="0">
                <thead calss="thead-dark" >
                    <tr>
                        <th>Job ID</th>
                        <th>Employee name</th>
                        <th>Employee email</th>
                        <th>Requested time</th>
                    </tr>
                </thead >
                <tbody>
                    <?php
                    
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>

                    <tr>
                        <td><?php echo $row['jobid']; ?></td>
                        <td><?php echo $row['emp_name']; ?></td>
                        <td><?php echo $row['emp_email']; ?></td>
                        <td><?php echo $row['req_time']; ?></td>

                        <td>
                        
                        <input type="hidden" name="jobid" value="<?php echo $row['jobid'] ?>">
                        <input type="hidden" name="fullname" value="<?php echo $row['emp_name'] ?>">
                        <input type="hidden" name="time" value="<?php echo $row['req_time'] ?>">
                        <input type="hidden" name="email" value="<?php echo $row['emp_email'] ?>">
                            <button onClick="run()" type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">Accept</button>
                            <button type="button" id="reject" name="reject" class="btn btn-danger btn-sm" data-dismiss="modal">reject</button>
                            <a type="button" class="btn btn-secondary" href="viewemployee.php" >View Profile</a>
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
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<script>
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