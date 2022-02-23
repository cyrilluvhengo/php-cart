<?php
require_once "DBconn.php";
echo "Connected successfully";

// checking if the table exists
$query = " DROP table  if exists tbl_Customer"; 
if ($link->query($query)) 
{

}else{
echo $link->error;
}

//recreate table

$query2="CREATE TABLE tbl_Customer 
( 
Customer_ID INT NOT NULL PRIMARY KEY, 
Fullname TEXT NOT NULL ,
Email TEXT NOT NULL  
 )";
if ($link->query($query2)) 
{

}
else
echo $link->error;

$open = fopen('customer.txt','r');
 
while (!feof($open)) 
{
	$getTextLine = fgets($open);
	$explodeLine = explode(";",$getTextLine);
	
	list($Customer_ID,$Fullname,$Email) = $explodeLine;
	
	$qry = "insert into tbl_Customer (Customer_ID,Fullname,Email) values('".$Customer_ID."','".$Fullname."','".$Email."')";
	mysqli_query($link,$qry);
}
 
fclose($open);

?>





