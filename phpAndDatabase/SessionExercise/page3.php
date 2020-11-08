<?php//start a session
@session_start();
//get session's value
$firstname = $_SESSION["firstname"];
echo "User Firstname:".$firstname;
