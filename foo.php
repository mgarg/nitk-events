<?php


require 'sqlcon.php';
$con = connect();
$failed = 1;

if($con = connect()){
	$result = $con->query("SELECT * FROM participant WHERE pid = " . $_REQUEST['id']);
	if($row = $result->fetch_assoc()){
		echo $row['name'];
		$failed = 0;
	}
	$con->close();
}

if($failed){
	echo "error";
}  
?>

