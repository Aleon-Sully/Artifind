<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');

$cat = $_GET['im'];
$class = new editClass;
$class->deletePortfolio($cat);


?>