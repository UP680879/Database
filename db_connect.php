<?php	

/*
Here we are going to keep recored of the database connection_aborted
like the use, host, server and password

*/
	$conn_error = 'Not connected'; // this is the message error 
	
	$db_name = "INSE";  // this is the database name
	
	$un = 'root1';    // this is the username 
	
	$pw = 'root';   // this is the passowrd
	
	$host = 'localhost';  // this is the localhost server
	
	$conn = @mysql_connect($host, $un, $pw) or die(mysql_error($conn_error));

	//Here we keep recored of the sql command for do the coonection to the database	

	//echo('Connected to my SQL DataBase User ');
	
	@mysql_select_db($db_name) or die (mysql_error());
	
	//Here to select the specific database name with the sql command 
	
	//echo("<br/>Connected to DataBase ".$db_name);
?>
