<?php
//take the post from any product
$productID = $_POST["productID"];
$qty = $_POST["qty"];
//1. start a session
@session_start();
//2. get or set session variable
// if I don't have an ordered products list in my session, I will create one
if (isset($_SESSION["orderedProductIDs"])){
    //if something has been in our sopping cart
    $orderedProductIDs = $_SESSION["orderedProductIDs"];
    $orderedProductQtys = $_SESSION["orderedProductQtys"];
    if (in_array($productID, $orderedProductIDs)){
        $index = array_search($productID, $orderedProductIDs);
        $orderedProductQtys[$index] = $orderedProductQtys[$index] + $qty;
    }else{
        //this situation only happen if there is no same product in our shopping cart
        array_push($orderedProductIDs, $productID); // append one at bottom of the array
        array_push($orderedProductQtys, $qty);
    }

}else{
    //if nothing in our shopping cart yet
    $orderedProductIDs = [];
    $orderedProductQtys = [];
    array_push($orderedProductIDs, $productID); // append one at bottom of the array
    array_push($orderedProductQtys, $qty);
}
//put the new ordered product lists back to session variables
$_SESSION["orderedProductIDs"] = $orderedProductIDs;
$_SESSION["orderedProductQtys"] = $orderedProductQtys;

//go back to previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);
