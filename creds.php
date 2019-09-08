<?php

/*
	To define server-specific credentials for logging into the database edit the file below
	If only one server is used you can just edit the else code block
*/
if (gethostname() == "mediaserver") {
	$servername = "localhost";
	$username 	= "username";
	$password 	= "password";
	$database 	= "cooked";
}
else {
	$servername = "mysql.yourdomain.com";
	$username 	= "username";
	$password 	= "password";
	$database 	= "cooked";
}
?>
