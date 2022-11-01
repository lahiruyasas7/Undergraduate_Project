<?php

    require "header.php";
    session_destroy();

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);}
html,body{
    position: relative;
    height: 100%;
}

.login-container{
    position: relative;
    width: 300px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
}

.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

</style>

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
<style type="text/css">
        body{
            background-image: url(a4.jpg);
            background-size: cover;
          
        }
        </style>



<!-- Navigation Bar Ends -->

<div class="container">
	<div class="login-container">

     <div class="btn-group">
          <a href="login.php" class="btn btn-primary" aria-current="page">employee</a>
          <a href="#" class="btn btn-primary active">Employer</a>
     </div>

            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="login-company-code.php" method="post">
                    <input name="username" id="username" type="text" placeholder="username">
                    <input type="password" id="password" name="pass" placeholder="password">
                    <button class="btn btn-info btn-block login" onclick="validate()" name="submit" type="submit">Login</button>
               </form>
            </div>
        </div>
        
</div>

<script>

function validate()
{

     var user = document.getElementById("username").value;
     var pwd = document.getElementById("password").value;
     var setter = document.getElementById("checking");

     if(user=="" || pwd=="")
     {
          alert("Enter username & password to Login !!");

     }

}

</script>

<?php

    require "footer.php";

?>