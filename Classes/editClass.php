<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Database/dbConnectionClass.php');


class editClass extends dbconnection {

public function loadFName ($artid){
	$this->connect();
	$sql = "SELECT first_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    return $name['first_name'];
    }


}

public function loadLName ($artid){
    $this->connect();
    $sql = "SELECT last_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    return $name['last_name'];
    }


}

public function loadAboutMe ($artid){
	$this->connect();
	$sql = "SELECT about_me FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($about = $this->fetch()) {
    return $about['about_me'];
    }


}

public function loadProfession ($artid){
	$this->connect();
	$sql = "SELECT profession FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($occupation = $this->fetch()) {
    return $occupation['profession'];
    }


}

public function loadTel ($artid){
	$this->connect();
	$sql = "SELECT telephone_Number FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($number = $this->fetch()) {
    return $number['telephone_Number'];
    }


}

public function loadPassword ($artid){
    $this->connect();
    $sql = "SELECT password FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($pass = $this->fetch()) {
    return $pass['password'];
    }


}

public function loadAddress ($artid){
	$this->connect();
	$sql = "SELECT address FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($add = $this->fetch()) {
    return $add['address'];
    }


}

public function loadEmail ($artid){
	$this->connect();
	$sql = "SELECT email FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($mail = $this->fetch()) {
    return $mail['email'];
    }


}

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

public function getCount ($artid){
    $this->connect();
    $sql = "SELECT CATEGORY FROM skils where skils.sID IN (SELECT artisan_skill.sID FROM artisan_skill where artisan_skill.aID =$artid)";
    $this->query($sql);
    $c = $this->count();
    return $c;
}

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

public function deleteSkills($category) {
    $this->connect();
    $sl = "DELETE FROM artisan_skill WHERE sID in (SELECT sID FROM skils WHERE Category ='$category')";
    if ($this->query($sl)) {
        echo 'working';
    $sql = "DELETE FROM skils WHERE Category ='$category'";
    $this->query($sql);
}

}

public function deletePortfolio($i) {
    $this->connect();
    $sql = "DELETE FROM portfolio WHERE p_ID = $i";
    $this->query($sql);
}


public function updateDetails($id,$fname,$lname,$address,$profession,$contact,$about,$email,$password){
    $this->connect();
    $sql = "UPDATE artisan SET first_name='$fname', last_name='$lname', telephone_Number='$contact', address='$address', about_me='$about', email='$email', password='$password', profession='$profession' WHERE artisan_id=$id";
    $this->query($sql);

}
}
?>

