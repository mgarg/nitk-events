<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>
  <div id = "divtop">
    <h1>NITK EVENTS</h1>
  </div>

  <?php
  require 'sqlcon.php';

  if($con = connect()){
    $result = $con->query("SELECT * FROM participant");

    while($row = $result->fetch_assoc())
    {
      echo $row['name'] . " " . $row['contact_no'];
      echo "<br>";
    }
    echo "your event has been added";
    $con->close();
  }  

  ?>

</body>
</html>