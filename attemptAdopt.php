<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
</html>
<html>
	<body>
  <h3>Choose an animal to adopt</h3>
  <?php
    include("connect.php");

    $connection = connectToDB();
    if($animals = $connection->query("SELECT * FROM animal WHERE Availability > 0")){
      while($row = $animals->fetch_assoc()){
        $id = $row[Animal_ID];
        $name = $row[Name];
        $desc = $row[Description];

        echo "<p>ID: " . $id . "   Name: " . $name . "   Description: " . $desc . " || <a href='adoptForm.php?id=$id'>This animal is up for adoption</a> ";
      }
    }else{
      
        echo "Error: " . $sql . "<br>" . $connection->error;
      
    }
  ?>
  <br><br>
  <a href='/index.php'>Back to home page </a>


	</body>
</html>
