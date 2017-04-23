
<?php
/* 
*@author Deborah Attuah
* This class is the controller for the editProfile class
*/
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Classes/editClass.php');

/*
* @param int $id the artisan's id
* echos the first name
*/
function getFName($id) {
   $class = new editClass;
   $name = $class->loadFName($id);
   echo $name;
}

/*
* @param int $id the artisan's id
* echos the last name
*/
function getLName($id) {
   $class = new editClass;
   $name = $class->loadLName($id);
   echo $name;
}

/*
* @param int $id the artisan's id
* echos the about me
*/
function getAboutMe($id) {
   $class = new editClass;
   $abt = $class->loadAboutMe($id);
   echo $abt;
}

/*
* @param int $id the artisan's id
* echos the profession
*/
function getProfession($id) {
   $class = new editClass;
   $prof = $class->loadProfession($id);
   echo $prof;
}

/*
* @param int $id the artisan's id
* echos the location
*/
function getLocation($id) {
   $class = new editClass;
   $prof = $class->loadLocation($id);
   echo $prof;
}

/*
* @param int $id the artisan's id
* echos the number
*/
function getTel($id) {
   $class = new editClass;
   $tel = $class->loadTel($id);
   echo $tel;
}

/*
* @param int $id the artisan's id
* echos the password
*/
function getPassword($id) {
   $class = new editClass;
   $name = $class->loadPassword($id);
   echo $name;
}

/*
* This returns the artisan's address
* @param int $id the artisan's id
* echos the address
*/
function getAddress($id) {
   $class = new editClass;
   $name = $class->loadAddress($id);
   echo " ".$name." ";
}

/*
* This returns the artisan's skill
* @param int $id the artisan's id
* echos the lemail
*/
function getEmail($id) {
   $class = new editClass;
   $name = $class->loadEmail($id);
   echo $name;
}

/*
* This function gets a skill
* @param int $id the artisan's id
* @return string $name
*/
function getSkill($id) {
   $class = new editClass;
   $count = $class->getCount($id);
   $name = $class->loadSkills($id);
   return $name;


}

/*
*This function removes a skill
* @param string $category the artisan's id
* echos the lemail
*/
function removeSkill($category){
   $class = new EditClass;
   $delete = $class->deleteSkill($category);
}

/*
*This function returns a portfolio
* @param int $id the artisan's id
* @return $port the portfolio
*/
function getPortfolio($id){
   $class = new EditClass;
   $port = $class->loadPortfolio($id);   
   return $port;
}


/*
*This function returns a profile pic
* @param int $id the artisan's id
* @return $port the profile picture
*/
function getProfilePic($id){
   $class = new EditClass;
   $port = $class->loadProfilePic($id);   
   return $port;
}

?>