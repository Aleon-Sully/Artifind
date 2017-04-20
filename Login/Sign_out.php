<?php

//start the session
session_start();


//end the session
session_destroy();


//send the person page to the homepage after signing out
header('Loctaion: ../index.php');

?>