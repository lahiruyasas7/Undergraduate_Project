$(document).ready(function (){

    $('.checking_email').keyup(function (e) {

        //alert("Hey im working");

        var email = $('.checking_email').val();
        //alert(email);
        $.ajax({

            type: "POST",
            url: "register-code.php",
            data: {

                "check_submit_btn": 1,
                "email_id": email,

            },
            success: function(response){

                //alert(response);
                $('.error_email').text(response);

            }

        });

    });

});


function validate_email()
{

    var email = document.getElementById("email_validation").value;
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    var text = document.getElementById("email");

    if(email.match(pattern))
    {

        text.innerHTML = "";
        return true;

    }else {

        text.innerHTML = "Your Email Address is invalid";
        return false;

    }

}

function check_contact()
{

    var input = document.getElementById("contact_validation").value;
    var text = document.getElementById("contact");

    if(input.length!=10 || isNaN(input))
    {

        text.innerHTML = "Invalid contact number";
        return false;

    }else {

        text.innerHTML = "";
        return true;

    }

}


function check_pwd()
{

    var input1 = document.getElementById("con_pwd").value;
    var input2 = document.getElementById("pwd").value;
    var text = document.getElementById("confirm_pwd");

    if(input1 != input2)
    {

        text.innerHTML = "Password does not match";
        return false;

    }else {

        text.innerHTML = "";
        return true;

    }

}


function validate_fname()
{

    var input = document.getElementById("first_name").value;
    var text = document.getElementById("first");

    if(!isNaN(input))
    {
        text.innerHTML = "Enter valid name";

    }else {

        text.innerHTML = "";

    }

}

function validate_lname()
{

    var input = document.getElementById("last_name").value;
    var text = document.getElementById("last");

    if(!isNaN(input))
    {
        text.innerHTML = "Enter valid name";

    }else {

        text.innerHTML = "";

    }

}

function validate_all()
{

    if( validate_email() && check_contact() && check_pwd() )
    {

        return true;

    }else {

        alert("Check invalid inputs");
        return false;

    }

}


// Login Page Validations



function check_blanks()
{

    var input_username = document.getElementById("username").value;
    var input_pwd = document.getElementById("password").value;

    if(input_username=='' || input_pwd=='') 
    {

        alert("Insert valid username & password to login !!");

    }else {

        return true;

    }


}


function check_user()
{

    var input = document.getElementById("username").value;
    var text = document.getElementById("email");

    if(input =='' || input==null)
    {

        text.innerHTML = "Enter the email address to login";

    }else {

        text.innerHTML = "";

    }

}


// Forgot Password Page Validations

function email_val()
{

    var input = document.getElementById("forgot_email").value;
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    var text = document.getElementById("forgot_error");
    
    if(input =='' || input==null)
    {
        text.innerHTML = " Enter your email to reset the password";

    }else {

        if(input.match(pattern))
        {
            text.innerHTML = "";

        }else {

            text.innerHTML = "Your Email Address is invalid";

        }
    }

}


function validate_forgot()
{

    var input = document.getElementById("forgot_email").value;

    if(input == '' || input==null)
    {

        alert("Please enter the email address to reset your password !");

    }

}
