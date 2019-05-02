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
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
    ?>

	The new dog ID is: <?php echo $dog_id; ?>
	<br/>

   <a href='/index.php'>Back to home page </a>
  </body>
</html>