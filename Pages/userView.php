<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/profileClass.php');
session_start();
$id = $_SESSION['id'];

		$obj = new dbconnection;
?>
<html>
<head>
<title>Delcosite</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mungo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../CSS/mystyle.css" rel="stylesheet" type="text/css" media="all" />
<link href="../CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!-- js -->
<script src="../JS/jquery.min.js"> </script>
<script src="../JS/bootstrap.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../JS/move-top.js"></script>
<script type="text/javascript" src="../JS/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>

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
				<li class="active"><a style="margin-left: 50px;" href="../index.php">Home</a> </li>
				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			          <?php include "../Pages/profession.php"; ?>
			          	<?php if(getProfession()) :?>
						 <?php foreach(getProfession() as  $value):	?>
						 	<li><a href="../Pages/result.php?profession=<?php echo $value["profession"]?>"> <?php echo $value["profession"]?></a></li>
							
							<?php endforeach;	?>
			        <?php endif;	?>
			            
			          </ul>
			        </li>

				<li>
						<a href="../Register/signUp.php">Artisan?Sign Up</a>
				</li>
				<li>
					<a href="../Login/Sign_in.php">Sign In</a>

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
	<div class="clearfix"> </div>
	</div>
</div>
<div class="banner">
	<div class="container">
		<div class="banner-info">
			<div class="banner-text">
				<?php
				$s = new profileClass;
				$s->loadName($id);
				$s->loadProfession($id);
				?>
			</div>
		</div>
	</div>
</div>
<div class="navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-7" id="cl-effect-7">
					  <ul class="nav navbar-nav">
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#skills">Skills</a></li>
						<li><a class="scroll" href="#portfolio">Portfolio</a></li>
						<li><a class="scroll" href="#contact">Contact</a></li>
					  </ul>
					  </nav>
			  <div class="clearfix"> </div>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
<!--about-->
<div id="about" class="about">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>About Me</h2>
					<span> </span>
				</div>
				<!-- head-section -->
				<!-- about-grids -->
				<div class="about-grids">
					<div class="col-md-6 about-left-grid">
						<?php $s->loadName($id); 
						      $s->loadProfession($id);
						      $s->loadAboutMe($id);?>
						
				
					</div>
				<!-- about-grids -->
			</div>
			<div class="clearfix"> </div>
		</div>
<!--/about-->
<!--skills-->
<div class="skills" id="skills">
	<div class="container">
		<div class="skills-info">
			<h3>Skills</h3>
			<ul>
            <?php $s->loadSkills($id);?>
			</ul>
			<span> </span>
			</div>
		</div>
	</div>
<!--/skills-->
<!--portfolio-->
<!--light-box-js -->
				<script src="../JS/jquery.chocolat.js"></script>
				<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
				<!--light-box-files -->
				<script type="text/javascript" charset="utf-8">
				$(function() {
					$('.moments-bottom a').Chocolat();
				});
				</script> 
			<!--//end-gallery js-->
<div id="portfolio" class="portfolio">
			<div class="container">
				<h3>Portfolio</h3>
				<span> </span>
        <div class="gallery-info">
<?php 
				$s->loadPortfolio($id)?>
				<div class="clearfix"> </div>
			</div>
			</div>
</div>
<!--/portfolio-->
<!--contact-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-info text-center">
			<h3>CONTACT</h3>
			<span> </span>
				<ul>
				<?php 
				$s->loadAddress($id);
				$s->loadEmail($id);
				$s->loadTel($id); ?>
					<li></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

	</div>
</div>
<!--/contact-->
	<div class="bottommenu">

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
   <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<?php session_destroy(); ?>
</body>
</html>