<?php
 require "header.php";
 include ("Database/dbconfig.php");

?>

<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8" />
    <title>Review & Rating System in PHP & Mysql using Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<div class="menu-bar">

<ul class="nav nav-tabs justify-content-center">

    <li class="nav-item">
        <a class="nav-link " href="company-home-page.php">Home Page</a>
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

<head>
	<style>
	#map {
		height: 600px;
		width: 100%;
	}
	</style>
</head>
<body>
	<h3>job seekers locations</h3>
	<div id="map"></div>
	<script>
    
	function initMap() {
		
		var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 10,
		center: {lat: 7.287903, lng: 80.635565
},
		});
		/*var marker = new google.maps.Marker({
		position: uluru,
		map: map
		});*/

        addmarker({coords:{lat:7.287903, lng:80.635565}, content:'<h1>Lahiru Yasas</h1>'});
        addmarker({coords:{lat:7.3, lng: 80.65}, content:'<h1>Lahiru Yasas</h1>'});
        addmarker({coords:{lat:7.4, lng: 80.66}});

        function addmarker(props){
            var marker = new google.maps.Marker({
                position:props.coords,
                map:map,

            })
        }
        if(props.content){
        var infowindow = new google.Map.infowindow({
            content :props.content,
        });
        addmarker.addListner('click', function(){
            infowindow.open(map, marker);
        });
    }
	}
	</script>
	<script async defer
	src=
"https://maps.googleapis.com/maps/api/js?key=
AIzaSyD5HO7nG68NTvuOjCRh7WXAUTElh_snwX4&callback=initMap">
	</script>
</body>


<?php

require "footer.php";

?>