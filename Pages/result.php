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
if(isset($_GET["key"]) || isset($_GET["place"])){
	$place =$_GET["place"] ;
	$key =$_GET["key"] ;
 global $obj;	
$obj->query("
	SELECT artisan.*, review.ratings FROM artisan 
	INNER  JOIN review ON artisan.artisan_id = review.au_ID
	WHERE artisan.location = '$place' OR artisan.first_name LIKE '%$key'  OR artisan.last_name LIKE '%$key'
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
			<ul class="givusacall" >
				<li >Give us a call : +233 50 121 2329 </li>
			</ul>
	</div>
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
						 	<li><a href="result.php"> <?php echo $value["profession"]?></a></li>
							
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

<!-- ________________________SEARCH RESULTS _______________________-->
<div class="latestcars">
	<h1 class="text-center">&bullet;SEARCH RESULTS&bullet;</h1>
</div>


<br>
<br>
<br>
<br>
<br><br>
<br>
<!-- ________________________Artisans Thumbnail________________-->
	<div class="grid">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
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
	 							<a href="../Pages/userView.php"><button>READ MORE</button></a><br>
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
					<div style="text-align: center;">
    						<p style="padding-left: 650;" >Sorry, there is no such in our Database. Kindly</p> <navbar-brand> <a href = "../Contact_us/contactUs.php"> Contact us </a>
					</div>
			<?php endif;	?>
		</div>
	</div>
	</div>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu" style="margin-top:150px;">
		<p style="margin-top:-80px;">"We link you to the best artisans around"</p>
		 <img src="../image/line.png" alt="line" style="margin-top:10px;"> <br>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					 Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a> 
				</div>
			</div>
	</div>
<script type="text/javascript" src="../JS/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="../JS/js/isotope.js"></script>
<script type="text/javascript" src="../JS/js/myscript.js"></script> 
<script type="text/javascript" src="../JS/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="../JS/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>