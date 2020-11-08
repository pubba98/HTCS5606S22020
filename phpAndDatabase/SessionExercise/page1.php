<?php
//start a session
@session_start();
//get session's value
$username = $_SESSION["username"];
echo "Username:".$username;
