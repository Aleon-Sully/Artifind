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
//$id = $_SESSION['id'];

		$obj = new dbconnection;
?>
<html>
<head>
<title>Delcosite</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
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
<?php
require_once('../Unsecure/processUnsecure.php');
?>

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
				<a class="navbar-brand logo" href="#"><img src="../Image/Logo.jpg" alt="logo"></a>
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

    <br><br><br><br><br><br>
<form style=" position: absolute; margin-top:-1%; left: 30%;  height: 59%;
    width: 45%; padding-top: 15px;  text-align: center;" action="" method="post" onsubmit="reviewArtisan()">
    <input type="text" id="first_name" class="form-control name-form" name="first_name" placeholder="First Name" style="border: none; border-bottom: 2px solid darkred;"  ><br>
	<input type="text" id="last_name" class="form-control name-form" name="last_name" placeholder="Last Name" style="border: none; border-bottom: 2px solid darkred;"><br>
	<input type="text" id="email" class="form-control name-form" name="email" placeholder="Email Address" style="border: none; border-bottom: 2px solid darkred;"><br>
	<textarea rows="4" cols="50" id="comments" name="comments" placeholder=" Comments..." ></textarea><br>

   <fieldset>
								<label>	<input type="radio" name="ratings" value="1" > Poor</label> &nbsp;&nbsp;&nbsp;
  								<label>	<input type="radio" name="ratings" value="2" > Satisfactory</label> &nbsp;&nbsp;&nbsp;
								<label>	<input type="radio" name="ratings" value="3" > Good</label> &nbsp;&nbsp;&nbsp;
								<label>	<input type="radio" name="ratings" value="4" > Very Good</label> &nbsp;&nbsp;&nbsp;
								<label>	<input type="radio" name="ratings" value="5" > Excellent</label> &nbsp;&nbsp;&nbsp; <br><br>
	</fieldset>
    <input type="submit" id= "SubmitReview" name= "SubmitReview" value="Submit" style="font-size: 16px; background-color: white; color:black; border: 2px solid darkred" > 


							
</form>


<script>

    var fName = document.getElementById('fNameField');
    var lName = document.getElementById('lNameField');
    var email = document.getElementById('email');
    
    // function review(){
    //     if(fName.value == "" && lName.value == "" && email.value == ""){
    //         alert('Please fill in the required details');
    //     }
    //     	// if (fName.value is not in the databse){
    //     	// 	alert('Thank you for your review');
    //     	// } 
    //         else{
    //         	alert('You cannot review the same artisan more than once.');
    //         }
        

    // }
</script>
</body>
</html>