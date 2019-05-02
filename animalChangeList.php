<!DOCTYPE html>
<html>
<!-- <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style> -->
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

        echo "<p>ID: " . $id . "   Name: " . $name . "   Description: " . $desc . " <a href='animalChangeForm.php?id=$id'>Update this animal</a>";
      }
    }else{
      
        echo "Error: " . $sql . "<br>" . $connection->error;
      
    }
  ?>
  <br><br>
	<?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>


	</body>
</html>