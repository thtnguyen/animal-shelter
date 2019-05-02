<!DOCTYPE html>
<html>
	<body>
  <h3>Add an Animal</h3>
    <form action="animalUpdate.php" method="post">
      Animal ID: <input type="text" name="animal_id"
      value= <?php 
      include("connect.php");
      $connection = connectToDB();
     
      $animals = $connection->query("SELECT Animal_ID from animal");
      echo $animals->num_rows+1;
      $connection->close();
      ?>
      readonly><br>
      Name: <input type="text" name="animal_name"><br>
      Age: <input type="number" step="1" name="animal_age"><br>
      Color: <input type="text" name="animal_color"><br>
      Description: <input type="text" name="animal_desc"><br>
      Size(lbs): <input type="text" name="animal_size"><br>
      Type: 

      <select name="animal_type" size="5">
      <option value="cat">Cat</option>
      <option value="dog">Dog</option>
      <option value="bird">Bird</option>
      <option value="rodent">Rodent</option>
      <option value="horse">Horse</option>
      </select>

      Breed: <input type="text" name="animal_breed"><br>

      Is available: 
      <input type="radio" id="isAvailable"
       name="availability" value="yes" checked>
      <label for="isAvailable">Yes</label>

      <input type="radio" id="notAvailable"
       name="availability" value="no">
      <label for="notAvailable">No</label>

      <input type="submit">
    </form>
    
	<?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>


	</body>
</html>