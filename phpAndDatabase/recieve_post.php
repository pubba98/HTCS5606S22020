<?php
$username = $_POST["username"]; //in side the squre bracket, it should be the name of the input box
$password = $_POST["password"];
$number = $_POST["myNumber"];
$color = $_POST["myColor"];
$select = $_POST["mySelect"];

echo "Username: ".$username;
echo "<br>Password: ".$password;
echo "<br>Number: ".$number;
echo "<br>Color: ".$color;
echo "<br>Selection: ".$select;
