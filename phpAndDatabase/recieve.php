<?php
$username = $_GET["username"]; //in side the squre bracket, it should be the name of the input box
$password = $_GET["password"];
$number = $_GET["myNumber"];
$color = $_GET["myColor"];
$select = $_GET["mySelect"];

echo "Username: ".$username;
echo "<br>Password: ".$password;
echo "<br>Number: ".$number;
echo "<br>Color: ".$color;
echo "<br>Selection: ".$select;
