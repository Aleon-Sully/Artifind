<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Database/dbConnectionClass.php');

/*
*@author Deborah Attuah
*This class inherits the dbconnection class
*It is the main class for the EditProfile Page
*/
class editClass extends dbconnection {

/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['first_name']
*/
public function loadFName ($artid){
	$this->connect();
	$sql = "SELECT first_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    return $name['first_name'];
    }


}

/*
*This function loads the artisan's last name
*@param int $artid The artisan's id
*@return $name['last_name']
*/

public function loadLName ($artid){
    $this->connect();
    $sql = "SELECT last_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    return $name['last_name'];
    }


}

/*
*This function loads details on the artisan
*@param int $artid The artisan's id
*@return $about['about_me']
*/
public function loadAboutMe ($artid){
	$this->connect();
	$sql = "SELECT about_me FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($about = $this->fetch()) {
    return $about['about_me'];
    }


}

/*
*This function loads the artisan's profession
*@param int $artid The artisan's id
*@return $occupation['profession'];
*/
public function loadProfession ($artid){
	$this->connect();
	$sql = "SELECT profession FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($occupation = $this->fetch()) {
    return $occupation['profession'];
    }


}

/*
*This function loads the artisan's contact number
*@param int $artid The artisan's id
*@return $occupation['profession'];
*/
public function loadTel ($artid){
	$this->connect();
	$sql = "SELECT telephone_Number FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($number = $this->fetch()) {
    return $occupation['profession'];;
    }


}

/*
*This function loads the artisan's password
*@param int $artid The artisan's id
*@return $name['last_name']
*/
public function loadPassword ($artid){
    $this->connect();
    $sql = "SELECT password FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($pass = $this->fetch()) {
    return $pass['password'];
    }


}

/*
*This function loads the artisan's address
*@param int $artid The artisan's id
*@return $add['address']
*/
public function loadAddress ($artid){
	$this->connect();
	$sql = "SELECT address FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($add = $this->fetch()) {
    return $add['address'];
    }


}

/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $mail['email']
*/
public function loadEmail ($artid){
	$this->connect();
	$sql = "SELECT email FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($mail = $this->fetch()) {
    return $mail['email'];
    }


}

/*
*This function loads the artisan's flocation
*@param int $artid The artisan's id
*@return $loc['location']
*/
public function loadLocation ($artid){
    $this->connect();
    $sql = "SELECT location FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($loc = $this->fetch()) {
    return $loc['location'];
    }


}

/*
*This function loads the artisan's skills
*@param int $artid The artisan's id
*@return $arr array of skills
*/
public function loadSkills ($artid){
	$this->connect();
	$sql = "SELECT sID, CATEGORY FROM skils where skils.sID IN (SELECT artisan_skill.sID FROM artisan_skill where artisan_skill.aID =$artid)";
    $this->query($sql);
    $arr = array();
    while ($skill = $this->fetch()){
        $arr[] = $skill;
    }

    return $arr;

}
/*
*This function loads the artisan's portfolio number
*@param int $artid The artisan's id
*@return $c 
*/
public function getCount ($artid){
    $this->connect();
    $sql = "SELECT CATEGORY FROM skils where skils.sID IN (SELECT artisan_skill.sID FROM artisan_skill where artisan_skill.aID =$artid)";
    $this->query($sql);
    $c = $this->count();
    return $c;
}
/*
*This function loads the artisan's portfolio
*@param int $artid The artisan's id
*@return $arr array of portfolio images
*/
public function loadPortfolio ($artid){
	$this->connect();
	$sql = "SELECT image,p_ID FROM portfolio where aID=$artid";
    $this->query($sql);
     $arr = array();
    while ($image = $this->fetch()) {
        $arr[] = $image;
    }

    return $arr;

}

/*
*This function loads the artisan's profile picture
*@param int $artid The artisan's id
*@return $image['profile_pic'];
*/
public function loadProfilePic ($artid){
    $this->connect();
    $sql = "SELECT profile_pic FROM artisan where artisan_id=$artid";
    $this->query($sql);
    $image = $this->fetch();
    return $image['profile_pic'];
}

/*
*This function deletes a skill
*@param category the skill to be deleted
*@return void
*/
public function deleteSkills($category) {
    $this->connect();
    $sl = "DELETE FROM artisan_skill WHERE sID in (SELECT sID FROM skils WHERE Category ='$category')";
    if ($this->query($sl)) {
        echo 'working';
    $sql = "DELETE FROM skils WHERE Category ='$category'";
    $this->query($sql);
}

}
/*
*This function delete's a portfolio
*@param int $i The artisan's id
*@return $name['last_name']
*/
public function deletePortfolio($i) {
    $this->connect();
    $sql = "DELETE FROM portfolio WHERE p_ID = $i";
    $this->query($sql);
}

/*
*This function updates the user's details
*@param int $artid The artisan's id
*@return void
*/
public function updateDetails($id,$fname,$lname,$address,$profession,$contact,$about,$email,$password){
    $this->connect();
    $sql = "UPDATE artisan SET first_name='$fname', last_name='$lname', telephone_Number='$contact', address='$address', about_me='$about', email='$email', password='$password', profession='$profession' WHERE artisan_id=$id";
    $this->query($sql);

}

/*
*This function updates the password
*@param int $artid The artisan's id
*@param $pass the new password
*@return void
*/
public function updatePassword($id,$pass){
    $this->connect();
    $sql = "UPDATE artisan SET password='$password' WHERE artisan_id=$id";
    $this->query($sql);
}
/*
*This function updates the email
*@param int $artid The artisan's id
*@param $email the new email
*@return void
*/
 public function updateEmail($id,$email){
    $this->connect();
    $sql = "UPDATE artisan SET email='$email'WHERE artisan_id=$id";
    $this->query($sql);
}
/*
*This function inserts an image
*@param int $artid The artisan's id
*@param blob $img the new portfolio image
*@return void
*/
public function insertPortImage($id,$img){
    $this->connect();
    $sql = "INSERT INTO portfolio (p_ID,aID,image) VALUES (NULL, $id, '{$img}')";
    $this->query($sql);
}
/*
*This function updates the artisan's profile pic
*@param int $artid The artisan's id
*@param blob $
*@return $name['last_name']
*/
 public function updateProfilePic($id,$picture){
    $this->connect();
    $sql = "UPDATE artisan SET profile_pic='{$picture}' WHERE artisan_id=$id";
    $this->query($sql);
}
/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['last_name']
*/
 public function updateAbout($id,$aboutme){
    $this->connect();
    $sql = "UPDATE artisan SET about_me='$aboutme' WHERE artisan_id=$id";
    $this->query($sql);
}
/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['last_name']
*/
 public function updateContact($id,$con){
    $this->connect();
    $sql = "UPDATE artisan SET telephone_Number='$con' WHERE artisan_id=$id";
    $this->query($sql);
}
/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['last_name']
*/
 public function updateProfession($id,$prof){
    $this->connect();
    $sql = "UPDATE artisan SET profession='$prof' WHERE artisan_id=$id";
    $this->query($sql);
}

/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['last_name']
*/
 public function updateAddress($id,$add){
    $this->connect();
    $sql = "UPDATE artisan SET address='$add' WHERE artisan_id=$id";
    $this->query($sql);
}

/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['last_name']
*/
 public function updateFName($id,$fname){
    $this->connect();
    $sql = "UPDATE artisan SET first_name='$fname' WHERE artisan_id=$id";
    $this->query($sql);
}
/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['last_name']
*/
 public function updateLName($id,$lname){
    $this->connect();
    $sql = "UPDATE artisan SET last_name='$lname' WHERE artisan_id=$id";
    $this->query($sql);
}

/*
*This function loads the artisan's first name
*@param int $artid The artisan's id
*@return $name['last_name']
*/
 public function addSkill($skill,$id){
     $this->connect();
    $sql = "INSERT INTO skils (sID, Category) VALUES (NULL, '$skill')";
    if ($this->query($sql)) { 
    $sql = "SELECT sID FROM skils WHERE Category='$skill'";
    if($this->query($sql)){
    $skillid = $this->fetch(); 
    $sid = $skillid['sID'];
    $sql="INSERT INTO artisan_skill (as_id, aID, sID, competence_level) VALUES (NULL, $id, $sid, '')";
    $this->query($sql);
}
}
}
}
?>

