<?php
function connect()
{
	$con= new mysqli("localhost","root","root","nitk");
	// Check connection
	if ($con->connect_errno) 
	{
		echo "Failed to connect to MySQL: " . $con->connect_errno;
	}
	return $con;
}

?>
