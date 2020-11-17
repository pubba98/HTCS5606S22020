<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
@session_start();

$orderedProductIDs = $_SESSION["orderedProductIDs"];
$orderedProductQtys = $_SESSION["orderedProductQtys"];

$i = 0;
while ($i<sizeof($orderedProductIDs)){
    $orderedProductID = $orderedProductIDs[$i];
    $orderedProductQty = $orderedProductQtys[$i];
    $productName = getProductNameByProductID($orderedProductID);
    $price=getProductPriceByProductID($orderedProductID);
    echo "<p>Name: $productName Qty: $orderedProductQty Price: $price</p>";
    $i++;
}


function createDatabaseConnection(){
    //1. connect to database
    $server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}

/**
 * @name getProductNameByProductID
 * @param $productID
 * @return product name
 */
function getProductNameByProductID($productID){
    //1. create a db connection
    $conn = createDatabaseConnection();
    //2. query
    $sql = "select name from products where id=$productID";
    echo $sql;
    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row = $result->fetch_assoc()){
        $name = $row["name"];
    }
    return $name;
}


/**
 * @name getProductPriceByProductID
 * @param $productID
 * @return product price
 */
function getProductPriceByProductID($productID){
    //1. create a db connection
    $conn = createDatabaseConnection();
    //2. query
    $sql = "select price from products where id=$productID";
    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row=$result->fetch_assoc()){
        $price = $row["price"];
    }
    return $price;
}
