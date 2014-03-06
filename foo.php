<?php
$q=$_REQUEST["arg1"]; $hint="";

require 'sqlcon.php';
$con = connect();
if($con){
	$result = mysqli_query($con, "SELECT * FROM participant");

	while($row = mysqli_fetch_array($result))
	{
		echo $row['name'] . " " . $row['contact_no'];
		echo "<br>";
	}

	mysqli_close($con);

}

?>

