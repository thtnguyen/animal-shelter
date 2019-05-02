<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $date = date('Y-m-d');
      $user_id = $_POST["user_id"];
      $user_pw = $_POST["user_pw"];
      $animal_id = $_POST["animal_id"];
      $question = $_POST["question"];

      $sql = "INSERT INTO inquiry (Profile_ID, Animal_ID, Inquiry_Date, Question, Answer, Admin_ID) VALUES
               ('$user_id', '$animal_id', '$date', '$question', NULL, NULL)";

      $type_sql = "SELECT * FROM animal WHERE Animal_ID = $animal_id";
      if($animal = $connection->query($type_sql)->fetch_assoc()){
        $name = $animal["Name"];
      }else{
        echo "Error querying animal";
      }

      if($connection->query($sql)){
        echo "Sucessfully submitted inquiry about $name.";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>

  <a href='/index.php'>Back to home page </a> <br>";

  </body>
</html>
