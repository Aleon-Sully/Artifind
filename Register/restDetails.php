<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<meta name="description" content="">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
<meta name="author" content="Web Domus Italia">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../source/bootstrap-3.3.6-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../style/slider.css">
<link rel="stylesheet" type="text/css" href="../style/mystyle.css">
</head>
<body>
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
				<li>Give us a call : +233 50 121 2329  </li>
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

					<li class="active"><a href="../index.php"  style="margin-left: 50px;">HOME</a> </li>
				</li>
				<li>
					<a href="signUp.php">Artisan? Sign Up</a>			
				</li>
				<li>
					<a href="../Login/Sign_in.php">Sign In</a>

				</li>
				<li>
					<a href="../Pages/About.php">About Us</a>

				</li>
				<li>
					<a href="../Contact_us/contactUs.php">Contact Us</a>
				</ul>
			</div>
		</nav>
	</div>

	<br><br><br><br>
	 <?php  require_once('../Database/dbConnectionClass.php'); ?>

	<form style=" position: absolute; margin-top:-1%; left: 30%;  height: 59%;
	width: 45%; padding-top: 15px;  text-align: center;" form id="reg" action="" method="post">
	<fieldset>
		<input placeholder="Address" id= "address" type="text" tabindex="1" name="address"  autofocus>
	</fieldset>
	<fieldset>
		<input placeholder="Telephone Number" id= "telephone" type="text" tabindex="4" name="telephone" >
	</fieldset>
	<fieldset>
		<input placeholder="Date Of Birth" id= "birth" type="text" tabindex="5" name="birth">
	</fieldset>
	<fieldset>
		<input placeholder="status" id= "status" type="text" tabindex="5" name="status">
	</fieldset>
	<fieldset>
		Gender: 
		<input type="radio" name="gender" value="f" id="gender" >female
		<input type="radio" name="gender" value="m" id="gender">male
		<br>
		</fieldset>
	<fieldset>
		<button name="register" type="submit" id="registerSubmit">Submit</button>
	</fieldset>
</form>

<script>

//Capturing desired elements in variables
var address = document.getElementById("address");
var telephone = document.getElementById("telephone");
var birth = document.getElementById("birth");

	//Validate function
	function validate(){
		if(birth.value != "" && address.value != ""){
			location.href = "../Pages/profile.php";
		}else{
			alert("Invalid credentials");
		}
	}

	</script>


<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>