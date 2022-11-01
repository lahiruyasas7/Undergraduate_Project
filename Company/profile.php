<?php

    require "header.php";
    include ("Database/dbconfig.php");

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
  <a class="active" href="#home">Profile</a>
  <a href="updateThe Profile.php">Edit Profile</a>
 

</div>
<br>
<div class="content">
  
<?php

    $email = $_SESSION['companyname'];
	$sql = " SELECT * FROM company_reg WHERE c_name='".$email."' ";
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
			
				<th>Company name</th>
				<th>Reg no</th>
				<th>Address</th>
				<th>Location</th>
				<th>Contact No</th>
				<th>Email</th>
				<th>Description</th>
				<th>open Hours</th>
				<th>Job Types</th>
				<th>Password</th>
				
				
			
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
			
				<td><?php echo $row['c_name']; ?></td>
				<td><?php echo $row['reg_no']; ?></td>
				<td><?php echo $row['c_address']; ?></td>
				<td><?php echo $row['location']; ?></td>
				<td><?php echo $row['c_contact_no']; ?></td>
				<td><?php echo $row['c_email']; ?></td>
				<td><?php echo $row['c_description']; ?></td>
				<td><?php echo $row['openhrs']; ?></td>
				<td><?php echo $row['job_type']; ?></td>
				<td><?php echo $row['c_password']; ?></td>
			</tr>
			
					<?php
					
					
				}
				
			}
			
			?>
			
		</tbody>
	</table>				
</div>				
					

<?php

    require "footer.php";

?>