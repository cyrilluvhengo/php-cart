<?php
require_once "DBconn.php"; 


class aShopCart
{
   

 function __sleep() {
 $SerialVars = array('Balance');
 return $SerialVars;
}
   
public function checkout()
 {
 $ProductsOrdered = 0;
 foreach($this->shoppingCart as $productID =>$quantity) 
 {
 if ($quantity > 0)
 {
 ++$ProductsOrdered;
 $SQLstring = "INSERT INTO orders " ." (orderID, productID, quantity) " ." VALUES('" . 
session_id() . "', " .
 "'$productID', $quantity)";
 $QueryResult = $this->DBConnect-> query($SQLstring);
 }
 }
 echo "<p><strong>Your order has been " ."recorded.</strong></p>\n";
 }   
}

function __construct() {
 $DBConnect = new mysqli("php_db", "dongosselin",
 "rosebud", "real_estate")
}
function __destruct() {
 $DBConnect->close();
}

function __wakeup() {

include("DBconn.php");
$this->DBConn = $DBConn;
}
?>