<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/test/Artifind/Database/dbConnectionClass.php');


class profileClass extends dbconnection {

public function loadName ($artid){
	$this->connect();
	$sql = "SELECT first_name, last_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    echo "<h1>".$name['first_name']. " ".$name['last_name']."</h1>";
    }


}

public function loadAboutMe ($artid){
	$this->connect();
	$sql = "SELECT about_me FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($about = $this->fetch()) {
    echo "<p>".$about['about_me']."</p>";
    }


}

public function loadProfession ($artid){
	$this->connect();
	$sql = "SELECT profession FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($occupation = $this->fetch()) {
    echo "<h2>".$occupation['profession']."</h2>";
    }


}

public function loadTel ($artid){
	$this->connect();
	$sql = "SELECT telephone_Number FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($number = $this->fetch()) {
    echo "<li>".$number['telephone_Number']."</li>";
    }


}

public function loadAddress ($artid){
	$this->connect();
	$sql = "SELECT address FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($add = $this->fetch()) {
    echo "<li id='contact'>".$add['address']."</li>";
    }


}

public function loadEmail ($artid){
	$this->connect();
	$sql = "SELECT email FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($mail = $this->fetch()) {
    echo "<li id ='email'>".$mail['email']."</li>";
    }


}

public function loadSkills ($artid){
    $this->connect();
    $sql = "SELECT sID, CATEGORY FROM skils where skils.sID IN (SELECT artisan_skill.sID FROM artisan_skill where artisan_skill.aID =$artid)";
    $this->query($sql);
    $arr = array();
    while ($skill = $this->fetch()){
        echo '<li>'.$skill['CATEGORY'].'</li>';
    }


}
public function loadPortfolio ($artid){
	$this->connect();
	$sql = "SELECT image FROM portfolio where aID=$artid";
    $this->query($sql);
    while ($image = $this->fetch()) {
    echo '<div class="col-md-4 galry-grids moments-bottom">
    <a class="b-link-stripe b-animate-go" href="image/img9.jpg">
    <img src="data:image/jpg;base64,' . base64_encode($image['image']) . '" class="img-responsive" alt="" >
    <div class="b-wrapper">
    <span class="b-animate b-from-left    b-delay03 ">
    <img class="img-responsive" src="image/e.png" alt=""/> </span>					
						</div>
					</a>				
				</div>';
    }


}
}
?>

