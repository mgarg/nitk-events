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
    $result = mysqli_query($con,"SELECT * FROM participant");

    while($row = mysqli_fetch_assoc($result))
    {
      echo $row['name'] . " " . $row['contact_no'];
      echo "<br>";
    }
    echo "your event has been added";
    mysqli_close($con);
  }  

  ?>

</body>
</html>