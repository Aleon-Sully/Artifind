<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');

$cat = $_GET['val'];
$class = new editClass;
$class->deleteSkills($cat);


?>