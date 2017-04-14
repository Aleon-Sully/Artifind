<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
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
						<a href="../Register/signUp.php"></signUp>Artisan? Sign Up</a>			
				</li>
				<li>
					<a href="../Login/Sign_in.php">Sign In</a>

				</li>
				<li>
					<a href="../Pages/About.php">About Us</a>

				</li>
				<li>
					<a href="contactUs.php"> Contact Us</a>
			</ul>
		</div>
	</nav>
</div>

<br><br><br><br>
<form style=" position: absolute; margin-top:-1%; left: 30%;  height: 59%;
    width: 45%; padding-top: 15px;  text-align: center;">
	<input type="text" id="fNameField" class="form-control name-form" name="fName" placeholder="First Name" style="border: none; border-bottom: 2px solid darkred;"  ><br>
	<input type="text" id="lNameField" class="form-control name-form" name="lName" placeholder="Last Name" style="border: none; border-bottom: 2px solid darkred;"><br>
	<input type="text" id="email" class="form-control name-form" name="email" placeholder="Email Address" style="border: none; border-bottom: 2px solid darkred;"><br>
    <textarea rows="4" cols="50" name="msg" ></textarea><br>

	<input type="button" value="Submit" name="btnSignUp" id="btnSignUp" onclick="validate()"
	 style="font-size: 16px; background-color: white; color:black; border: 2px solid limegreen">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>

<script>

//Capturing desired elements in variables
	var fName = document.getElementById("fNameField");
	var lName = document.getElementById("lNameField");
	var email = document.getElementById("email");

	//Validate function
	function validate(){
		if(fName.value != "" && lName != "" && email.value.includes("@") && email.value.includes(".com")){
			location.href = "../index.html";
		}else{
			
		alert("Invalid credentials");
		}
	}

</script>


<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="../source/js/isotope.js"></script>
<script type="text/javascript" src="../source/js/myscript.js"></script> 
<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>