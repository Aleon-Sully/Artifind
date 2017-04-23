<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Review</title>
	<meta name="description" content="">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="js/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/contactstyle.css">
</head>
<body>
<?php
include('../Unsecure/processUnsecure.php');
?>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +233 50 121 2329 </li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/Logo.jpg" alt="logo"></a>
			</div>	 
		</div>

		
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">

				<li class="active"><a style="margin-right: 10px;" href="home.php" >Home</a></li>
				<li><a href="../Register/signUp.php">Sign Up</a></li>
				<li><a href="../Login/Sign_in.php">Sign In</a></li>
				<li><a href="../Pages/About.php">About Us</a></li>
				<li><a href="../Pages/Contact">Contact Us</a></li>
			</ul>
		</div>
	</nav>
</div>


<!-- // require_once 
// include() -->
<div class='movie_choice'>
Give us feedback! Let us know how this artist is doing by leaving your rating.
    <div id="rate" class="stars">
        <div class="star_1"></div>
        <div class="star_2"></div>
        <div class="star_3"></div>
        <div class="star_4"></div>
        <div class="star_5"></div>
        <div class="overall_rating">Overall Rating</div>
    </div>
</div>

	
	<div align="center">
	<form style="margin-top:15%; left: 30%; position: absolute; width: 45%;">
			<h1>REVIEW</h1>
			<fieldset><input type="text" id="first_name" class="form-control name-form" placeholder="First Name" style="border:none; border-bottom:1px solid black;"></fieldset>
			<fieldset><input type="text" id="last_name" class="form-control email-form" placeholder="Last Name" style="border:none; border-bottom:1px solid black;"></fieldset>
			<fieldset><input type="textarea" id="comments" class="form-control email-form" placeholder="Comments..." style="border:none; border-bottom:1px solid black;"></fieldset>
				<fieldset><input type="text" id="email" class="form-control email-form" placeholder="E-mail" style="border:none; border-bottom:1px solid black;"></fieldset>
				<input type="button" href="profile.html" value="Review" name="btnReview" id="btnReview" onclick="validateReview()" style="font-size: 16px; background-color: white; color:black; border: 1px solid black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </form>
	 </div>

</body>
</html>
