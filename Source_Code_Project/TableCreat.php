<?php

require_once "DBconn.php";

// checking if the table exists
$query = " DROP table  if exists tbl_User"; 
if ($link->query($query)) 
{
	echo "Table tbl_User deleted  ....";



	}else{
		echo $link->error;
	}

	//recreate table

	$sqlTab = "CREATE TABLE tbl_User 
					(
					ID int(15) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
					FName varchar(255) NOT NULL,
					LName varchar(255) NOT NULL,
					Email varchar(255) NOT NULL,
					Password varchar(255) NOT NULL
					)";
	if ($link->query($sqlTab) === TRUE) 
	{
		echo "created table tbl_User";
		// Attempt insert query execution
		$open = fopen('userData.txt','r');
		 
		while (!feof($open)) 
		{
			$getTextLine = fgets($open);
			$explodeLine = explode(";",$getTextLine);
			
			list($F_Name,$L_Name,$Email,$Password) = $explodeLine;
			
			$qry = "insert into tbl_User (FName, LName,Email,Password) values('".$F_Name."','".$L_Name."','".$Email."','".$Password."')";
			mysqli_query($link,$qry);
		}
		// File closing
		fclose($open);

		// Close link
		mysqli_close($link);
	}
	else
	{
		echo $link->error;
	}	




?>





