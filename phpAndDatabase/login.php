<?php
$username = $_POST["username"];
$password = $_POST["password"];

echo "Username:" . $username;
echo "Password:" . $password;

//create a database connection
$server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "t8jnow42fmp1smpt";
$dbpassword = "fdavedw769oxw5pd";
$dbname = "k2nfay1osz1i59kc";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if ($conn->error) {
    echo $conn->error;
} else {
    echo "Connected";
}

//create a query
$sql = "select * from users 
where username = '" . $username . "' and password = '" . $password."'";
echo $sql;
//run my query
$result = mysqli_query($conn, $sql);

//show result
if ($result->num_rows == 1) {
    echo "you have login";
    while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];
    }
} else {
    echo "wrong username or password";
}

