<?php

//set values to session variables
//$_SESSION["username"] = "lei";
//$_SESSION["password"] = "song";
//$_SESSION["color"] = "red";
//$_SESSION["Address"] = "139 Carrington Road";
if (isset($_POST["message"])){
    echo "<p>I have a post message in this page</p>";
    //start a session
    @session_start();
    //set session variable
    $_SESSION["message"] = $_POST["message"];
}else{
    echo "<p>Please post a message to me</p>";
}
?>
<html>
<head>
    <title>Session Exercise</title>
</head>

<body>
<ul>
    <li><a href="page1.php">Page 1</a> </li>
    <li><a href="page2.php">Page 2</a> </li>
    <li><a href="page3.php">Page 3</a> </li>
    <li><a href="page4.php">Page 4</a> </li>
    <li><a href="page5.php">Page 5</a> </li>
</ul>

<form action="<?php $_SERVER["PHP_SELF"]; ?>"  method="post">
    <input name="message" type="text" placeholder="message here">
    <input type="submit" value="Post">
</form>
</body>
</html>

