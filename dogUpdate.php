<html>
  <body>
    <?php
      include('connect.php');
      $connection = connectToDB();

      $dog_id = $_POST["dog_id"];
      $trained_str = $_POST["trained"];
      $trained = 0;
      if($trained_str === "yes") $trained = 1;
      $coat_len = $_POST["dog_coat"];


      $sql = "INSERT INTO dog (Dog_ID, Coat_Length, Is_House_Trained) VALUES ('$dog_id', '$coat_len', '$trained')";
      if($connection->query($sql) === TRUE){
        echo "Sucessfully registered new animal (dog).";
      }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>

	Your ID is: <?php echo $_POST["dog_id"]; ?>
	<br/>

  <?php
	  echo "<a href='/index.php'>Back to home page </a> <br>";
  ?>
  </body>
</html>