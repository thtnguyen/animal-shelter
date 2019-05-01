<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $date = date('Y-m-d');
      $id = $_POST["animal_id"];
      $name = $_POST["animal_name"];
      $age = $_POST["animal_age"];
      $color = $_POST["animal_color"];
      $description = $_POST["animal_desc"];
      $breed = $_POST["animal_breed"];
      $size = $_POST["animal_size"];
      $availability_str = $_POST["availability"];

      $availability = 0;
      if($availability_str === "yes") $availability = 1;

      $type = $_POST["animal_type"];

      $sql = "INSERT INTO animal (Animal_ID, Posted_Date, Type, Name, Age, Color, Description, Breed, Size, Availability )
             VALUES ('$id', '$date', '$type', '$name', '$age','$color', '$description', '$breed', '$size', '$availability' )";
      if($connection->query($sql) === TRUE){
        switch($type){
          case "dog":{
            echo "
            <h3>Additional Type Information</h3>
            <form action='dogUpdate.php' method='post'>
            Dog ID: <input type='text' value= $id name='dog_id' readonly><br>
            Coat Length: <input type='text' name='dog_coat'><br>
            House Trained ?  
            
            <input type='radio' id='isTrained'
            name='trained' value='yes' checked>
           <label for='isTrained'>Yes</label>
     
           <input type='radio' id='notTrained'
            name='trained' value='no'>
           <label for='notTrained'>No</label>

           <input type='submit'>
          </form>
            ";
            break;
          }
          case "cat":{
            echo "
            <h3>Additional Type Information</h3>
            <form action='catUpdate.php' method='post'>
            Cat ID: <input type='text' value= $id name='cat_id' readonly><br>
            Temperament: <input type='text' name='cat_temper'><br>
            House Trained ?  
            
            <input type='radio' id='isTrained'
            name='trained' value='yes' checked>
           <label for='isTrained'>Yes</label>
     
           <input type='radio' id='notTrained'
            name='trained' value='no'>
           <label for='notTrained'>No</label>

           <input type='submit'>
          </form>
            ";
            break;
          }
          case "bird":{
            echo "
            <h3>Additional Type Information</h3>
            <form action='birdUpdate.php' method='post'>
            Bird ID: <input type='text' value= $id name='bird_id' readonly><br>
            Feather color: <input type='text' name='bird_color'><br>
            House Trained ?  
            
            <input type='radio' id='isTrained'
            name='trained' value='yes' checked>
           <label for='isTrained'>Yes</label>
     
           <input type='radio' id='notTrained'
            name='trained' value='no'>
           <label for='notTrained'>No</label>


           <input type='submit'>
          </form>
            ";
            break;
          }
          case "rodent":{
            echo "
            <h3>Additional Type Information</h3>
            <form action='rodentUpdate.php' method='post'>
            Rodent ID: <input type='text' value= $id name='rodent_id' readonly><br>
            House Trained ?  
            
            <input type='radio' id='isTrained'
            name='trained' value='yes' checked>
           <label for='isTrained'>Yes</label>
     
           <input type='radio' id='notTrained'
            name='trained' value='no'>
           <label for='notTrained'>No</label>


           <input type='submit'>
          </form>
            ";
            break;
          }
          case "horse":{
            echo "
            <h3>Additional Type Information</h3>
            <form action='horseUpdate.php' method='post'>
            Horse ID: <input type='text' value= $id name='horse_id' readonly><br>
            Mane color: <input type='text name='horse_mane'><br>

           <input type='submit'>
          </form>
            ";
            break;
          }
        }
      }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>

	Your ID is: <?php echo $_POST["animal_id"]; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>