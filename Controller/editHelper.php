<?php
/*
* @author Deborah Attuah
* This class helps the editcontroller
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');

$cat = $_GET['val'];
//creates an instance of the editClass
$class = new editClass;

//call the function to delete a skill
$class->deleteSkills($cat);


?>