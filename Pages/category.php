<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Category</title>
	<meta name="description" content="">

	<meta name="author" content="Cynthia Gouanfo, Template from: Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/slider.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">


	<?php
/*
 * This file is part of the ArtiFind folder
 *
 * (c) Delco developpers
 * 	@ author Cynthia Gouanfo
 *
 */
	// including the database file 
include "Database/dbConnectionClass.php";
	// object of the database
$obj = new dbconnection;

?>
</head>
<body>
	<div class="allcontain">
		<div class="header">
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
					<li class="active"><a href="../index.php">Home</a> </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<!-- displaying the professions in the database on the drop down menu item Category-->
							<?php include "Pages/profession.php"; ?>
							<?php if(getProfession()) :?>
								<?php foreach(getProfession() as  $value):	?>
									<li><a href="Pages/result.php?profession=<?php echo $value["profession"]?>"> <?php echo $value["profession"]?></a></li>

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
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
	<script type="text/javascript" src="js/jquery.1.11.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
