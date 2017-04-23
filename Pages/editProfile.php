<!doctype html>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Controller/editController.php');
session_start();
$id = 1;
//$id =$_SESSION['userid'];

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Delcosite</title>
	<meta name="description" content="">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->

	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../CSS/slider.css">
	<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

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

					<li  class="active"><a style="margin-right: 10px;" href="home.php" >HOME</a>
				 </li>
				 <li><a href = "profile.php">My Profile</a></li>
				 <li><a href = "editProfile.php">Edit Profile</a></li>
				<li>
					<a href="About.php">About Us</a>

				</li>
				<li>
					<a href="contactUs.php">Contact Us</a>

				</li>
			</ul>
		</div>
	</nav>
</div>

<br><br><br><br>
<form style=" position: absolute; margin-top:-1%; left: 30%;  height: 59%;
    width: 45%; padding-top: 15px;  text-align: center;" action="../Controller/processEditForm.php">
	First Name <input type="text" id="fn" class="form-control name-form" name="fName" value =<?php getFName($id)?> style="border: none; border-bottom: 2px solid darkred;"  ><br> <br>


	Last Name<input type="text" id="lNameField" class="form-control name-form" name="lName" value =<?php getLName($id)?> style="border: none; border-bottom: 2px solid darkred;"><br> <br>
	Profession<input type="text" id="prof" class="form-control name-form" name="prof" value =<?php getProfession($id) ?> style="border: none; border-bottom: 2px solid darkred;"><br><br>
	<p>About Me </p>
	<textarea rows="4" cols="80" name="msg"><?php getAboutMe($id) ?></textarea><br><br>
	Skills <br><br><div id=skills>
	<?php $name = getSkill($id);
	$s="skill";
	$i=0;
	   for($i;$i<count($name);$i++){
   	  echo '<div id='.$i.'><input id='.$i.'s type="text" class="form-control name-form" value ="'.$name[$i]['CATEGORY']. '" style="border:none; border-bottom: 2px solid darkred;"><a href="javascript:deleteSkill('.$i.'); removeDelete('.$i.');">delete</a></div><br><br>';
   }
	?>
	</div> 
	<input type="button"  value = "Add Skill" onclick="addTextField('skills')" style="font-size: 16px; background-color: white; color:black; border: 2px solid limegreen"><br><br>
	Password<input type="password" id="passwordField" class="form-control name-form" value =<?php getPassword($id)?> name="passwd" style="border: none; border-bottom: 2px solid darkred;"><br><br>
	Verify Password<input type="password" id="verpasswdField" class="form-control name-form" name="verpasswd" style="border: none; border-bottom: 2px solid darkred;"><br><br>
	Email<input type="text" id="emailField" class="form-control name-form" name="Email"  value =<?php getEmail($id) ?> style="border: none; border-bottom: 2px solid darkred;"><br><br>

	Contact Number<input type="text" id="emailField" class="form-control name-form" name="num" value =<?php getTel($id) ?> style="border: none; border-bottom: 2px solid darkred;"><br><br>

	Location<input type="text" id="emailField" class="form-control name-form" name="email" value =<?php ?> style="border: none; border-bottom: 2px solid darkred;"><br><br>

	Address<textarea rows="4" cols="80" name="area"><?php getLocation($id) ?></textarea><br><br>
	Portfolio <br><br>
	<?php $images = getPortfolio($id);
		$i=0;
	   for($i;$i<count($images);$i++){
	   	$w=$i+100;
    echo '<div id='.$w. ' p class="col-md-4 galry-grids moments-bottom">
    <a class="b-link-stripe b-animate-go" href="javascript:deletePortfolio('.$images[$i]['p_ID'].'); removeDelete('.$w.');">delete
    <img src="data:image/jpg;base64,' . base64_encode($images[$i]['image']) . '" class="img-responsive" alt= "">
    <div class="b-wrapper">
    <span class="b-animate b-from-left    b-delay03 ">
    <img class="img-responsive"  alt=""/> </span>					
						</div>
					</a>				
				</div>';
   }	
	?>
	<br><br>
	Add Image<input type="file" name="img" accept="image/*"><br><br>
	<input type="button" href="index.html" value="Cancel" name="btnCancel" id="btnCancel" 
	style="font-size: 16px; background-color: white; color:black; border: 2px solid red; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
	<input type="submit" value="SUBMIT" name="btnSignUp" onclick="getElemCount(document.getElementById('skills'))"
	 style="font-size: 16px; background-color: white; color:black; border: 2px solid limegreen">
</form>

<script type="text/javascript" src="../JS/jquery.js"></script>
<script type="text/javascript" src="../JS/isotope.js"></script>
<script type="text/javascript" src="../JS/myscript.js"></script>
<script type="text/javascript" src="../JS/jquery.1.11.js"></script>
<script type="text/javascript" src="../JS/bootstrap.js"></script>
<script type="text/javascript" src="../JS/editProfile.js"></script>
</body>
</html>
