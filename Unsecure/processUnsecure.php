<?php
     require_once('../Database/dbConnectionClass.php');

/*
*Declaring variables to capture form elements
*/
$fName = $lName = $uName = $pwd = $vPwd = $em = $prof = "";

function validRegister(){

    $GLOBALS['fName'] = $_POST['fName'];
    $GLOBALS['lName'] = $_POST['lName'];
    $GLOBALS['uName'] = $_POST['username'];
    $GLOBALS['pwd'] = $_POST['passwd'];
    $GLOBALS['vPwd'] = $_POST['verpasswd'];
    $GLOBALS['em'] = $_POST['email'];
    $GLOBALS['prof'] = $_POST['prof'];
}



      function checkEmail($em){
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                echo "Invalid email";
				return false;
            }
			else
				return true;
		}
?>