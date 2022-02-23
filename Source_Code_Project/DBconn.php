<?php
/*Database Credentials .Assuming you are running mySQL
server with default settings (user 'root' with no password) */
define ('DB_SERVER', 'localhost');
define ('DB_USERNAME','root');
define ('DB_PASSWORD','');
define ('DB_NAME','test');

/* Attempt to connect to mySQL database*/
$link = mysqli_connect (DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

//Check Connection
if($link === false) {
	die("ERROR: Could Not Connect. " . mysqli_connect_error() );
}

?>