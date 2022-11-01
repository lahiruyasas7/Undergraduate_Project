<?php

include "includes/header.php";
include "includes/register-sidebar.php";
include "includes/navbar.php";


?>

<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Create New Admin Account</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-center mb-3" style=" width: 1000px;">
<div class="card shadow mb-4">
  <div class="card-header">

<form action="register-code.php" method="POST" id="form">

  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="firstname" class="form-control" id="first_name"  placeholder="Enter your First name" onkeyup="validate_fname()" maxlength="40" required>
    <small id="first" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input type="text" name="lastname" class="form-control" id="last_name"  placeholder="Enter your Last name" maxlength="40" onkeyup="validate_lname()" required>
    <small id="last" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control checking_email"  id="email_validation"  placeholder="Enter email" onkeyup="validate_email()" maxlength="50" required>
    <small id="email" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Contact number</label>
    <input type="text" id="contact_validation" name="contact" class="form-control"  placeholder="Enter the Contact number" onkeydown="check_contact()" maxlength="10" required>
    <small id="contact" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" id="pwd"  placeholder="Enter the Password" maxlength="25" required>
    <small id="pwd" style="color: red"></small>
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="confirmpassword" id="con_pwd" class="form-control"  placeholder="Re-Enter the Password" maxlength="25" onkeyup="check_pwd()" required>
    <small id="confirm_pwd" style="color: red"></small>
  </div>


  <button type="submit" name ="submit" class="btn btn-primary" onclick="validate_all()">Submit</button>
</form>

   </div>
</div>
</div>
<?php

include "includes/scripts.php";
include "includes/footer.php";

?> 