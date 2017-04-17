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

// include the database
include "Database/dbConnectionClass.php";

$obj = new dbconnection;
function getLocation()
{
 global $obj;	
$obj->query("Select address from artisan");
$data = array();
while($row = $obj->fetch())
{
   $data[] = $row;

}

	return $data;
}
?>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
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

					<li  class="active"><a style="margin-right: 10px;" href="index.php" >HOME</a>
				 </li>
				<li>
						<a href="Register/signUp.php">Artisan?Sign Up</a>
				</li>
				<li>
					<a href="Login/Sign_in.php">Sign In</a>

				</li>
				<li>
					<a href="Pages/About.php">About Us</a>

				</li>
				<li>
					<a href="Contact_us/contactUs.php">Contact Us</a>

				</li>
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="image/electrician.jpg" alt="oldcar">
				<div class="carousel-caption">
					<h2>DELCO</h2>
					<p>We link you to the best artisans in the country </p>
				</div>
			</div>
			<div class="item">
				<img src="image/alapa.jpg" alt="porche">
				<div class="carousel-caption">
					<h2>EXPLORE</h2>
						<p>Our artisans are trustworthy, reliable <br>
						and result-oriented</p>
				</div>
			</div>
			<div class="item">
				<img src="image/francis.jpg" alt="benz">
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
			<div class="collapse navbar-collapse" id="navbarmidle">
				<div class="searchtxt">
					<h1>SEARCH</h1>
				</div>
				<form class="navbar-form navbar-left searchformmargin" role="search">
					<div class="form-group">
						<input type="text" class="form-control searchform" placeholder="Enter Keyword">
					</div>
				</form>
				<ul class="nav navbar-nav navbarborder">
					<li class="li-category">
						<a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Location<span class="glyphicon glyphicon-chevron-down downicon"></span></a>
						<ul class="dropdown-menu" id="mydd">
						<?php if(getLocation()) :?>
							<?php foreach(getLocation() as  $value):	?>
								<li><?php echo $value["address"]	?></li>
							<?php endforeach;	?>
						<?php else: ?>

						<?php endif;	?>
						</ul>
					</li>
					
					</li>
					<li class="li-search"> <button class="searchbutton" onclick="result()"><span class="glyphicon glyphicon-search "></span></button></li>
				</ul>

			</div>
		</nav>
	</div>
</div>

<script>
	function result(){
		location.href = "Pages/result.php"
	}
</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
<script type="text/javascript" src="js/jquery.1.11.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
