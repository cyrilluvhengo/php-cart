<?php
require_once "DBconn.php";
echo "Connected successfully";

// checking if the table exists
$query = " DROP table  if exists tbl_item"; 
if ($link->query($query)) 
{

}else{
echo $link->error;
}

//recreate table

$query2="CREATE TABLE tbl_item 
( 
ItemID TEXT NOT NULL PRIMARY KEY, 
Description TEXT NOT NULL ,
Cost_Price DECIMAL(15,2) NOT NULL , 
Quantity INT(10) NOT NULL , 
Sell_Price DECIMAL(15,2) NOT NULL ,
image VARCHAR(255) NOT NULL , 
 )";
if ($link->query($query2)) 
{

}
else
echo $link->error;

$open = fopen('item.txt','r');
 
while (!feof($open)) 
{
	$getTextLine = fgets($open);
	$explodeLine = explode(";",$getTextLine);
	
	list($ItemID,$Description,$Cost_Price,$Quantity,$Sell_Price,$image) = $explodeLine;
	
	$qry = "insert into tbl_item (ItemID,Description,Cost_Price,Quantity,Sell_Price,image) values('".$ItemID."','".$Description."','".$Cost_Price."','".$Quantity."','".$Sell_Price."','".$image."')";
	mysqli_query($link,$qry);
}
 
fclose($open);

?>





