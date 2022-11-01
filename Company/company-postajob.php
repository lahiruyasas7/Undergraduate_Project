<?php

    require "header.php";
    include ("Database/dbconfig.php");

?>

<!-- Navigation Bar Starts From Here -->

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link" href="company-home-page.php">Home Page</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="company-postajob.php">Post A Job</a>
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
<br>
<!-- Navigation Bar Ends -->
<div class="d-sm-flex align-items-center justify-content-center mb-3">
<div class="card shadow mb-4" style="width: 50%" >
  <div class="card-header" >
<div class="card mt-5">
                    <div class="card-header" style="background-color: lightblue;">
                        <h4>Post a Job</h4>
                        <br>
                    </div>
<form action="company-postjob-code.php" method="POST" style="background-color: #BDC3C7 ;">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Job category</label>
        <input type="text" name="jobcat" class="form-control" maxlength="40" id="formGroupExampleInput" placeholder="">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date</label>
        <input type="text" name="date" class="form-control" id="formGroupExampleInput2" placeholder="">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Time</label>
        <input type="text" name="time" class="form-control" id="formGroupExampleInput" placeholder="">
      </div>
      
      <div class="mb-3">
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Payment</label>
        <input type="text" name="payment" class="form-control" id="formGroupExampleInput2" placeholder="">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Required people</label>
        <input type="text" name="reqpeo" class="form-control" id="formGroupExampleInput2" placeholder="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">description</label>
        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">require gender</label>
        </div>
      
      <div class="form-check">
        
        <input name="gender" class="form-check-input" type="radio" name="flexRadioDefault" value="male" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          male
        </label>
      </div>
      <div class="form-check">
        <input name="gender" class="form-check-input" type="radio" name="flexRadioDefault" value="female" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        female
        </label>
      </div>
      <div class="form-check">
        <input name="gender" class="form-check-input" type="radio" name="flexRadioDefault" value="both" id="flexRadioDefault3" checked>
        <label class="form-check-label" for="flexRadioDefault2">
       Both
        </label>
      </div>
      <button type="submit" name ="submit" id="post" class="btn btn-primary">Post</button>

      <br>

      <br>
      <br>
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
$(function(){
        $('#post').click(function(){
        Swal.fire({
         ' title':'Hello',
         'text':'Successfully posted',
         'type':'success'
        })
      });

  });
  </script>

<?php

    require "footer.php";

?>
