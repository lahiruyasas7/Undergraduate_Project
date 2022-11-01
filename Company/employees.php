<?php

    require "header.php";

$connection = mysqli_connect("localhost" , "root" , "" , "UP");


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
 function getAttendeeDetails($id){
    try{
         $sql = "select * from attendee a inner join specialties s on a.specialty_id = s.specialty_id 
         where attendee_id = :id";
         $stmt = $this->db->prepare($sql);
         $stmt->bindparam(':id', $id);
         $stmt->execute();
         $result = $stmt->fetch();
         return $result;
    }catch (PDOException $e) {
         echo $e->getMessage();
         return false;
     }
 }

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
         <a class="nav-link" href="requests.php">Requests</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="reviews.php">Reviews</a>
    </li>
    <li class="nav-item">
         <a class="nav-link active" href="employees.php">Employees</a>
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
                        <h1 class="h3 mb-0 text-gray-900">Worked Employees List</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" style="width: 100%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Past Employee details</h6>
    </div>
    <div class="card-body" >
        <div class="table-responsive">

        <?php

        $query = "SELECT * FROM `past_emp` ORDER BY `date` DESC";
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


            <table class="content-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Full Name</th>
                        <th>Job ID</th>
                        <th>Payment</th>
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
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['job_id']; ?></td>
                        <td><?php echo $row['payment']; ?></td>

                        <div class="modal" tabindex="-1">
   

                        <td>
                          <a href="ratingindex.php?uid=<?php echo $row['fullname']; ?>" class="btn btn-primary">Review</a>             
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
<style type="text/css">
        body{
            background-image: url(a11.jpg);
            background-size: 1360px;
        }

</style>

<?php

    require "footer.php";

?>