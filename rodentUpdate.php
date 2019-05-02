<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $rodent_id = $_POST["rodent_id"];
      $trained_str = $_POST["trained"];
      $trained = 0;
      if($trained_str === "yes") $trained = 1;


      $sql = "INSERT INTO rodent (Rodent_ID, Is_House_Trained) VALUES ('$rodent_id', '$trained')";
      if($connection->query($sql) === TRUE){
        echo "Sucessfully registered new animal (rodent).";
      }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>

	The new rodent ID is: <?php echo $rodent_id; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>