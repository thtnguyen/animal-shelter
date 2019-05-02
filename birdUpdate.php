<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $bird_id = $_POST["bird_id"];
      $trained_str = $_POST["trained"];
      $trained = 0;
      if($trained_str === "yes") $trained = 1;
      $bird_color = $_POST["cat_temper"];


      $sql = "INSERT INTO bird (Bird_ID, Feather_Color, Is_House_Trained) VALUES ('$bird_id', '$bird_color', '$trained')";
      if($connection->query($sql) === TRUE){
        echo "Sucessfully registered new animal (bird).";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }

      //$connection->close();
    ?>

	The new bird ID is: <?php echo $bird_id; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>