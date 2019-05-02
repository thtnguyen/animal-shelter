<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $cat_id = $_POST["cat_id"];
      $trained_str = $_POST["trained"];
      $trained = 0;
      if($trained_str === "yes") $trained = 1;
      $cat_temper = $_POST["cat_temper"];


      $sql = "INSERT INTO cat (Cat_ID, Temperment, Is_House_Trained) VALUES ('$cat_id', '$cat_temper', '$trained')";
      if($connection->query($sql) === TRUE){
        echo "Sucessfully registered new animal (cat).";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>

	The new cat ID is: <?php echo $cat_id; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>