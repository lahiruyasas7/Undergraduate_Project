<?php

    require "header.php";
    include ("Database/dbconfig.php");
	
    $query = "SELECT * FROM user_registration WHERE fullname='".$_SESSION['username']."' ";
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


<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link " href="employee-homepage.php">Browse Jobs</a>
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
         <a class="nav-link active" href="employee-profile.php">Profile</a>
     </li>
</ul>

</div>
<div class="sidebar">
  <a  href="employee-profile.php">Profile</a>
  <a class="active" href="#">Edit Profile</a>
  <a href="employee_uploadCV.php">Upload CV</a>
  <a href="add_location/employee_map.php">Add location</a>
 

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
                <style>

                    .card-header{
                        border-collapse: collapse;
            margin: 20px 0;
            font-size: 1em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

                    }
                .card-header thead{
                    background-color: lightblue;
            color: black;
            text-align: left;
            font-weight: bold;
                }



                </style>
                <div class="card mt-5">
                    <div class="card-header" style="background-color:lightblue">
                        <h4>Update Data</h4>
                    </div>
                    <div class="card-body" style="background-color: #D5DBDB ;" >

                        <form action="employee_updateProfileDB.php" method="POST">

                        <?php

                            foreach($query_run as $row)
                            {

                            ?>

                            <div class="form-group mb-3">
                                <label for="">name</label>
                                <input type="text" value="<?php echo $row['fullname'] ?>" name="fullname" class="form-control"  >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">NIC</label>
                                <input type="text" value="<?php echo $row['nic'] ?>"  name="nic" class="form-control"  >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Gender</label>
                                <input type="text" value="<?php echo $row['gender'] ?>"  name="gender" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" value="<?php echo $row['address'] ?>"  name="address" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" value="<?php echo $row['email'] ?>"  name="email" class="form-control" >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Contact</label>
                                <input type="text" value="<?php echo $row['contact'] ?>"  name="contact" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Passowrd</label>
                                <input type="text" value="<?php echo $row['password'] ?>"  name="password" class="form-control"  >
                            </div>
							<div class="form-group mb-3">
                                <label for="">Income</label>
                                <input type="text" value="<?php echo $row['income'] ?>"  name="income" class="form-control"  >
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