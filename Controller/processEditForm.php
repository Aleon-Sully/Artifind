<?php
/*
*@author Deborah Attuah
*This class process the edit Form and update the information in the database
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');
//create an instance of editClass
$class = new editClass;

//collect the user's id
session_start();
$_SESSION['artid'] = '1';
$id = $_SESSION['artid'];

//if the btnSignUp is clicked for the fields that have been updated
if(isset($_POST["btnSignUp"])) {
	//if the first name was edited
	if(!empty($_POST["fName"])) {
		$fname = $_POST["fName"];
        $class->updateFName($id,$fname);
	} 
	//if the last name was edited
	if( !empty($_POST["lName"])) {
       $lname = $_POST["lName"];
       $class->updateLName($id,$lname);
	}
	//if the profession was edited
	if(!empty($_POST["prof"])){
     $profession = $_POST["prof"];
     $class->updateProfession($id,$profession);
	} 
	//if about me was edited
	if(!empty($_POST["msg"])){
     $about_me = $_POST["msg"];
     $class->updateAbout($id,$about_me);
	} 
	//if password was edited
	if(!empty($_POST["passwd"]) && !empty($_POST["verpasswd"])){
		$password = $_POST["passwd"];
		$ver_password = $_POST["verpasswd"];
		if ($password==$ver_password){
			$class->updateLName($id,$fname);
		}
		//ask the artisan to verify password if they have not
		else {
	    $alertMessage = "Password verification provided is false";
		echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	//if email was edited
	if(!empty($_POST["Email"])){
     $email = $_POST["Email"];
     $class->updateEmail($id,$email);
	}
	//if contact was editted
	if(!empty($_POST["num"])){
       $contact = $_POST['num'];
       $class->updateContact($id,$contact);
	}
	//if address was edited
	if(!empty($_POST["area"])) {
		$address = $_POST['area'];
		$class->updateAddress($id,$address);
	}
	//if skills was edited
	if (isset($_POST["Skills"])){
		$skill = $_POST["Skills"];
		foreach ($skill as $skil) {
   		$class->addSkill($skil,$id);
}
}
//if a portfolio image was added
  if(isset($_FILES['img']) && is_uploaded_file($_FILES['img']['tmp_name'])) 
 {
	$image=addslashes (file_get_contents($_FILES['img']['tmp_name']));
	$class->insertPortImage($id,$image);
	}
//if the profile pic was update
  if(isset($_FILES['ig']) && is_uploaded_file($_FILES['ig']['tmp_name'])) 
 {
	$imag=addslashes (file_get_contents($_FILES['ig']['tmp_name']));
	$class->updateProfilePic($id,$imag);
	}
	//after changes are made, go to profile page	
	header("Location:profile.php");
}



?>

