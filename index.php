<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Delcosite</title>
	<meta name="description" content="">
<!--
Template gotten from: 
Template 2079 Garage
http://www.tooplate.com/view/2079-garage
-->
<?php


/*
 * This file is part of the ArtiFind folder
 *
 * (c) Delco developpers
 * 	@ author Cynthia Gouanfo
 *
 */

// include the database to file
include "Database/dbConnectionClass.php";

//creating an object of the database
$obj = new dbconnection;
/*
 * This function returns the distinct locations in the database
 *	@return $data location in the database
 */
function getLocation()
{
	global $obj;	
	$obj->query("SELECT distinct location from artisan");
	$data = array();
	while($row = $obj->fetch())
	{
		$data[] = $row;

	}

	return $data;
}
?>

<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="CSS/slider.css">
<link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
</head>
<body>
	<!-- Hide the scrollbar -->
	<style type="text/css">
		body {
			overflow-y:hidden;
		}
	</style>

	<?php
	require_once('Unsecure/processUnsecure.php');
	?>
	<!-- Header -->
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
					<a class="navbar-brand logo" href="#"><img src="image/Logo.jpg" alt="logo"></a>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="upmenu">
				<ul class="nav navbar-nav" id="navbarontop">
					<li class="active"><a href="index.php">Home</a> </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php include "Pages/profession.php"; ?>
							<!-- displaying the professions in the database on the drop down menu item Category-->
							<?php if(getProfession()) :?>
								<?php foreach(getProfession() as  $value):	?>
									<li><a href="Pages/result.php?profession=<?php echo $value["profession"]?>"> <?php echo $value["profession"]?></a></li>
								<?php endforeach;	?>
							<?php endif;	?>

						</ul>
					</li>
					<li class="active"><a href="Register/signUp.php">Artisan? Sign Up</a> </li>
					<li class="active"><a href="Login/Sign_in.php">Sign In</a> </li>
					<li class="active"><a href="Pages/About.php">About Us</a> </li>
					<li class="active"><a href="Contact_us/contactUs.php">Contact Us</a> </li>
				</ul>
			</div>
		</nav>
	</div>
	<!--_______________________________________ Carousel__________________________________ -->
	<div class="allcontain">
		<div id="carousel-up" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner " role="listbox">
				<div class="item active">
					<img src="image/newimage1.jpg" alt="oldcar">
					<div class="carousel-caption">
						<h2>DELCO</h2>
						<p>We link you to the best artisans in the country </p>
					</div>
				</div>
				<div class="item">
					<img src="image/boilerimage.jpg" alt="porche">
					<div class="carousel-caption">
						<h2>EXPLORE</h2>
						<p>Our artisans are trustworthy, reliable <br>
							and result-oriented</p>
						</div>
					</div>
					<div class="item">
						<img src="image/carpenter.jpg" alt="benz">
						<div class="carousel-caption">
							<h2>CONNECTING PEOPLE</h2>
							<p>Whether in the city, village or town <br>
								we think about you</p>
							</div>
						</div>
					</div>
					<nav class="navbar navbar-default midle-nav">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
								<h1>SEARCH</h1>
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<br>
						<div class="collapse navbar-collapse" id="navbarmidle" style="margin-bottom:3%;">
							<div class="searchtxt" style="margin-bottom:  -120px; ">
								<h1 style="margin-bottom:  120px; ">SEARCH</h1>
							</div>
							<form class="navbar-form navbar-left searchformmargin" role="search" action="Pages/result.php" method = "GET">
								<div class="form-group">
									<input type="text" class="form-control searchform" required name = "key" placeholder="Enter Keyword">
								</div>
								<div class="form-group">
									<select class="form-control searchform placeholder" name = "place">
										<option>Location</option>
										<!-- displaying the locations in the database on the drop down -->
										<?php if(getLocation()) :?>
											<?php foreach(getLocation() as  $value):	?>
												<option style = "color: black"value = "<?php echo $value["location"]	?>"><?php echo $value["location"]	?></option>
												<li></li>
											<?php endforeach;	?>
										<?php else: ?>
										<?php endif;	?>
									</select>
								</div>
								<button style="margin-left:10px" class="searchbutton" onclick="result()" name = "submit" type="submit"><span class="glyphicon glyphicon-search "></span></button>
							</form>

						</div>
					</nav>
				</div>
			</div>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/isotope.js"></script>
			<script type="text/javascript" src="js/myscript.js"></script>
			<script type="text/javascript" src="js/jquery.1.11.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script>
		</body>
		</html>
