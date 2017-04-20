<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Artifind/Database/dbConnectionClass.php');

class profileClass extends dbconnection {

public function loadName ($artid){
	$this->connect();
	$sql = "SELECT first_name, last_name FROM artisan where artisan_id=$artid";
    $this->query($sql);
    while ($name = $this->fetch()) {
    echo "<h1>".$name['first_name']. " ".$name['last_name']."</h1>";
    }


}
?>