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
<link rel="stylesheet" type="text/css" href="../js/bootstrap-3.3.6-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/slider.css">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
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
				<li class="active"><a href="../index.php">Home</a> </li>
				<li class="active"><a href="../Pages/category.php">Category</a> </li>
				<li class="active"><a href="../Register/signUp.php">Artisan? Sign Up</a> </li>
				<li class="active"><a href="../Login/Sign_in.php">Sign In</a> </li>
				<li class="active"><a href="../Pages/About.php">About Us</a> </li>
				<li class="active"><a href="../Contact_us/contactUs.php">Contact Us</a> </li>
			</ul>
		</div>
		</nav>
	</div>

	<br><br><br><br>
	 <?php  require_once('../Unsecure/processUnsecure.php'); ?>

	<form style=" position: absolute; margin-top:-1%; left: 30%;  height: 59%;
	width: 45%; padding-top: 15px;  text-align: center;" id="reg" action="" method="post" > 
	<fieldset>
	<input type="text" id="address" class="form-control name-form" name="address" placeholder="Address" style="border: none; border-bottom: 2px solid darkred;"  ><br>
    </fieldset>

    <fieldset>
    <input type="text" id="telephone" class="form-control name-form" name="telephone" placeholder="Telephone number" style="border: none; border-bottom: 2px solid darkred;"><br>
	</fieldset>

    <fieldset>
	<textarea row="4"  col="50" id="aboutme" class="form-control name-form" name="aboutMe" placeholder="About me" style="border: none; border-bottom: 2px solid darkred;"></textarea><br>
	</fieldset>
	<fieldset>
    <input type="text" id="location" class="form-control name-form" name="location" placeholder="Location" style="border: none; border-bottom: 2px solid darkred;"><br>
	</fieldset>

	<fieldset>
    <input type="text" id="Profession" class="form-control name-form" name="profession" placeholder="Profession" style="border: none; border-bottom: 2px solid darkred;"><br>
	</fieldset>
	<fieldset>
 	Gender: 
		<input type="radio" name="gender" value="f" id="gender">female
		<input type="radio" name="gender" value="m" id="gender">male
		<br>
		</fieldset>
	<fieldset>
	<br>
	Upload your profile pic:
    <input type="file" id="file" class="form-control name-form" name="pic" placeholder="pic" accept="image/*" style="border: none; border-bottom: 2px solid darkred;"><br>
	</fieldset>	
	<input type="button" href="index.html" value="Cancel" name="btnCancel" id="btnCancel" 
	style="font-size: 16px; background-color: white; color:black; border: 2px solid red; " onclick=" cancel()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Finish" name="finishBtn" id="finishBtn" 
	style="font-size: 16px; background-color: white; color:black; border: 2px solid limegreen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</form>

<script>

//Capturing desired elements in variables
/*var address = document.getElementById("address");
var telephone = document.getElementById("telephone");
var location = document.getElementById("location");
var profession = document.getElementById("profession");
var aboutme = document.getElementById("aboutme");
var gender = document.getElementById("gender");
*/



	//Validate function
	/*function validate(){
		if(telephone.value != "" && address.value != "" && location.value != "" || aboutme.value != "" || profession.value != "" || gender.checked != ""){
			location.href = "../Pages/profile.php";

		}else{
			alert("Invalid credentials. Please fill out the entire form");
		}
	}*/

	</script>


<script type="text/javascript" src="js/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="js/js/isotope.js"></script>
<script type="text/javascript" src="js/js/myscript.js"></script> 
<script type="text/javascript" src="js/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="js/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>