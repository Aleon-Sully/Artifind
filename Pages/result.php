<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Results</title>
	
	<meta name="author" content="cynthia Gouanfo, Template from: Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/slider.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">

<?php

// include the database
include "../Database/dbConnectionClass.php";

$obj = new dbconnection;
function getResults()
{
if(isset($_GET["key"]) && isset($_GET["place"])){
	$place =$_GET["place"] ;
	$key =$_GET["key"] ;
 global $obj;	
$obj->query("SELECT artisan.*, review.ratings FROM artisan 
	INNER  JOIN review ON artisan.artisan_id = review.au_ID
	WHERE artisan.address = '$place'
	ORDER BY review.ratings");
$data = array();
while($row = $obj->fetch())
{
   $data[] = $row;

}

	return $data;
}
}
?>
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
				<li>Give us a call : +233 50 121 2329 </li>
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
				<li class="active"><a href="../index.php">HOME</a> </li>
				<li class="active"><a href="../Register/signUp.php">ARTISAN? SIGN UP</a> </li>
				<li class="active"><a href="../Login/Sign_in.php">SIGN IN</a> </li>
				<li class="active"><a href="../Pages/About.php">ABOUT US</a> </li>
				<li class="active"><a href="../Contact_us/contactUs.php">CONTACT US</a> </li>
			</ul>
		</div>
	</nav>
</div>

<!-- ________________________SEARCH RESULTS _______________________-->
<div class="latestcars">
	<h1 class="text-center">&bullet;SEARCH RESULTS&bullet;</h1>
	<ul class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
		<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR" role="button" style="left: 150px">MOST RECENT </a></li>
		<li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR" role="button" style="left: 150px">MOST POPULAR </a></li>
		<li  role="presentation"><a href="#" class="alphSort" role="button" style="left: 150px">ALPHABETICAL </a></li>
		<li id="hideonmobile">
	</ul>
</div>
<br>
<br>
<!-- ________________________Artisans Thumbnail________________-->
	<div class="grid">
		<div class="row">
			<?php if(getResults()) :?>
			 <?php foreach(getResults() as  $value):	?>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="../image/francis.jpeg" alt="francis">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name"><?php echo $value["first_name"]  .  " " . $value["last_name"]?></h3>
								<p><?php echo $value["about_me"]?></p>
	 							<a href="profile.php"><button>READ MORE</button></a><br>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
				<?php endforeach;	?>
				<?php else: ?>
			<?php endif;	?>
		</div>
	</div>
<!-- _______________________________News Letter ____________________-->
	<div class="newslettercontent">
		<div class="leftside">
			<img src="../image/border.png" alt="border">
			<h1>NEWSLETTER</h1>
			<p>Subscribe to the mailing list to <br>
				receive updates on new artisans, special offers <br>
				and other discount information.</p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="../image/newsletter.jpeg" alt="newsletter">
			<input type="text" class="form-control" id="subemail" placeholder="EMAIL">
			<button>SUBSCRIBE</button>
		</div>
	</div>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="../image/Logo.jpg" alt="Logo"><span class="dotlogo">&bullet;;</span>
		</div>
		<ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="About.php" role="button" style="left: 300px">ABOUT US</a></li>
			<li role="presentation"><a href="../Contact_us/contactUs.php"  role="button" style="left: 300px">CONTACT US</a></li>
		</ul>
		<p>"We link you to the best artisans around"</p>
		 <img src="../image/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					 Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a> 
				</div>
			</div>
	</div>
</div>

<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="../source/js/isotope.js"></script>
<script type="text/javascript" src="../source/js/myscript.js"></script> 
<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>