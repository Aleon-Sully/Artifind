<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign up page</title>
	<meta name="description" content="">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../style/slider.css">
	<link rel="stylesheet" type="text/css" href="../style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../style/contactstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
	include('../Layout/menubar.php');

</head>
<body>
<?php
require_once('../Unsecure/processUnsecure.php');
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
				<a class="navbar-brand logo" href="#"><img src="../image/Logo.jpg" alt="logo"></a>
			</div>	 
		</div>

		
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">

					<li  class="active"><a style="margin-right: 10px;" href="../index.php" >HOME</a>
				 </li>
				<li>
						<a href="../Register/signUp.php">Artisan?Sign Up</a>			
				</li>
				<li>
					<a href="Sign_in.php">Sign In</a>

				</li>
				<li>
					<a href="../Pages/About.php">About Us</a>

				</li>
				<li>
					<a href="../Contact_us/contactUs.php">Contact Us</a>

				</li>
			</ul>
		</div>
	</nav>
</div>


<div class = "container" align="center">
	<form style="margin-top:15%; left: 30%; position: absolute; width: 45%;" form id="log" action="" method="post">
			<h1>SIGN IN</h1>
				<input type="text" id="uname" class="form-control name-form" name="uname" placeholder="Username" style="border:none; border-bottom:2px solid black;">
				<input type="text" id="pword" class="form-control email-form" name="pwd" placeholder="Password" style="border:none; border-bottom:2px solid black;">
				<input type="button" value="Login" name="btnSubmit" id="btnSubmit" data-submit="...Sending" onclick="return validatelogin()" style="font-size: 16px; background-color: white; color:black; border: 2px  black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </form>
	 </div>

<br><br><br>

<script type="text/javascript" src = "../js/validate.js">

// //Capturing desired elements in variables
// 	var username = document.getElementById("uname");
// 	var password = document.getElementById("pword");

// 	//Validate function
// 	function validate(){
// 		if(username.value != "" && password != ""){
// 			location.href = "../Pages/profile.php";
// 			alert("Welcome back " + username.value);
// 		}else{
// 			alert("Invalid details");
// 		}
// 	}

</script>


</body>
</html>