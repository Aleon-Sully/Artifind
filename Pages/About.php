<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>About Us</title>
	<meta name="description" content="">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../JS/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../JS/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../CSS/slider.css">
	<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

	<?php  
		include "../Database/dbConnectionClass.php";

$obj = new dbconnection;

	?>
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
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
								<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			          <?php include "../Pages/profession.php"; ?>
			          	<?php if(getProfession()) :?>
						 <?php foreach(getProfession() as  $value):	?>
						 	<li><a href="#"> <?php echo $value["profession"]?></a></li>
							
							<?php endforeach;	?>
			        <?php endif;	?>
			            
			          </ul>
			        </li>
				<li class="active"><a href="../Register/signUp.php">Artisan? Sign Up</a> </li>
				<li class="active"><a href="../Login/Sign_in.php">Sign In</a> </li>
				<li class="active"><a href="../Pages/About.php">About Us</a> </li>
				<li class="active"><a href="../Contact_us/contactUs.php">Contact Us</a> </li>
			</ul>
		</div>
	</nav>
</div>

<br><br><br><br><br><br><br><br><br><br><br>

    <section style="margin-left: 380px;">
        Have you ever needed a carpenter to fix your windows and doors? Have you <br> 
        ever wanted to find a professional plumber to fix all your water issues? If your mind <br>
        has ever been boggled about these questions and more, we have a <br>
         solution for you. We are DELCO and we present ourselves to you. We are all <br> 
         about linking qualified personnel and artisans to your doorstep.<br>
    </section>


<script type="text/javascript" src="JS/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="JS/js/isotope.js"></script>
<script type="text/javascript" src="JS/js/myscript.js"></script> 
<script type="text/javascript" src="JS/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="JS/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>