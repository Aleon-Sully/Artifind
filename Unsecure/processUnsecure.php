<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/Artifind/Database/dbConnectionClass.php');



if(isset($_POST['btnSignUp'])){
   validContactUs();
}

/*
When btnSubmit is clicked, store the artisan's username and password
and then validate login
@param string $username Takes in the user's username
@param string $password Takes in the user's password
*/
if (isset($_POST['btnSubmit']))

{
    $username = $_POST['uname'];
    $pwd = $_POST['pwd'];
    validatelogin($username, $pwd);
}


if (isset($_POST['SignUpBtn'])){
    validRegister();
}

if(isset($_POST['finishBtn'])){
    validrestDetails();
}

if(isset($_POST['SubmitReview'])){
    reviewArtisan();
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


/*
to review the artisan, the user enters their first name, last name, email, ratings and their comment
*/
// function reviewArtisan(){

// $_POST['first_name']=$GLOBALS['first_name'];
// $_POST['last_name']=$GLOBALS['last_name'];
// $_POST['email'] =$GLOBALS['email'];
// $_POST['ratings'] =$GLOBALS['email'];
// $_POST['comments'] =$GLOBALS['comments'];

// $ok = true;
// if (empty($_POST['first_name'])){
//         echo "Please provide your fisrt name. <br>";
//         $ok= false;
//     }

//     if (empty($_POST['last_name'])){
//         echo "Please Enter your last. <br>";
//         $ok = false;
//     }

// if (empty($_POST['email'])){
//         echo "Please Enter your e-mail address. <br>";
//         $ok = false;
//     }

// if (empty($_POST['ratings'])){
//         echo "Please rate the artisan. <br>";
//         $ok = false;
//     }


//     if($ok){
// $reviewArtisan = new dbconnection;

//     //Write sql
//     $sql1 = "INSERT INTO `artisan_client` (first_name, last_name, email) VALUES
//     (\"".$GLOBALS['first_name']."\", \"". $GLOBALS['last_name']."\", \"".$GLOBALS['email']."\")";
//     $sql2 = "INSERT INTO `review` (ratings, comments) VALUES (\"".$GLOBALS['ratings']."\", \"". $GLOBALS['comments']."\")";
    


//     if($reviewArtisan->query($sql1) == true && $reviewArtisan->query($sql2)) {
//      echo "Thanks for your review";
//      header('Location: ../index.php');
//  }else
//  {
//      echo "Error: " . $sql1 . "<br>";
//  }

//     if($reviewArtisan->query($sql1) == true && $reviewArtisan->query($sql2) === true) {
//        echo "Thanks for your review!";
//        header('Location: ../index.php');
//    }else
//    {
//        echo "Error: " . $sql1 . "<br>";
//    }
// }
//    $reviewArtisan ->close();
// }

// function validateReview(){
//     $fname = $_POST['first_name'];
//     $lname = $_POST['last_name'];
//     $email = $_POST['email'];
//     $rating = $_POST['ratings'];
//     $comments = $_POST['comments'];


//     if(isset($fname) && isset($lname) && isset($email) && isset($ratings) && isset($comments)) {
//         verifyReview();
//     }
// }



function verifyReview(){
  
    $sql = "SELECT * FROM  artisan_client where last_name = '$lname' && email = '$email'";

    $review = new dbconnection;

    $executequery = $review -> query($sql);

    if ($executequery) {
        $row = $review -> fetch();
        return true;
    }else{
        return false;
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

/*
a function to validate login. Successful validation leads to verification.
Validation checks that the user does not leave the username and password fields empty
@param string $username Ensures that the user enters a username
@param string $password Ensures that the user enters a password
*/
function validatelogin($username, $password){
    $ok = true;


    if (empty($_POST['uname'])){
        echo "Please provide your username. <br>";
        $ok= false;
    }

    if (empty($_POST['pwd'])){
        echo "Please Enter a Password";
        $ok = false;
    }
    if($ok){
        verifylogin($username, $password);
    }
    
}




/*
a function to verify that a users username and password exist
in the database and match each other.
@param string $username Takes in the user's username(username should exist in the database) 
@param string $password Takes in the user's password(password should match username in the database)
*/

function verifylogin($username, $password){

    $sql = "SELECT * FROM  artisan where username = '$username'";

    $login = new dbconnection;

    $executequery = $login -> query($sql);

    if ($executequery) {
        $row = $login -> fetch();

        if (password_verify($password, $row['password']))
        {
            session_start();
            $_SESSION['userid']=$row['artisan_id'];
            $_SESSION['uname']=$row['username'];

            header("Location: ../Pages/userView.php");


            // if(isset($_REQUEST['redirecturl'])){ 

            //     $previouspage = $_REQUEST['redirecturl']; // holds url for last page visited.
            //     echo($previouspage);
            // }else 
            // {
            //     $previouspage = "index.php"; // default page for 
            // }
            // header("Location: $previouspage");
            
        } else
        {
            echo "<br>User can't be logged in";

        }
    }
    else{
        die();

    }
}

/*
a function to validate registration details for a new artisan seeking to be registered. Successful validation leads to the checkusername function to check if username is unique and odesnt exist in the database.
Validation checks that the artisan does not leave fields empty and field inputs conform to the respective regualr expressions set for them 
*/


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
        $okay = false;
    }     
    if(!$validfname == true)
    {
        echo '<br>'.'Check fields again. Firstname must not have symbols or numbers'.'<br>';
        $okay = false;
    } 
    if (!$validlname == true )
    {
        echo '<br>'.'Check fields again. Lastname must not have symbols or numbers'.'<br>';
        $okay = false;
    }   
    if(!$validpword == true) 
    {
        echo '<br>'.'Password must contain at least one upper case, symbol,number and password length not less than 6 characters'.'<br>';
        $okay = false;
    }
    if(!$validemail == true)
    {
        $okay = false;

    }

    if($okay == true)
    {   
        checkusername();
    }
} 



/*
*function to check if username entered is unique
*/
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

            registeruser();
        }                
        else
        {

            echo 'Username already exist in the database'; 

        }

        registeruser();
    }                
    else
    {
        echo 'Username already exist in the database'; 

    }

}


/*
a function to register a new artisan into the database. 
*/


function registeruser()
{

   //variables defined
    session_start();

    $_SESSION['uname'] = $_REQUEST['username'];
    $_SESSION['pword'] =  $_REQUEST['passwd'];
    $_SESSION['fname'] =  $_REQUEST['fName'];
    $_SESSION['lname'] =  $_REQUEST['lName'];
    $_SESSION['email'] =  $_REQUEST['email'];

    $f1 = $_SESSION['uname'];
    $f2 = $_SESSION['pword'];
    $f3 =  $_SESSION['fname'];
    $f4 =   $_SESSION['lname'];
    $f5 = $_SESSION['email'];

    $pword = password_hash($_SESSION['pword'],PASSWORD_DEFAULT);


              //write query
    $sql = "INSERT INTO artisan (first_name, last_name, email, password, username) VALUES (\"".$f3."\", \"".$f4."\", \"".$f5."\", \"".$pword."\", \"".$f1."\")";

    //create instance of a database class
    $reguser = new dbconnection;


                //execute query 
    $registration = $reguser->query($sql);


    if($registration)
    {
        header("Location: ../Register/restDetails.php");

    }  else 
    {
        $GLOBALS['errorregister'] = "User cant be registered" ;
    } 

}


function loadArtisan(){
//create a new instance of the database
    $loadArtisan = new dbconnection;

    //write sql
    $sql = 'SELECT * FROM `artisan`';

    //query the sql
    $artisanName = $loadArtisan->query($sql);


//check if results were returned
    if($artisanName)
    {
        while ($row = $loadArtisan->fetch())
         {
        echo "<option value ='".$row['firstname']."'>".$row['lastname']."</option>";
        }
    }

}

/*
to review the artisan, the user enters their first name, last name, email, ratings and their comment
*/
function reviewArtisan(){

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email =$_POST['email'];
$ratings =$_POST['ratings'];
$comments =$_POST['comments'];

$ok = true;
if (empty($firstname)){
        echo "Please provide your first name. <br>";
        $ok= false;
    }

    if (empty($_POST['last_name'])){
        echo "Please Enter your last name. <br>";
        $ok = false;
    }

if (empty($_POST['email'])){
        echo "Please Enter your e-mail address. <br>";
        $ok = false;
    }

if (empty($_POST['ratings'])){
        echo "Please rate the artisan. <br>";
        $ok = false;
    }



    if($ok){
validateReview();
    }
}


function validateReview()
    {
    
    //Write sql
    $sql1 = "INSERT INTO `artisan_client` (first_name, last_name, email) VALUES (\"".$_POST['first_name']."\", \"". $_POST['last_name']."\", \"".$_POST['email']."\")";
    $sql2 = "INSERT INTO `review` (ratings, comments) VALUES (\"".$_POST['ratings']."\", \"". $_POST['comments']."\")";
    
    $reviewArtisan = new dbconnection;


$review1 = $reviewArtisan -> query($sql1);
$review2= $reviewArtisan -> query($sql2);

if ($review1 && $review2){
echo "Thanks for your Review!";
header("Location: ../Register/restDetails.php");

}

   else
   {
       echo "Error: " . $sql1 . "<br>";
   }
}




/*
a function to validate prefill details for an registered artisan's profile page. Successful validation leads to the addrestdetails that would add the artisans prefill details into te database.
Validation checks that the artisan does not leave fields empty
@return boolean 
*/
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

    if($ok== true){
        addUserDetails();
    }
}


/*
a function to add prefill details for an registered artisan's profile page into the database. From then on, a redirection is done to the profile page of the respective artisan.
*/
function addUserDetails(){

    $address = $_REQUEST['address'];
    $telephone =  $_REQUEST['telephone'];
    $loc =  $_REQUEST['location'];
    $about =  $_REQUEST['aboutMe'];
    $prof =  $_REQUEST['profession'];
    $gender =  $_REQUEST['gender'];

    if(isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) 
    {
        $imag=addslashes (file_get_contents($_FILES['pic']['tmp_name']));
    } 
    session_start();

    $user = $_SESSION['uname'];
    session_destroy();

    echo $user;
//write query

    $sql = "UPDATE artisan SET address = '$address', telephone_Number = '$telephone', gender = '$gender', location = '$loc', about_me = '$about', profession = '$prof' , profile_pic = '{$imag}' WHERE username ='$user'";

//create instance of a database class

    $reguser = new dbconnection;


//query database
    $registration = $reguser->query($sql);

//if successful redirect to the login page else display error 
    if($registration)
    {

        header("Location: ../Login/Sign_in.php");

    }else
    {


        echo $reguser->error();
    } 
}


?>