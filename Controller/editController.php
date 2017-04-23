<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');

function getFName($id) {
   $class = new editClass;
   $name = $class->loadFName($id);
   echo $name;
}

function getLName($id) {
   $class = new editClass;
   $name = $class->loadLName($id);
   echo $name;
}

function getAboutMe($id) {
   $class = new editClass;
   $abt = $class->loadAboutMe($id);
   echo $abt;
}

function getProfession($id) {
   $class = new editClass;
   $prof = $class->loadProfession($id);
   echo $prof;
}

function getLocation($id) {
   $class = new editClass;
   $prof = $class->loadLocation($id);
   echo $prof;
}


function getTel($id) {
   $class = new editClass;
   $name = $class->loadTel($id);
   echo $name;
}

function getPassword($id) {
   $class = new editClass;
   $name = $class->loadPassword($id);
   echo $name;
}

function getAddress($id) {
   $class = new editClass;
   $name = $class->loadAddress($id);
   echo " ".$name." ";
}

function getEmail($id) {
   $class = new editClass;
   $name = $class->loadEmail($id);
   echo $name;
}

function getSkill($id) {
   $class = new editClass;
   $count = $class->getCount($id);
   $name = $class->loadSkills($id);
   return $name;


}

function removeSkill($category){
   $class = new EditClass;
   $delete = $class->deleteSkill($category);
}

function getPortfolio($id){
   $class = new EditClass;
   $port = $class->loadPortfolio($id);   
   return $port;
}

?>