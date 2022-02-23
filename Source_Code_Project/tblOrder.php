<?php
require_once "DBconn.php";
echo "Connected successfully";

// checking if the table exists
$query = " DROP table  if exists tbl_Order"; 
if ($link->query($query)) 
{

}else{
echo $link->error;
}

//recreate table

$query2="CREATE TABLE tbl_Order (
    OrderID int NOT NULL AUTO_INCREMENT,
    OrderNumber int NOT NULL,
    Customer_ID int NOT NULL,
	ItemID TEXT NOT NULL,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (Customer_ID) REFERENCES tbl_Customer(Customer_ID),
	FOREIGN KEY (ItemID) REFERENCES tbl_item(ItemID)
);"
if ($link->query($query2)) 
{

}
else
echo $link->error;

$open = fopen('order.txt','r');
 
while (!feof($open)) 
{
	$getTextLine = fgets($open);
	$explodeLine = explode(";",$getTextLine);
	
	list($OrderNumber,$Customer_ID,$ItemID) = $explodeLine;
	
	$qry = "insert into tbl_Order (OrderNumber,Customer_ID,ItemID) values('".$OrderNumber."','".$Customer_ID."','".$ItemID."')";
	mysqli_query($link,$qry);
}
 
fclose($open);

?>





