<?php

    require "header.php";
    include ("Database/dbconfig.php");

    $sname = "localhost";
$uname = "root";
$password = "";

$db_name = "up";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}


?>

<style>
/*	---------------side bar css-------------*/
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
/*	---------------table css-------------*/
#table table-bordered {

  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table table-bordered td, #table table-bordered th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}	

}
body{
            background-image: url(c5.jpg);
            background-size: cover;
        }
</style>



<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link " href="employee-homepage.php">Browse Jobs</a>
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

<!-- Navigation Bar Ends -->

<body>
  
<div class="sidebar">
  <a  href="employee-profile.php">Profile</a>
  <a href="employee-updateProfille.php">Edit Profile</a>
  <a class="active" href="employee_uploadCV.php">Upload CV</a>
  <a href="add_location/employee_map.php">add location</a>

</div>

<style>
  /*
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
    */
    .cv-form{
      display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
    }
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="cvupload.php"
           method="post"
           enctype="multipart/form-data" class="cv-form">
           
           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
     <?php 


?>
</body>					

<?php

    require "footer.php";

?>