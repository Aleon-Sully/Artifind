<?php
     require_once('../Database/dbConnectionClass.php');

     if(isset($_POST['btnSignUp'])){
         validContactUs();
     }

     if (isset($_POST['btnSubmit'])){
        validatelogin();
     }

/*
*Function to validate email
*/
     function checkEmail($em){
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                echo "Invalid email";
				return false;
            }
			else
				return true;
		}
/*
*Declaring variables to capture form elements
*/
$uName = $pwd = $fName = $lName = $em = $msg = "";

function validContactUs(){

    $GLOBALS['fName'] = $_POST['fName'];
    $GLOBALS['lName'] = $_POST['lName'];
    $GLOBALS['em'] = $_POST['email'];
    $GLOBALS['msg'] = $_POST['msg'];


    if(isset($GLOBALS['fName']) && isset( $GLOBALS['lName']) && isset( $GLOBALS['em']) && checkEmail( $GLOBALS['em']) && isset( $GLOBALS['msg'])){
        sentContactRequest();
    }
} 

function sentContactRequest(){

    //Creating am instance of the Database Connection Class
    $sendContactReq = new dbconnection;

    //Write sql
    $sql = "INSERT INTO `feedback` (FName, LName, Email, message) VALUES
     (\"".$GLOBALS['fName']."\", \"". $GLOBALS['lName']."\", \"".$GLOBALS['em']."\", \"". $GLOBALS['msg']."\")";

     if($sendContactReq->query($sql) == true){
         echo "New record created succesfully";
           header('Location: ../index.php');
     }else{
         echo "Error: " . $sql . "<br>";
     }

     $sendContactReq->close();
}

function validatelogin(){
    $ok = true;

    if (empty($_POST['uName'])){
        echo "Please enter a username".<br>;
        $ok= false;
    }

    if (empty($_POST['pwd'])){
        echo "Please Enter a Password".<br>;
        $ok = false;
    }



      
?>