<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Artifind/Database/dbConnectionClass.php');

class editClass extends dbconnection {

$this->connect();
	$sql = "SELECT first_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    echo $name['first_name'];
    }


}

public function loadLName ($artid){
    $this->connect();
    $sql = "SELECT last_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    echo $name['last_name'];
    }

public function loadAboutMe ($artid){
    $this->connect();
    $sql = "SELECT about_me FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($about = $this->fetch()) {
    echo $about['about_me'];
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
    echo $number['telephone_Number'];
    }


}

public function loadPassword ($artid){
    $this->connect();
    $sql = "SELECT password FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($pass = $this->fetch()) {
    echo $pass['password'];
    }


}

public function loadAddress ($artid){
    $this->connect();
    $sql = "SELECT address FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($add = $this->fetch()) {
    echo $add['address'];
    }


}

public function loadEmail ($artid){
    $this->connect();
    $sql = "SELECT email FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($mail = $this->fetch()) {
    echo $mail['email'];
    }


}

public function loadSkills ($artid){
    $this->connect();
    $sql = "SELECT CATEGORY FROM skils where skils.sID IN (SELECT artisan_skill.sID FROM artisan_skill where artisan_skill.aID =$artid)";
    $this->query($sql);
    while ($skill = $this->fetch()) {
    echo '<input id=deletetype="text" class="form-control name-form" value ="'.$skill['CATEGORY']. '" style="border:none; border-bottom: 2px solid darkred;"><a id=delete href="">delete</a><br><br>';
    }


}

public function getCount ($artid){
    $this->connect();
    $sql = "SELECT CATEGORY FROM skils where skils.sID IN (SELECT artisan_skill.sID FROM artisan_skill where artisan_skill.aID =$artid)";
    $this->query($sql);
    return $this->getCount();
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