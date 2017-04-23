<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');
$class = new editClass;
$_SESSION['artid'] = '1';
$id = $_SESSION['artid'];
if(isset($_POST["btnSignUp"])) {
	if(!empty($_POST["fName"])) {
		$fname = $_POST["fName"];
        $class->updateFName($id,$fname);
	} 
	if( !empty($_POST["lName"])) {
       $lname = $_POST["lName"];
       $class->updateLName($id,$lname);
	}
	if(!empty($_POST["prof"])){
     $profession = $_POST["prof"];
     $class->updateProfession($id,$profession);
	} 
	if(!empty($_POST["msg"])){
     $about_me = $_POST["msg"];
     $class->updateAbout($id,$about_me);
	} 
	if(!empty($_POST["passwd"]) && !empty($_POST["verpasswd"])){
		$password = $_POST["passwd"];
		$ver_password = $_POST["verpasswd"];
		if ($password==$ver_password){
			$class->updateLName($id,$fname);
		}
		else {
	    $alertMessage = "Password verification provided is false";
		echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	if(!empty($_POST["Email"])){
     $email = $_POST["Email"];
     $class->updateEmail($id,$email);
	}
	if(!empty($_POST["num"])){
       $contact = $_POST['num'];
       $class->updateContact($id,$contact);
	}
	if(!empty($_POST["area"])) {
		$address = $_POST['area'];
		$class->updateAddress($id,$address);
	}
	if (isset($_POST["Skills"])){
		$skill = $_POST["Skills"];
		foreach ($skill as $skil) {
   		$class->addSkill($skil,$id);
}
}
  if(isset($_FILES['img']) && is_uploaded_file($_FILES['img']['tmp_name'])) 
 {
	$image=addslashes (file_get_contents($_FILES['img']['tmp_name']));
	$class->insertPortImage($id,$image);
	}
	header("Location:profile.php");
}



?>

