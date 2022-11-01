<?php

    require "header.php";
    include ("Database/dbconfig.php");

?>
<style type="text/css">
        body{
            background-image: url(c3.jpg);
            background-size: 1360;
        }


</style>
<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link active" href="company-home-page.php">Home Page</a>
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
         <a class="nav-link" href="profile.php">Profile</a>
    </li>
</ul>

</div>

<!-- Navigation Bar Ends -->
<br>
<form class="text-right">
	<input type="button" onClick="makepdf()" value="generate report" class="btn btn-danger">
</form>

<script>
	function makepdf(){
		var printMe = document.getElementById("postedjob");
		var wMe = window.open("", "", "width:700, height:900");
		wMe.document.write(printMe.outerHTML);
		wMe.document.close();
		wMe.focus();
		wMe.print();
		wMe.close();
		
	}
  </script>

<?php 

// Attempt select query execution
$sql = "SELECT * FROM post_job where posted_by='Pizza Hut' ORDER BY time_stamp desc ";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
    ?>    
 

    <form action="deletejob.php" method="POST">
        <table id="postedjob" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">pid</th>
      <th scope="col">job type</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      <th scope="col">payment</th>
      <th scope="col">required gender</th>
      <th scope="col">required people</th>
      <th scope="col">description</th>
      <th scope="col">posted time</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
        while($row = mysqli_fetch_array($result)){
           ?>
    
     <tr>
      <td><?php echo $row['pid'] ?></td>
      <td><?php echo $row['job_type'] ?></td>
      <td><?php echo $row['date'] ?></td>
      <td><?php echo $row['time'] ?></td>
      <td><?php echo $row['payment'] ?></td>
      <td><?php echo $row['req_gender'] ?></td>
      <td><?php echo $row['req_people'] ?></td>
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['time_stamp'] ?></td>


      <td>
      <input type="hidden" name="pid" value="<?php echo $row['pid'] ?>" >
      <button type="submit" name="submit" class="btn btn-danger btn-sm">delete</button>
    </td>
      </tr>
        <?php
            
        }
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
 } 


?>
</tbody>
</table>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
/*$(function(){
        //alert('hello');
        Swal.fire({
         ' title':'Hello',
         'text':'welcome to DayJobs.lk',
         'type':'success'
        })

  });
  */
  </script>
<?php /*
$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection, 'ppa');

if(isset($_POST['delete'])){
$query = "DELETE FROM 'post_job' WHERE pid='$pid'";
$query_run = mysqli_query($connection,$query);

if($query_run){
  echo '<script type="text/javascript">alert("post deleted") </script>';
}else{
  echo '<script type="text/javascript">alert("post not deleted") </script>';
}
} */
?>
<body>
   <div class="background-image"> </div>

</body>
<style>
   *{
     margin: 0;
     padding: 0;
   }
  
</style>

<?php

    require "footer.php";

?>

