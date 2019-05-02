<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <?php include("connect.php");

$connection = connectToDB();
if(isset($_GET['id']))
  $targetID = $_GET['id'];


if($query = $connection->query("SELECT * FROM animal WHERE Animal_ID=$targetID")){
  $animal = $query->fetch_assoc();
  $name = $animal["Name"];
  $type = $animal["Type"];
  if($animal["Availability"] == 1)
    $avail = "yes";
  else
    $avail = "no";
  $age = $animal["Age"];
  $color = $animal["Color"];
  $desc = $animal["Description"];
  $size = $animal["Size"];
  $breed = $animal["Breed"];

}else{
  echo "Error: " . $sql . "<br>" . $connection->error;
}
  ?>

<h3> Modification Form for <?php echo $name; ?> </h3>
<form action="animalChange.php" method="post">
      <input type="hidden" name="animal_id" value=<?php echo $targetID; ?>>
      Name: <input type="text" name="animal_name" value=<?php echo $name; ?>><br>
      Age: <input type="number" step="1" name="animal_age" value=<?php echo $age; ?>><br>
      Color: <input type="text" name="animal_color" value=<?php echo $color; ?>><br>
      Description: <input type="text" name="animal_desc" value=<?php echo $desc;?>><br>
      Size(lbs): <input type="text" name="animal_size" value=<?php echo $size; ?>><br>
      Breed: <input type="text" name="animal_breed" value=<?php echo $breed; ?>><br>

      Is available: 
      <input type="radio" id="isAvailable"
       name="availability" value="yes" <?php if($avail === "yes") echo "checked"; ?>>
      <label for="isAvailable">Yes</label>

      <input type="radio" id="notAvailable"
       name="availability" value="no" <?php if($avail === "no") echo "checked"; ?>>
      <label for="notAvailable">No</label>
      <br>
      <input type="submit">
    </form>
    <br>
    <a href='/index.php'>Back to home page </a>
</html>