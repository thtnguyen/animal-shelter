<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $user_id = $_POST["user_id"];
      $user_pw = $_POST["user_pw"];
      $date = $_POST["date"];
      $animal_id = $_POST["animal_id"];
      $question = $_POST["question"];

      $sql = "INSERT INTO inquiry (Profile_ID, Animal_ID, Inquiry_Date, Question, Answer, Admin_ID) VALUES
               ('$user_id', '$animal_id', '$date', '$question', NULL, NULL)";

//  Is this how you compare a sql statement with a php variable (animal_id)?
      $type_sql = "SELECT * FROM animal WHERE Animal_ID = $animal_id"

      if($connection->query($sql) === TRUE && $animals = $connection->query($type_sql)){
          while($row = $animals->fetch_assoc()){
              $id = $row[Animal_ID];
              $name = $row[Name];
              $desc = $row[Description];

              echo "<p>ID: " . $id . "   Name: " . $name . "   Description: " . $desc . " <a href='animalChangeForm.php?id=$id'>The name and desc. of the animal you are inquiring about.</a> ";
        
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>
