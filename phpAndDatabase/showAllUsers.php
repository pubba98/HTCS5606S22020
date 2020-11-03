<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show all users</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>
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
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["firstname"]."</td>";
        echo "<td>".$row["lastname"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["phoneNumber"]."</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
