<?php
// Create a database connection
$server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "t8jnow42fmp1smpt";
$dbpassword = "fdavedw769oxw5pd";
$dbname = "k2nfay1osz1i59kc";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if ($conn->error){
    echo $conn->error;
}else{
    echo "Connected";
}

// write a query
$sql = "select * from users";
// execute the query
$result = mysqli_query($conn, $sql);

// show my result
while ($row = $result->fetch_assoc()) {
    echo $row["firstname"];
}
