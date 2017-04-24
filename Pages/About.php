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
	<br><br><br><br><br><br><br>
         <H1 style="margin-left: 650px;">ABOUT US</H1>

	<section style="margin-left: 500px;">
		<h5>
		Have you ever needed a carpenter to fix your windows and doors? Have you <br> 
		ever wanted to find a professional plumber to fix all your water issues? If your mind <br>
		has ever been boggled about these questions and more, we have a <br>
		solution for you. We are DELCO and we present ourselves to you. We are all <br> 
		about linking qualified personnel and artisans to your doorstep.<br>
		</h5>
	</section>

	<section style="margin-left: 500px;">    
		<h3><strong>Leon Ampah – Head Developer</strong></h3>
		<img class="alignnone  wp-image-25" src="https://delcosite.files.wordpress.com/2017/01/img-20170127-wa0008.jpg?w=438&h=328" alt="img-20170127-wa0008" width="438" height="328" />

		 <br><br><br>

		 
		<h3><strong>Dela Acolatse – Creative Director</strong></h3>
		<img class="alignnone  wp-image-73" src="https://delcosite.files.wordpress.com/2017/01/img_0037.jpg?w=390&h=520" alt="img_0037" width="390" height="520" />
		<h3></h3>

		I am Dela Kwami Acolatse, a 22 year old Computer Science student at Ashesi University College.<br>
		I am also the creative director at Delco. I enjoy painting and endulging in creative related activities in my free time.<br>
		I am fluent in Java, HTML, PHP, CSS and Javascript.<br>
		 
		<h3><strong>Deborah Attuah – Back-End Developer
		</strong></h3>
		<img class="alignnone size-medium wp-image-61" src="https://delcosite.files.wordpress.com/2017/01/img_43241.jpg?w=169&h=300" alt="img_4324" width="169" height="300" />
		<h3></h3>
		I am Deborah Nana Akosua Attuah, a 19year old Computer Science student at Ashesi University College.<br>
		I am also the back-end developer at Delco. I enjoy reading, writing and listening to music. <br>
		I am fluent in Java, HTML, R, CSS and Javascript.<br>

		<span style="text-decoration: underline;"><strong>Contact Info.</strong></span>

		E-mail: nanaakosuaattuah@gmail.com, deborah.attuah@ashesi.edu.gh

		Tel: +233502345653

		 
		<h3><strong>Jessica Annor – Web Developer
		</strong></h3>
		<img class="alignnone  wp-image-116" src="https://delcosite.files.wordpress.com/2017/01/jess.jpg" alt="jess" width="182" height="305" />
		<h3></h3>
		Jessica designs and maintains the Delco website. <br>
		She designs and develops both the basic and interactive features present on the website.<br>
		She is mostly involved in the front end of the development.<br>

		<strong>Skills</strong>
		<ol>
			<li>Html</li>
			<li>CSS</li>
			<li>Javascript</li>
			<li>PHP</li>
		</ol>
		<h3></h3>
		 
		<h3><strong>Cynthia Gouanfo – Systems Analyst</strong></h3>
		<img class="alignnone  wp-image-118" src="https://delcosite.files.wordpress.com/2017/01/cynthia1.jpg" alt="cynthia" width="271" height="333" />
		<h3></h3>
		Cynthia studies and organises the computer systems and procedures present in the organisation.<br> 
		She also makes recommendations to management to help the organisation operate more efficiently and effectively.<br>

		<strong>Skills</strong>
		<ol>
			<li>Analytical skills</li>
			<li>Technical skills</li>
			<li>Interpersonal skills</li>
		</ol>
	</section>>
	<script type="text/javascript" src="JS/bootstrap-3.3.6-dist/js/jquery.js"></script>
	<script type="text/javascript" src="JS/js/isotope.js"></script>
	<script type="text/javascript" src="JS/js/myscript.js"></script> 
	<script type="text/javascript" src="JS/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
	<script type="text/javascript" src="JS/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>