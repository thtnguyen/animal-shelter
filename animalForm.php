<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
	<body>
  <h3>Add an Animal</h3>
    <form action="animalUpdate.php" method="post">
      Animal ID: <input type="text" name="animal_id"
      value= <?php 
      include("connect.php");
      $connection = connectToDB();
     
      // $animals = $connection->query("SELECT Animal_ID from animal");
      // echo $animals->num_rows+1;
      $animals = $connection->query("SELECT MAX(Animal_ID) as 'max' from animal")->fetch_assoc();
      echo $animals["max"]+1;
      $connection->close();
      ?>
      readonly><br>
      Name: <input type="text" name="animal_name"><br>
      Age: <input type="number" step="1" name="animal_age"><br>
      Color: <input type="text" name="animal_color"><br>
      Description: <input type="text" name="animal_desc"><br>
      Size(lbs): <input type="text" name="animal_size"><br>
      Type: <br>

      <select name="animal_type" size="5">
      <option value="cat">Cat</option>
      <option value="dog">Dog</option>
      <option value="bird">Bird</option>
      <option value="rodent">Rodent</option>
      <option value="horse">Horse</option>
      </select>

      <br>
      Breed: <input type="text" name="animal_breed"><br>

      Is available: 
      <input type="radio" id="isAvailable"
       name="availability" value="yes" checked>
      <label for="isAvailable">Yes</label>

      <input type="radio" id="notAvailable"
       name="availability" value="no">
      <label for="notAvailable">No</label>

      <br>
      <input type="submit">
      <br>
    </form>
    
  <a href='/index.php'>Back to home page </a> 


	</body>
</html>