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
         <a class="nav-link" href="foremployers.php">For Employers</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="companies.php">Companies</a>
    </li>
    <li class="nav-item">
         <a class="nav-link active" href="signin.php">Sign in</a>
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
<div class="container-fluid">
<br>
<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900" style="background-color: lightblue;">Create New User Account</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-center mb-3">
<div class="card shadow mb-4" style="width: 40%">
  <div class="card-header">

<form style="background-color:#82E0AA ;" action="signin-code.php" method="POST">

  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="fullname" class="form-control" maxlength="40" onkeyup="check_fname()" required>
    <small id="f_name" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>NIC</label>
    <input type="text" name="nic" class="form-control" maxlength="40" onkeyup="check_nic()" required>
    <small id="nic" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Gender</label>
    <input type="text" name="gender" class="form-control" maxlength="40" required>
    <small id="last" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" maxlength="40" required>
    <small id="last" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="text" name="email" class="form-control checking_email" maxlength="100" onkeyup="check_email()" required>
    <small id="email" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Contact number</label>
    <input type="text" name="contact" class="form-control" onkeyup="check_contact()" maxlength="10" required>
    <small id="tel" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" onkeyup="check_pass()" maxlength="25" required>
    <small id="pass" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-control" onkeyup="check_pwd()" maxlength="25" required>
    <small id="con_pwd" style="color: red"></small>
  </div>


  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>
<br>
   </div>
</div>
</div>
</div>

<script>
 function check_fname()
{
   var input = document.getElementById("fname").value;
   

   if(!isNan(input))
   {

      text.innerHTML = "Enter a correct name";
        return false;
   
   }


}
 
 function check_nic()
 {

   var input = document.getElementById("NIC").value;
   var text = document.getElementById("nic");

   if(isNaN(input))
   {

      text.innerHTML = "966431264V";

   }else {

      text.innerHTML = "";
   }

 }



function check_Email()
{
   var input = document.getElementById("Email").value;
   var text = document.getElementById("email");

   if(isNaN(input))
   {

      text.innerHTML = "**Please fill the Email field";

   }else {

      text.innerHTML = "";
   }


}
function check_contact()
{
   var input = document.getElementById("Contact").value;
   var text = document.getElementById("tel");

   if(isNaN(input))
   {

      text.innerHTML = "**Please fill the Contact field";

   }else {

      text.innerHTML = "";
   }


}


function check_pwd()
{

   var input1 = document.getElementById("pass").value;
   var input2 = document.getElementById("con_pass").value;
   var text = document.getElementById("con_pwd");

   if(input1 == input2)
   {
      text.innerHTML = "";

   }else {

      text.innerHTML = "Error";

   }

}
function check_all()
{

   

   if(check_Email() && check_contact() && check_pwd())
   {
      return true;

   }else{
       alert("Check invalid inputs");
   }

}



 </script>
<style type="text/css">
        body{
            background-image: url(a12.jpg);
            background-size: cover;
        }
        </style>
<?php

    require "footer.php";

?>