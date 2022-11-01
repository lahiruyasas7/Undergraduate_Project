<?php

    require "header.php";

?>

<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link" href="index.php">Browse Jobs</a>
    </li>
    <li class="nav-item">
         <a class="nav-link active" href="foremployers.php">For Employers</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="companies.php">Companies</a>
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
<br>
<div class="d-sm-flex align-items-center justify-content-center mb-4" style="background-color: lightblue;">
                        <h1 class="h3 mb-0 text-gray-900">Create New Employer Account</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-center mb-3" >
<div class="card shadow mb-4" style="width: 40%" >
  <div class="card-header">

<form style="background-color: #82E0AA;" action="foremployers-code.php" method="POST">

  <div class="form-group">
    <label>Company Name</label>
    <input type="text" name="company_name" class="form-control" maxlength="40" required>
    <small id="first" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Reg No</label>
    <input type="text" name="regno" class="form-control" maxlength="40" required>
    <small id="last" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" maxlength="40" required>
    <small id="last" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Location</label>
    <input type="text" name="location" class="form-control" maxlength="40" required>
    <small id="last" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Contact number</label>
    <input type="text" name="contact" class="form-control"  maxlength="10" required>
    <small id="contact" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="text" name="email" class="form-control checking_email" maxlength="100" required>
    <small id="email" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Description</label>
    <input type="text" name="des" class="form-control checking_email" maxlength="100" required>
    <small id="email" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Open hrs</label>
    <input type="text" name="openhrs" class="form-control checking_email" maxlength="100" required>
    <small id="email" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Hrs pay</label>
    <input type="text" name="hrspay" class="form-control checking_email" maxlength="100" required>
    <small id="email" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Job types</label>
    <input type="text" name="jobtypes" class="form-control checking_email" maxlength="100" required>
    <small id="email" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" maxlength="25" required>
    <small id="pwd" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-control" maxlength="25" required>
    <small id="confirm_pwd" style="color: red"></small>
  </div>


  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
   </div>
</div>
</div>

<style type="text/css">
        body{
            background-image: url(a11.jpg);
            background-size: cover;
        }
        </style>

<?php

    require "footer.php";

?>