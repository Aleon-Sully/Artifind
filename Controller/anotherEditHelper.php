<?php
/*
*This is the second helper class for the editcontroller
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');

$cat = $_GET['im'];
//create the efitClass
$class = new editClass;
//call function to delete a portfolio
$class->deletePortfolio($cat);


?>