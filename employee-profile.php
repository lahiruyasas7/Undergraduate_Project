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
</style>

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
         <a class="nav-link" href="employee-help.php">Help</a>
     </li>
     <li class="nav-item">
         <a class="nav-link active" href="employee-profile.php">Profile</a>
     </li>
</ul>

</div>

<!-- Navigation Bar Ends -->


<div class="sidebar">
  <a class="active" href="employee-profile.php">Profile</a>
  <a href="employee-updateProfille.php">Edit Profile</a>
  <a href="employee_uploadCV.php">Upload CV</a>
  <a href="add_location/employee_map.php">Add location</a>
</div>
<br>
<div class="content">
  
<?php

    $email = $_SESSION['username'];
	$sql = " SELECT * FROM user_registration WHERE fullname='".$email."' ";
	$query_run = mysqli_query($connection ,$sql);
	
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

    <table class="content-table" >
		
		<thead>
		<h1>   </h1>
			<tr>
			
				<th>name</th>
				
				<th>nic</th>
				<th>Gender</th>
				<th>address</th>
				<th>Email</th>
				<th>Contact number</th>
				<th>password</th>
				<th>income</th>
				
				
				
			
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
			
				<td><?php echo $row['fullname']; ?></td>
				<td><?php echo $row['nic']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td><?php echo $row['income']; ?></td>
				
			</tr>
			
					<?php
					
					
				}
				
			}
			
			?>
			
		</tbody>
	</table>		
  <style>
		
		.alb {
			width: 600px;
			height: 900px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="employee_uploadCV.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM cv1 ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
        
          		
    <?php } }?>
     <?php
            $img = mysqli_query($conn, "SELECT * FROM cv1");
            while ($row = mysqli_fetch_array($img)) {     
           
               echo "<img src='uploads/".$row['image_url'].">"; 
            }
     ?>

<?php
     $q = "SELECT image FROM up where id=1";
     $r = mysqli_query ($conn, $q);
     if($r) {
          while($row = mysqli_fetch_array($r)) {
             header ("Content-type: image/jpeg");       
     echo $row ["image_url"];
          }
        }
    ?>


</body>
</div>				
					

<?php

    require "footer.php";

?>