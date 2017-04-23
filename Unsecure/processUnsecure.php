<?php
require_once('../Database/dbConnectionClass.php');

if(isset($_POST['btnSignUp'])){
   validContactUs();
}

if (isset($_POST['btnSubmit']))
     {
        validatelogin();
     }

if (isset($_POST['SignUpBtn'])){
    validRegister();
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
 
$uname = $pwd = $fName = $lName = $em = $msg = "";



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


    if (empty($_POST['uname'])){
        echo "Please provide your username";
        $ok= false;
    }

    if (empty($_POST['pwd'])){
       echo "Please provide your password";        
        $ok = false;
    }
    if($ok){
verifylogin();
}
}

function verifylogin(){
$username = $_POST['uname'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM  login_details where username = $username";

$login = new databaseconnection;
$executequery = $login -> query($sql);


if ($executequery) {
$row = $login -> fetch();

if (password_verify($pwd, $row['pwd']))
{
    session_start();
    $_SESSION['userid']=$row['aID'];
    $_SESSION['uname']=$row['username'];

    header("Location: ../index.php");
    die();
} else
{
        echo "<br>User can't be logged in";

}
}
else{

    die();

}
}
   

    $erroruname  = "";
    $errorfname  = "";
    $errorlname  = "";
    $errormail  = "";
    $errorpassword  = "";
    $errorregister  = "";
    $errorgeneral = "";

function validRegister()
{
        $validuname = preg_match( '/[a-zA-Z]+$/', $_REQUEST['username']);
        $validfname = preg_match( '/[a-zA-Z]+$/', $_REQUEST['fName']);
        $validlname = preg_match( '/[a-zA-Z]+$/', $_REQUEST['lName']); 
        $validpword = preg_match('/^(?=.*?[a-zA-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/', $_REQUEST['passwd']);
        $validemail = preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $_REQUEST['email']);
        $okay = true;


        /*if(empty($_POST['username']) || (empty($_POST['passwd']) || empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['email']) || empty($_POST['verpasswd'])))
        {
            $GLOBALS['errorgeneral']= 'Check all fields. Please provide information for all fields'.'<br>';


        }
        else
            
        {*/

            if(!$validuname == true)  
            { 
                $GLOBALS['erroruname'] ='Check fields again. Username must not have symbols or numbers'.'<br>';
                $okay = false;
            }     
            if(!$validfname == true)
            {
                $GLOBALS['errorfname'] = 'Check fields again. Firstname must not have symbols or numbers'.'<br>';
                $okay = false;
            } 
            if (!$validlname == true )
            {
                $GLOBALS['errorlname'] = 'Check fields again. Lastname must not have symbols or numbers'.'<br>';
                $okay = false;
            }   
        if(!$validpword == true) 
        {
            $GLOBALS['errorpassword'] = 'Password must contain at least one upper case, symbol,number and password length not less than 6 characters'.'<br>';
            $okay = false;
        }
            if(!$validemail == true)
            {
            $GLOBALS['errormail'] =  'Check email'.'<br>';
            $okay = false;
            
            }
        
            if($okay == true)
            {   
            registeruser();
            }
        } 
/*}*/

function registeruser()
{

   //variables defined
    $uname = $_REQUEST['uname'];
    $pword =  $_REQUEST['passwd'];
    $fname =  $_REQUEST['fName'];
    $lname =  $_REQUEST['lName'];
    $email =  $_REQUEST['email'];

    $pword = password_hash($_POST['pword'],PASSWORD_DEFAULT);


              //write query
    $sql = "INSERT INTO artisan (first_name, last_name, email, password, username) VALUES ('$fname','$lname','$email','$pword','$uname')";

    //create instance of a database class
    $reguser = new dbconnection;

    //$registration = $reguser->escapefn($sql, $uname, $pword, $fname, $lname, $email, $gender, $major, 'ACTIVE', '1');

            //execute query 
    $registration = $reguser->query($sql);


    if($registration)
    {
        header("Location: ../register/restDetails.php");

    }  else 
    {
        $GLOBALS['errorregister'] = "User cant be registered";
    } 

}

function validrestDetails(){
    $ok = true;

    if (empty($_POST['address'])){
        echo "Please enter an address";
        $ok= false;
    }

    if (empty($_POST['telephone'])){
        echo "Please Enter a telephone number";
        $ok = false;
    }
    if (empty($_POST['birth'])){
        echo "Please Enter date of birth";
        $ok = false;

    }
}
          
?>