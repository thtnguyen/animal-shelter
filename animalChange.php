<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();
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

      $sql = "UPDATE animal SET
                    Name='$name',
                    Age=$age,
                    Color='$color',
                    Description='$description',
                    Breed='$breed',
                    Size='$size',
                    Availability=$availability
                    
                    WHERE Animal_ID=$id";

      if($connection->query($sql) === TRUE){
        echo "Sucessfully updated info for $name.";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>
	<br/>

  <a href='/index.php'>Back to home page </a>
  </body>
</html>