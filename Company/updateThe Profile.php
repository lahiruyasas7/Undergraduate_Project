<?php

    require "header.php";
    include ("Database/dbconfig.php");
	
    $query = "SELECT * FROM company_reg WHERE c_name='".$_SESSION['companyname']."' ";
    $query_run = mysqli_query($connection,$query);

?>

<style>
	

body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 01px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4863A0;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
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
         <a class="nav-link" href="employees.php">Employees</a>
    </li>
    <li class="nav-item">
         <a class="nav-link active" href="profile.php">Profile</a>
    </li>
</ul>

</div>

<!-- Navigation Bar Ends -->

<div class="sidebar">
  <a  href="profile.php">Profile</a>
  <a class="active" href="#">Edit Profile</a>
 

</div>

<div class="content">


	<div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Data</h4>
                    </div>
                    <div class="card-body">

                        <form action="updateThe ProfileDB.php" method="POST">

                        <?php

                            foreach($query_run as $row)
                            {

                            ?>

                            <div class="form-group mb-3">
                                <label for="">Reg No</label>
                                <input type="text" value="<?php echo $row['reg_no'] ?>" name="reg_no" class="form-control"  >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" value="<?php echo $row['c_address'] ?>"  name="c_address" class="form-control"  >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Location</label>
                                <input type="text" value="<?php echo $row['location'] ?>"  name="location" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Contact No</label>
                                <input type="text" value="<?php echo $row['c_contact_no'] ?>"  name="c_contact_no" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">email</label>
                                <input type="text" value="<?php echo $row['c_email'] ?>"  name="c_email" class="form-control" >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Description</label>
                                <input type="text" value="<?php echo $row['c_description'] ?>"  name="c_description" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Open Hours</label>
                                <input type="text" value="<?php echo $row['openhrs'] ?>"  name="openhrs" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Hourly Pay</label>
                                <input type="text" value="<?php echo $row['hrspay'] ?>"  name="hrspay" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" value="<?php echo $row['c_password'] ?>"  name="c_password" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Job Type</label>
                                <input type="text" value="<?php echo $row['job_type'] ?>"  name="job_type" class="form-control" >
                            </div>
							<?php } ?>
                            <div class="form-group mb-3">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                            </div>

                        </form>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <br><br>
	 </div>
     

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<?php

require "footer.php";

?>
	
	
	
	
	