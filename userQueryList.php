<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
  <body>
  <h3>Choose a user to view their donations & adoptions</h3>
  <?php
    include("connect.php");

    $connection = connectToDB();
    
    if($profiles = $connection->query("SELECT * FROM profile")){
      while($row = $profiles->fetch_assoc()){
        $id = $row[Profile_ID];
        $fname = $row[First_Name];
        $lname = $row[Last_Name];

        echo "<p>ID: " . $id . "   Name: " . $fname . " " . $lname .  " <a href='viewUser.php?id=$id'>View this user's</a>";
      }
    }else{ 
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
  ?>
  <br><br>
	<a href='/index.php'>Back to home page </a>
  </body>
</html>