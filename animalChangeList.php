<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
</html>
<html>
	<body>
  <h3>Choose an animal to update</h3>
  <?php
    include("connect.php");

    $connection = connectToDB();
    
    if($animals = $connection->query("SELECT * FROM animal")){
      while($row = $animals->fetch_assoc()){
        $id = $row[Animal_ID];
        $desc = $row[Description];
        $name = $row[Name];

        echo "<p>ID: " . $id . "   Name: " . $name . "   Description: " . $desc . " <a href='animalChangeForm.php?id=$id'>Update this animal</a> ";
        echo " || <a href='animalDelete.php?id=$id'>Delete this animal</a>";
        echo " || <a href='viewInquiries.php?id=$id'>View this animal's inquiries</a>";
      }
    }else{
      
        echo "Error: " . $sql . "<br>" . $connection->error;
      
    }
  ?>
  <br><br>
  <a href='/index.php'>Back to home page </a>


	</body>
</html>