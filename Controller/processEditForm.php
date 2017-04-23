<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');
session_start();
$id = $_SESSION['userid'];
$fname = $_REQUEST['fName'];
$lname = $_REQUEST['lName'];
$profession = $_REQUEST['prof'];
$about_me = $_REQUEST['msg'];
$password = $_REQUEST['passwd'];
$ver_password = $_REQUEST['verpasswd'];
$email = $_REQUEST['Email'];
$contact = $_REQUEST['num'];
$address = $_REQUEST['add'];
$class = new editClass;
$class->updateDetails($id,$fname,$lname,$address,$profession,$contact,$about_me,$email,$password);
?>

