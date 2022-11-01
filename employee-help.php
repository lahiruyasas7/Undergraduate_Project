<?php

    require "header.php";

?>

<!-- Navigation Bar Starts From Here -->

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
         <a class="nav-link active" href="employee-help.php">Help</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="employee-profile.php">Profile</a>
     </li>
</ul>

</div>

<style type="text/css">
        body{
            background-image: url(c4.jpg);
            background-size: cover;
        }
        </style>

<!-- Navigation Bar Ends -->

<div class="sidebar">
  <a href="#" class="active">Contact us</a>
  <a href="#">About us</a>
  <a href="#">FAQ</a>
</div>

<br>
<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Send an Inquiry</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-center mb-3">
<div class="card shadow mb-4" style="width: 30%">
  <div class="card-header">

<form action="employee-help-code.php" method="POST">

  <div class="form-group">
    <label>Your Email</label>
    <input type="text" name="email" class="form-control" maxlength="40" required>
  </div>

  <div class="form-group">
  <label>Message</label>
    <input type="text" name="content" class="form-control" required>
  </div>

  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>

   </div>
</div>
</div>

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

<?php

    require "footer.php";

?>