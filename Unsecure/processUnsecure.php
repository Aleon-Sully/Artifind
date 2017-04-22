<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Database/dbConnectionClass.php');

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

if(isset($_POST['finishBtn'])){
    validrestDetails();
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
        echo 'alert("Please provide your username")';
        $ok= false;
    }

    if (empty($_POST['pwd'])){
     echo 'alert("Please provide your password")';        
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

    $login = new dbconnection;
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


    if(!$validuname == true)  
    { 
        echo '<br>'.'Check fields again. Username must not have symbols or numbers'.'<br>';
        $GLOBALS['erroruname'] ='Check fields again. Username must not have symbols or numbers'.'<br>';
        $okay = false;
    }     
    if(!$validfname == true)
    {
        echo '<br>'.'Check fields again. Firstname must not have symbols or numbers'.'<br>';
        $GLOBALS['errorfname'] = 'Check fields again. Firstname must not have symbols or numbers'.'<br>';
        $okay = false;
    } 
    if (!$validlname == true )
    {
        echo '<br>'.'Check fields again. Lastname must not have symbols or numbers'.'<br>';
        $GLOBALS['errorlname'] = 'Check fields again. Lastname must not have symbols or numbers'.'<br>';
        $okay = false;
    }   
    if(!$validpword == true) 
    {
        echo '<br>'.'Password must contain at least one upper case, symbol,number and password length not less than 6 characters'.'<br>';
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
        checkusername();
    }
} 

$uname  = "";
$fname  = "";
$lname  = "";
$email  = "";
$pword  = "";
/*function to check if username entered is unique*/
function checkusername()
{
    //code to check if username already exist
    //if username does not exist run the register function

    $uname = $_POST['username'];

                //Write sql query
    $sql = "SELECT * FROM artisan where username = \"$uname\""; 

            //create instance of a database class
    $user = new dbconnection;

            //execute query 
    $usercheck = $user->query($sql);
            //check if any results was returned
    if($usercheck)
    {

            //compare username in database to what user whats to enter
        if(($row = $user->fetch() ) == null)
        {
            
            $GLOBALS['fname'] = $_REQUEST['fName'];
            $GLOBALS['lname'] = $_REQUEST['lName'];
            $GLOBALS['uname'] = $_REQUEST['username'];
            $GLOBALS['email'] = $_REQUEST['email'];
            $GLOBALS['pword'] = $_REQUEST['passwd'];




            header('location:  ../Register/restDetails.php');
        }                
        else

            echo 'Username already exist in the database'; 

    }
}




/*function registeruser()
{

   //variables defined
    $uname = $_REQUEST['username'];
    $pword =  $_REQUEST['passwd'];
    $fname =  $_REQUEST['fName'];
    $lname =  $_REQUEST['lName'];
    $email =  $_REQUEST['email'];

    $pword = password_hash($_POST['pword'],PASSWORD_DEFAULT);


              //write query
    $sql = "INSERT INTO artisan (first_name, last_name, email, password, username) VALUES ('$fname','$lname','$email','$pword','$uname')";

    //create instance of a database class
    $reguser = new dbconnection;

    
                //execute query 
    $registration = $reguser->query($sql);


    if($registration)
    {
        header("Location: ../Register/restDetails.php");

    }  else 
    {
        $GLOBALS['errorregister'] = "User cant be registered";
    } 

}*/

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
    if (empty($_POST['profession'])){
        echo "Please Enter a profession";
        $ok = false;
    }
    if (empty($_POST['location'])){
        echo "Please Enter a location";
        $ok = false;
    }

    if (empty($_POST['gender'])){
        echo "Please select a gender ";
        $ok = false;
    }

    if($ok= true){
        addUserDetails();
    }
}

function addUserDetails(){

    
    
    $address = $_REQUEST['address'];
    $telephone =  $_REQUEST['telephone'];
    $loc =  $_REQUEST['location'];
    $about =  $_REQUEST['aboutMe'];
    $prof =  $_REQUEST['profession'];
    $gender =  $_REQUEST['gender'];

   

    $pword = password_hash($_POST['pword'],PASSWORD_DEFAULT);


              //write query
    $sql = "INSERT INTO artisan (first_name, last_name,
    gender, telephone_Number, address, about_me, email, password, username,profession,location) VALUES ('$fname','$lname','$gender','$telephone','$address','$aboutMe','$email','$pword','$uname','$prof','$loc')";

    //create instance of a database class
    $reguser = new dbconnection;

    
                //execute query 
    $registration = $reguser->query($sql);


    if($registration)
    {
        header("Location: ../Pages/profile.php");

    }  else 
    {
        echo "User can't be registered";
        $GLOBALS['errorregister'] = "User cant be registered";
    } 
}


?>