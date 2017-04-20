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


}
?>