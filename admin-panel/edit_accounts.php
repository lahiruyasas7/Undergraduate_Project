
<?php

include "includes/header.php";
include "includes/listaccounts-sidebar.php";
include "includes/navbar.php";
include ("Database/dbconfig.php");

?>

<div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Admin Accounts</h1>
</div>

<!-- Container fluid -->
<div class="container-fluid">
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
    </div>

    <div class="card-body">
    
    <?php

    if(isset($_POST['edit_btn']))
    {

        $email = $_POST["edit_id"];
        $query = "SELECT * FROM adminreg WHERE email='$email' ";
        $query_run = mysqli_query($connection,$query);

        foreach($query_run as $row)
        {

            ?>
        
        <form action="register-code.php" method="POST">

        <input type="hidden" name="edit_id" value="<?php echo $email ?>">

    <div class="form-group">
    <label>First Name</label>
    <input type="text" id="first_name" name="edit_firstname" value="<?php echo $row['firstname'] ?>" class="form-control"  placeholder="Enter your First name" onkeyup="validate_fname()"  maxlength="40" required>
    <small id="first" style="color: red"></small>
    </div>

    <div class="form-group">
    <label>Last Name</label>
    <input type="text" id="last_name" name="edit_lastname" value="<?php echo $row['lastname'] ?>" class="form-control"  placeholder="Enter your Last name" onkeyup="validate_lname()" maxlength="40" required>
    <small id="last" style="color: red"></small>
    </div>

    <div class="form-group">
    <label>Email address</label>
    <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"  id="email_validation" onkeyup="validate_email()"  placeholder="Enter email" maxlength="50" required> 
    <small id="email" style="color: red"></small>
    </div>

    <div class="form-group">
    <label>Contact number</label>
    <input type="text" id="contact_validation" name="edit_contact" value="<?php echo $row['contactno'] ?>" class="form-control" onkeydown="check_contact()"  placeholder="Enter the Contact number" maxlength="10" required>
    <small id="contact" style="color: red"></small>
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control"  placeholder="Enter the Password" maxlength="25" required>
    </div>

    <?php

        }

    }

?>
    
    <a href="listaccounts.php" class="btn btn-danger">Cancel</a>
    <button type="submit" name ="updatebtn" class="btn btn-primary">Update</button>
    </form>
    </div>

</div>
</div>
<?php

include "includes/scripts.php";
include "includes/footer.php";

?> 